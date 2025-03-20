<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Document Viewer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .header-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .filter-form {
            margin-bottom: 20px;
            padding: 15px;
            background-color: #f5f5f5;
            border-radius: 4px;
        }
        .filter-form label, .filter-form select {
            margin-right: 15px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        .view-btn {
            background-color: #2e68b8;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            display: inline-block;
            opacity: 0.85;
        }
        .view-btn:hover{
            opacity: 1;
        }
        select {
            width: 75%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }
        .no-documents {
            text-align: center;
            padding: 20px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="header-section">
        <h1>Available Documents</h1>
    </div>
    
    <div class="filter-form">
        <form method="GET">
            <label for="standard">Filter by Standard:</label>
            <select id="standard" name="standard" onchange="this.form.submit()">
                <option value="">All Standards</option>
                <option value="1" <?php echo isset($_GET['standard']) && $_GET['standard'] == '1' ? 'selected' : ''; ?>>Standard 1</option>
                <option value="2" <?php echo isset($_GET['standard']) && $_GET['standard'] == '2' ? 'selected' : ''; ?>>Standard 2</option>
                <option value="3" <?php echo isset($_GET['standard']) && $_GET['standard'] == '3' ? 'selected' : ''; ?>>Standard 3</option>
                <option value="4" <?php echo isset($_GET['standard']) && $_GET['standard'] == '4' ? 'selected' : ''; ?>>Standard 4</option>
                <option value="5" <?php echo isset($_GET['standard']) && $_GET['standard'] == '5' ? 'selected' : ''; ?>>Standard 5</option>
                <option value="6" <?php echo isset($_GET['standard']) && $_GET['standard'] == '6' ? 'selected' : ''; ?>>Standard 6</option>
                <option value="7" <?php echo isset($_GET['standard']) && $_GET['standard'] == '7' ? 'selected' : ''; ?>>Standard 7</option>
                <option value="8" <?php echo isset($_GET['standard']) && $_GET['standard'] == '8' ? 'selected' : ''; ?>>Standard 8</option>
            </select>
        </form>
    </div>
    
    <?php
    // Load documents from JSON file
    $documentsFile = "documents.json";
    $documents = [];
    
    if (file_exists($documentsFile)) {
        $documents = json_decode(file_get_contents($documentsFile), true);
    }
    
    // Filter by standard if requested
    if (isset($_GET['standard']) && $_GET['standard'] !== '') {
        $filteredDocuments = [];
        foreach ($documents as $document) {
            if ($document['standard'] == $_GET['standard']) {
                $filteredDocuments[] = $document;
            }
        }
        $documents = $filteredDocuments;
    }
    
    // Function to check if file is a PDF
    function isPDF($filename) {
        $extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        return $extension === 'pdf';
    }
    
    // Display documents in a table
    if (!empty($documents)) {
        echo '<table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Standard</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>';
        
        foreach ($documents as $index => $document) {
            $isPdf = isPDF($document['original_name']);
            
            echo '<tr>
                <td>' . htmlspecialchars($document['title']) . '</td>
                <td>Standard ' . htmlspecialchars($document['standard']) . '</td>
                <td>' . htmlspecialchars(explode(' ', $document['upload_date'])[0]) . '</td>
                <td>';
            
            // Add View button if it's a PDF
            if ($isPdf) {
                echo ' <a href="view.php?file=' . urlencode($document['filename']) . '" class="view-btn">View PDF</a>';
            }
            
            echo '</td>
            </tr>';
        }
        
        echo '</tbody></table>';
    } else {
        echo '<div class="no-documents">No documents available.</div>';
    }
    ?>
</body>
</html>
