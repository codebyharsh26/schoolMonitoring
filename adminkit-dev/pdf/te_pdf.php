<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Document Upload</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background-color: #fff;
            padding: 20px 20px 20px 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 50vw;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            width: 100%;
            background-color: #2e68b8;
            color: white;
            padding: 10px;
            border: none;
            #f8d7da border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            opacity: 0.9;
        }

        button:hover {
            transition: background-color 0.3s ease;
            background-color: #2e68b8;
            opacity: 1;
            /* color: white; */
        }

        .alert {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
            text-align: center;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h1>Upload Document</h1>

        <?php
        // Define upload directory
        $uploadDir = "uploads/";

        // Create directory if it doesn't exist
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Process form submission
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $title = trim($_POST["title"]);
            $standard = $_POST["standard"];
            $file = $_FILES["document"];

            // Validate input
            $errors = [];
            if (empty($title)) {
                $errors[] = "Title is required";
            }

            if (empty($standard)) {
                $errors[] = "Standard is required";
            }

            if ($file["error"] != 0) {
                $errors[] = "File upload error: " . $file["error"];
            }

            // If no errors, process the upload
            if (empty($errors)) {
                // Generate unique filename
                $filename = time() . "_" . basename($file["name"]);
                $targetPath = $uploadDir . $filename;

                // Move uploaded file
                if (move_uploaded_file($file["tmp_name"], $targetPath)) {
                    // Store file metadata in database or file
                    $metadata = [
                        "title" => $title,
                        "standard" => $standard,
                        "filename" => $filename,
                        "original_name" => $file["name"],
                        "upload_date" => date("Y-m-d H:i:s")
                    ];

                    // In a real application, you'd store this in a database
                    // For this example, we'll store it in a JSON file
                    $documentsFile = "documents.json";
                    $documents = [];

                    if (file_exists($documentsFile)) {
                        $documents = json_decode(file_get_contents($documentsFile), true);
                    }

                    $documents[] = $metadata;
                    file_put_contents($documentsFile, json_encode($documents, JSON_PRETTY_PRINT));

                    echo '<div class="alert alert-success">Document uploaded successfully!</div>';
                } else {
                    echo '<div class="alert alert-danger">Failed to upload document.</div>';
                }
            } else {
                echo '<div class="alert alert-danger">';
                foreach ($errors as $error) {
                    echo $error . "<br>";
                }
                echo '</div>';
            }
        }
        ?>

        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Document Title:</label>
                <input type="text" id="title" name="title" required>
            </div>

            <div class="form-group">
                <label for="standard">Standard:</label>
                <select id="standard" name="standard" required>
                    <option value="">Select Standard</option>
                    <option value="All Standard">All Standard</option>
                    <option value="1">Standard 1</option>
                    <option value="2">Standard 2</option>
                    <option value="3">Standard 3</option>
                    <option value="4">Standard 4</option>
                    <option value="5">Standard 5</option>
                    <option value="6">Standard 6</option>
                    <option value="7">Standard 7</option>
                    <option value="8">Standard 8</option>
                </select>
            </div>

            <div class="form-group">
                <label for="document">Select Document:</label>
                <input type="file" id="document" name="document" required>
            </div>

            <button type="submit">Upload Document</button>
        </form>
    </div>
</body>

</html>