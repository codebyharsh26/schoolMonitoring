<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {
    header("Location: index.php"); // Redirect to login page
    exit;
}

include_once "connection.php";

// Fetch teacher data using the ID stored in session
$teacher_id = $_SESSION["teacher_id"];

// Use prepared statement for security
$stmt = $conn->prepare("SELECT * FROM teacher_1 WHERE id = ?");
$stmt->bind_param("i", $teacher_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $teacher = $result->fetch_assoc();

    // Now $teacher contains all the information for the logged-in teacher
    // You can display it as needed
} else {
    // Something went wrong
    echo "Error: Teacher information not found";
    session_destroy();
    header("Location: index.php");
    exit;
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/" />

    <title>School Monitoring System</title>

    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="/schoolMonitoring/adminkit-dev/static/css/card-direction.css"> -->
    <style>
        .sidebar {
            position: sticky;
            top: 0;
            height: 100vh;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .fill {
            background: white;
            margin: 25px;
        }

        .cus {
            /* margin: 25px; 	 */
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }

        .cus1 {
            display: flex;
            flex-direction: row;
            justify-content: center;
            width: 100%;
        }

        .col-9 {
            width: 100%;
            padding: auto 20vw;

        }

        img .img {
            height: 50%;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f4f8ff;

        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        /* upload pdf css */
        .container-f {
            width: 100%;
            margin: auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
        }

        .label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .pdf-container {
            display: flex;
            flex-wrap: wrap;
            /* justify-content: center; */
            gap: 20px;
        }

        .pdf-card {
            width: 474px;
            background: #222e3c;
            opacity: 0.85;
            color: white;
            padding: 15px;
            border-radius: 10px;
            /* text-align: center; */
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .pdf-title {
            font-size: 18px;
            font-weight: bold;
        }

        .pdf-standard {
            font-size: 14px;
            margin-top: 5px;
        }

        .pdf-link {
            display: inline-block;
            margin-top: 10px;
            background: white;
            color: #222e3c;
            padding: 8px 15px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }

        .pdf-link:hover {
            background: #222e3c;
            opacity: 0.85;
            outline: 2px solid white;
            text-decoration: none;
            color: white;
        }

        .pdf {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            background: #f1f1f1;
        }

        .upload {
            background: white;
            margin-top: 10px;
            margin-left: 2px;
            margin-bottom: 3 px;
            color: #222e3c;
            outline: 2px solid #222e3c;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-weight: bold;
            text-decoration: none;
        }

        .upload:hover {
            background: #222e3c;
            text-decoration: none;
            color: white;
        }

        .h2 {
            color: #222e3c;
        }

        /* over upload pdf */

        h1 {
            color: #333;
        }

        .options {
            margin-bottom: 20px;
        }

        button {
            padding: 8px 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 10px;
        }

        button:hover {
            background-color: #45a049;
        }

        #file-input {
            display: none;
        }

        label {
            padding: 8px 16px;
            /* background-color: #2196F3; */
            color: white;
            border-radius: 4px;
            /* cursor: pointer; */
        }

        /* label:hover {
			background-color: #0b7dda;
		} */

        img {
            margin: 25px;
        }

        /* 
        .card {

            margin-left: 18vw;
        } */

        h5 .font {
            font-size: xx-large;
        }

        .car {
            width: 100%;
            margin-left: 5vw;
        }

        td {
            font-size: x-large;
        }

        .card-announce {
            margin: 1020px;
            width: 20vw;
            height: 40vh;
            border-radius: 10px;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            margin-left: 115px;
            padding: 25px;
        }

        .card-announce h5,
        h3 {
            margin: 15px;
        }

        .custom-student-card {
            font-size: 40px;
            margin-top: 40px;
            font-weight: 600;
            letter-spacing: 3px;
            opacity: 0.5;
            margin-left: 2vw;

        }

        .custom-student-card1 {
            font-size: 40px;
            font-weight: 600;
            letter-spacing: 3px;
            opacity: 0.5;
            margin-bottom: 5vh;

        }

        .card-custom-text {
            margin: 15px;
            letter-spacing: 2px;
        }

        #marks :root {
            --primary: #4361ee;
            --primary-light: #4895ef;
            --primary-dark: #3f37c9;
            --secondary: #f72585;
            --success: #4cc9f0;
            --danger: #f72585;
            --warning: #ff9e00;
            --light: #f8f9fa;
            --dark: #212529;
            --gray: #6c757d;
            --gray-light: #ced4da;
        }

        #marks {
            background-color: #f5f5f7;
            color: var(--dark);
            line-height: 1.6;
        }

        #marks .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        #marks .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 25px;
            margin-bottom: 20px;
        }

        #marks .header {
            text-align: center;
            margin-bottom: 30px;
        }

        #marks .header h1 {
            color: var(--primary-dark);
            margin-bottom: 10px;
        }

        #marks .header p {
            color: var(--gray);
        }

        #marks .form-group {
            margin-bottom: 20px;
        }

        #marks label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }

        #marks input,
        select {
            width: 100%;
            padding: 12px;
            border: 1px solid var(--gray-light);
            border-radius: 4px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        #marks input:focus,
        select:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 2px rgba(67, 97, 238, 0.2);
        }

        /* #marks .btn {
            display: inline-block;
            background-color: blue;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 500;
            transition: background-color 0.3s;
            width: 8vw;
        } */



        #marks .btn-secondary {
            background-color: var(--gray);
        }

        #marks .btn-secondary:hover {
            background-color: var(--dark);
        }

        #marks .form-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 30px;
        }

        #marks .alert {
            padding: 15px;
            border-radius: 4px;
            margin-bottom: 20px;
        }

        #marks .alert-success {
            background-color: rgba(76, 201, 240, 0.1);
            border: 1px solid var(--success);
            color: var(--success);
        }

        #marks .alert-danger {
            background-color: rgba(247, 37, 133, 0.1);
            border: 1px solid var(--danger);
            color: var(--danger);
        }

        .marks-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .marks-table th,
        .marks-table td {
            border: 1px solid var(--gray-light);
            padding: 10px;
            text-align: left;
        }

        .marks-table th {
            background-color: #f8f9fa;
        }

        .marks-table tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        .marks-table tr:hover {
            background-color: rgba(67, 97, 238, 0.05);
        }

        #marks .subject-fields {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 20px;
        }

        #marks .subject-field {
            flex: 1;
            min-width: 200px;
        }

        #marks .error {
            color: var(--danger);
            font-size: 14px;
            margin-top: 5px;
            display: none;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .form-actions {
                flex-direction: column;
                gap: 15px;
            }

            .form-actions .btn {
                width: 100%;
            }

            .subject-field {
                min-width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="wrapper p-0 m-0">
        <div class="sidebar">
            <?php include_once "teacher-sidebar.php"; ?>
        </div>
        <div class="main">
            <div class="navbar">
                <?php include_once "teacher-navbar.php"; ?>
            </div>
            <!-- profile section -->
            <section id="profile">
                <main class="content">
                    <div class="container-fluid p-0">
                        <?php
                        $query = "select * from teacher_1 where id = 7";
                        $result = mysqli_query($conn, $query);
                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $full_name = $teacher["full_name"];
                                $date_of_birth = $teacher["date_of_birth"];
                                $residential_address = $teacher["residential_address"];
                                $gender = $teacher["gender"];
                                $standard = $teacher["standard"];
                                $email_address = $teacher["email_address"];
                                $emergency_contact_number = $teacher["emergency_contact_number"];
                                $subject_name = $teacher["subject_name"];
                                $salary_monthly = $teacher["salary_monthly"];
                                $qualification = $teacher["qualification"];
                                $blood_group = $teacher["blood_group"];
                                $school_name = $teacher["school_name"];
                                $first_language = $teacher["first_language"];
                                $school_number = $teacher["school_number"];
                                $language_known = $teacher["language_known"];
                                $phone_number = $teacher["phone_number"];
                        ?>
                                <div class="row">
                                    <h5 class="custom-student-card1">Profile Details</h5>
                                    <div class="col-9">
                                        <div class="card mb-3 ">
                                            <div class="card-header">
                                            </div>
                                            <div class="card-body text-center">
                                                <img src="img/avatars/avatar-4.jpg" alt="Christina Mason"
                                                    class="img-fluid rounded-circle mb-2" width="128" height="128" />
                                                <h5 class="font" style="font-size: xx-large;"><?php echo $full_name; ?></h5>
                                                <div class="car">
                                                    <table style="width: 100%; margin-top: 5vh; margin-left: 4vh;">
                                                        <tr>
                                                            <td class="bol" style="text-align: left;"><b>Date-of-birth:</b>
                                                            </td>
                                                            <td style="text-align: left;"><?php echo $date_of_birth; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="bol" style="text-align: left;"><b>Address:</b></td>
                                                            <td style="text-align: left;">
                                                                <?php echo $residential_address; ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="bol" style="text-align: left;"><b>Gender:</b></td>
                                                            <td style="text-align: left;"><?php echo $gender; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="bol" style="text-align: left;"><b>Standard:</b></td>
                                                            <td style="text-align: left;"><?php echo $standard; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="bol" style="text-align: left;"><b>Email:</b></td>
                                                            <td style="text-align: left;"><?php echo $email_address; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="bol" style="text-align: left;"><b>Phone Number:</b>
                                                            </td>
                                                            <td style="text-align: left;"><?php echo $phone_number; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="bol" style="text-align: left;"><b>Emergency
                                                                    Contact:</b></td>
                                                            <td style="text-align: left;">
                                                                <?php echo $emergency_contact_number; ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="bol" style="text-align: left;"><b>Subject-Name:</b>
                                                            </td>
                                                            <td style="text-align: left;"><?php echo $subject_name; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="bol" style="text-align: left;"><b>Salary Month:</b>
                                                            </td>
                                                            <td style="text-align: left;"><?php echo $salary_monthly; ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="bol" style="text-align: left;"><b>Qualification:</b>
                                                            </td>
                                                            <td style="text-align: left;"><?php echo $qualification; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="bol" style="text-align: left;"><b>Blood-Group:</b>
                                                            </td>
                                                            <td style="text-align: left;"><?php echo $blood_group; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="bol" style="text-align: left;"><b>School Name:</b>
                                                            </td>
                                                            <td style="text-align: left;"><?php echo $school_name; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="bol" style="text-align: left;"><b>First Language:</b>
                                                            </td>
                                                            <td style="text-align: left;"><?php echo $first_language; ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="bol" style="text-align: left;"><b>School Number:</b>
                                                            </td>
                                                            <td style="text-align: left;"><?php echo $school_number; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="bol" style="text-align: left;"><b>Language-Known:</b>
                                                            </td>
                                                            <td style="text-align: left;"><?php echo $language_known; ?>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        } ?>
                    </div>
                </main>
            </section>

            <!-- timetable section -->
            <section id="timetable">
                <h5 class="custom-student-card">Time Table</h5>
                <div class="fill mt-3">
                    <div class="container-f">
                        <h2 class="h2">Upload Time Table</h2>
                        <form action="teacher-index.php" method="POST" enctype="multipart/form-data">
                            <input type="text" name="t_title" placeholder="Enter Title" required class="mb-2">
                            <select name="t_standard" required class="mb-2">
                                <option value="">Select Standard</option>
                                <option value="All">All Standards</option>
                                <option value="1">Standard 1</option>
                                <option value="2">Standard 2</option>
                                <option value="3">Standard 3</option>
                                <option value="4">Standard 4</option>
                                <option value="5">Standard 5</option>
                                <option value="6">Standard 6</option>
                                <option value="7">Standard 7</option>
                                <option value="8">Standard 8</option>
                            </select>
                            <input type="file" class="pdf" name="t_file" accept="application/pdf" required>
                            <button class="upload" type="submit" name="t_upload">Upload</button>
                        </form>
                    </div>
                </div>
                <?php
                if (isset($_POST['t_upload'])) {
                    $t_title = $_POST['t_title'];
                    $t_standard = $_POST['t_standard'];
                    $t_file = $_FILES['t_file'];

                    if ($t_file['type'] != 'application/pdf') {
                        echo "<script>alert('Only PDF files are allowed!');</script>";
                        exit;
                    }

                    $t_uploadDir = '../shared_timetable/uploads/';
                    if (!is_dir($t_uploadDir))
                        mkdir($t_uploadDir, 0777, true);
                    $t_filePath = $t_uploadDir . basename($t_file['name']);

                    if (move_uploaded_file($t_file['tmp_name'], $t_filePath)) {
                        $t_jsonFile = '../shared_timetable/documents.json';
                        $t_data = file_exists($t_jsonFile) ? json_decode(file_get_contents($t_jsonFile), true) : [];
                        $t_data[] = ['title' => $t_title, 'standard' => $t_standard, 'file' => $t_filePath];
                        file_put_contents($t_jsonFile, json_encode($t_data, JSON_PRETTY_PRINT));
                        echo "<script>alert('File uploaded successfully!');</script>";
                    } else {
                        echo "<script>alert('Error uploading file.');</script>";
                    }
                }
                ?>
            </section>
            <!-- notes section -->
            <section id="notes">
                <h5 class="custom-student-card">Notes</h5>
                <div class="fill mt-3">
                    <div class="container-f ">
                        <h2 class="h2">Upload Pdf</h2>
                        <form action="teacher-index.php" method="POST" enctype="multipart/form-data">
                            <input type="text" name="title" placeholder="Enter PDF Title" required class="mb-2">
                            <select name="standard" required class="mb-2">
                                <option value="">Select Standard</option>
                                <option value="All">All Standards</option>
                                <option value="1">Standard 1</option>
                                <option value="2">Standard 2</option>
                                <option value="3">Standard 3</option>
                                <option value="4">Standard 4</option>
                                <option value="5">Standard 5</option>
                                <option value="6">Standard 6</option>
                                <option value="7">Standard 7</option>
                                <option value="8">Standard 8</option>
                            </select>
                            <input type="file" class="pdf" name="pdf_file" accept="application/pdf" required>
                            <button class="upload" type="submit" name="upload">Upload</button>
                        </form>
                    </div>
                </div>
                <?php
                if (isset($_POST['upload'])) {
                    $title = $_POST['title'];
                    $standard = $_POST['standard'];
                    $file = $_FILES['pdf_file'];

                    if ($file['type'] != 'application/pdf') {
                        echo "<script>alert('Only PDF files are allowed!');</script>";
                        exit;
                    }

                    $uploadDir = '../shared/uploads/';
                    if (!is_dir($uploadDir))
                        mkdir($uploadDir, 0777, true);
                    $filePath = $uploadDir . basename($file['name']);

                    if (move_uploaded_file($file['tmp_name'], $filePath)) {
                        $jsonFile = '../shared/documents.json';
                        $data = file_exists($jsonFile) ? json_decode(file_get_contents($jsonFile), true) : [];
                        $data[] = ['title' => $title, 'standard' => $standard, 'file' => $filePath];
                        file_put_contents($jsonFile, json_encode($data, JSON_PRETTY_PRINT));
                        echo "<script>alert('File uploaded successfully!');</script>";
                    } else {
                        echo "<script>alert('Error uploading file.');</script>";
                    }
                }
                ?>
            </section>
            <!-- marks section -->
            <section id="marks">
                <h5 class="custom-student-card">Marks Entry</h5>
                <div class="fill mt-1">
                    <div class="wrapper">


                        <div class="main">


                            <!-- Form content starts here -->
                            <div class="container">
                                <div class="header">
                                    <h1 class="text-start">Student Marks Entry</h1>
                                </div>

                                <?php
                                // Display success message if marks added successfully
                                if (isset($_GET['success']) && $_GET['success'] == 1) {
                                    echo '<div class="alert alert-success">Student marks added successfully!</div>';
                                }

                                // Display error message if there was a problem
                                if (isset($_GET['error']) && $_GET['error'] == 1) {
                                    echo '<div class="alert alert-danger">There was an error adding the marks. Please try again.</div>';
                                }
                                ?>


                                <form id="marksForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                                    method="POST">
                                    <div class="form-group">
                                        <label for="studentName">Student Name *</label>
                                        <input type="text" id="studentName" name="student_name"
                                            placeholder="Enter student's full name" required>
                                        <div class="error" id="nameError">Please enter a valid name</div>
                                    </div>

                                    <div class="form-group">
                                        <label for="studentId">Roll Number *</label>
                                        <input type="text" id="studentId" name="roll_number"
                                            placeholder="Enter roll number" required>
                                        <div class="error" id="idError">Please enter a valid roll number</div>
                                    </div>

                                    <div class="form-group">
                                        <label for="class">Class/Grade *</label>
                                        <select id="class" name="class" required>
                                            <option value="">Select Class</option>
                                            <option value="1">Class 1</option>
                                            <option value="2">Class 2</option>
                                            <option value="3">Class 3</option>
                                            <option value="4">Class 4</option>
                                            <option value="5">Class 5</option>
                                            <option value="6">Class 6</option>
                                            <option value="7">Class 7</option>
                                            <option value="8">Class 8</option>
                                        </select>
                                        <div class="error" id="classError">Please select a class</div>
                                    </div>

                                    <div class="form-group">
                                        <label>Subject Marks *</label>
                                        <div class="subject-fields">
                                            <div class="subject-field">
                                                <label for="mathematics">Mathematics</label>
                                                <input type="number" id="mathematics" name="mathematics"
                                                    placeholder="Enter marks" min="0" max="100">
                                                <div class="error" id="mathError">Marks should be between 0 and 100
                                                </div>
                                            </div>

                                            <div class="subject-field">
                                                <label for="gujarati">Gujarati</label>
                                                <input type="number" id="gujarati" name="gujarati"
                                                    placeholder="Enter marks" min="0" max="100">
                                                <div class="error" id="gujaratiError">Marks should be between 0 and 100
                                                </div>
                                            </div>

                                            <div class="subject-field">
                                                <label for="hindi">Hindi</label>
                                                <input type="number" id="hindi" name="hindi" placeholder="Enter marks"
                                                    min="0" max="100">
                                                <div class="error" id="hindiError">Marks should be between 0 and 100
                                                </div>
                                            </div>
                                        </div>

                                        <div class="subject-fields">
                                            <div class="subject-field">
                                                <label for="art_craft">Art & Craft</label>
                                                <input type="number" id="art_craft" name="art_craft"
                                                    placeholder="Enter marks" min="0" max="100">
                                                <div class="error" id="artCraftError">Marks should be between 0 and 100
                                                </div>
                                            </div>

                                            <div class="subject-field">
                                                <label for="physical_education">Physical Education & Health</label>
                                                <input type="number" id="physical_education" name="physical_education"
                                                    placeholder="Enter marks" min="0" max="100">
                                                <div class="error" id="physicalError">Marks should be between 0 and 100
                                                </div>
                                            </div>
                                            <div class="subject-field"></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="teacher_comments">Teacher Comments</label>
                                        <input type="text" id="teacher_comments" name="teacher_comments"
                                            placeholder="Add any comments or feedback">
                                    </div>

                                    <div class="form-actions">
                                        <button type="button" class="upload" id="resetBtn">Reset Form</button>
                                        <button type="submit" name="submitBtn" class="upload" id="submitBtn">Submit
                                            Marks</button>
                                    </div>
                                </form>
                            </div>

                            <?php
                            include_once 'connection.php'; // Include database connection

                            if (isset($_POST['submitBtn'])) {
                                // Get form data
                                $student_name = mysqli_real_escape_string($conn, $_POST['student_name']);
                                $roll_number = mysqli_real_escape_string($conn, $_POST['roll_number']);
                                $class = mysqli_real_escape_string($conn, $_POST['class']);
                                $mathematics = !empty($_POST['mathematics']) ? mysqli_real_escape_string($conn, $_POST['mathematics']) : 0;
                                $gujarati = !empty($_POST['gujarati']) ? mysqli_real_escape_string($conn, $_POST['gujarati']) : 0;
                                $hindi = !empty($_POST['hindi']) ? mysqli_real_escape_string($conn, $_POST['hindi']) : 0;
                                $art_craft = !empty($_POST['art_craft']) ? mysqli_real_escape_string($conn, $_POST['art_craft']) : 0;
                                $physical_education = !empty($_POST['physical_education']) ? mysqli_real_escape_string($conn, $_POST['physical_education']) : 0;
                                $teacher_comments = mysqli_real_escape_string($conn, $_POST['teacher_comments']);

                                // Current timestamp for created_at and updated_at
                                $current_time = date('Y-m-d H:i:s');

                                // Check if required fields are filled
                                if (empty($student_name) || empty($roll_number) || empty($class)) {
                                    header("Location: add-marks.php?error=1");
                                    exit();
                                }

                                // Insert into database
                                $insert_query = "INSERT INTO student_marks (student_name, roll_number, class, mathematics, gujarati, hindi, art_craft, physical_education, teacher_comments, created_at, updated_at) 
                    VALUES ('$student_name', '$roll_number', '$class', '$mathematics', '$gujarati', '$hindi', '$art_craft', '$physical_education', '$teacher_comments', '$current_time', '$current_time')";

                                $insert_result = mysqli_query($conn, $insert_query);

                                // if ($insert_result) {
                                //     header("Location: add-marks.php?success=1");
                                //     exit();
                                // } else {
                                //     header("Location: add-marks.php?error=1");
                                //     exit();
                                // }
                            }

                            // Get recently added marks
                            $recent_marks_query = "SELECT * FROM student_marks ORDER BY created_at DESC LIMIT 10";
                            $recent_marks_result = mysqli_query($conn, $recent_marks_query);
                            ?>


                        </div>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const form = document.getElementById('marksForm');
                                const resetBtn = document.getElementById('resetBtn');

                                // Client-side validation
                                form.addEventListener('submit', function(event) {
                                    // Reset all error displays
                                    hideAllErrors();

                                    // Validate form
                                    if (!validateForm()) {
                                        event.preventDefault();
                                    }
                                });

                                // Reset form
                                resetBtn.addEventListener('click', function() {
                                    form.reset();
                                    hideAllErrors();
                                });

                                // Validate form fields
                                function validateForm() {
                                    let isValid = true;

                                    // Validate student name
                                    const studentName = document.getElementById('studentName');
                                    if (!studentName.value.trim()) {
                                        showError('nameError');
                                        isValid = false;
                                    }

                                    // Validate student ID
                                    const studentId = document.getElementById('studentId');
                                    if (!studentId.value.trim()) {
                                        showError('idError');
                                        isValid = false;
                                    }

                                    // Validate class
                                    const classSelect = document.getElementById('class');
                                    if (!classSelect.value) {
                                        showError('classError');
                                        isValid = false;
                                    }

                                    // Validate at least one subject mark is entered
                                    const subjects = [
                                        document.getElementById('mathematics'),
                                        document.getElementById('gujarati'),
                                        document.getElementById('hindi'),
                                        document.getElementById('art_craft'),
                                        document.getElementById('physical_education')
                                    ];

                                    const hasSubjectMarks = subjects.some(subject => subject.value.trim());
                                    if (!hasSubjectMarks) {
                                        showError('mathError');
                                        isValid = false;
                                    }

                                    // Validate mark ranges
                                    subjects.forEach(subject => {
                                        if (subject.value && (subject.value < 0 || subject.value > 100)) {
                                            showError(subject.id + 'Error');
                                            isValid = false;
                                        }
                                    });

                                    return isValid;
                                }

                                // Show error message
                                function showError(errorId) {
                                    const errorElement = document.getElementById(errorId);
                                    if (errorElement) {
                                        errorElement.style.display = 'block';
                                    }
                                }

                                // Hide all error messages
                                function hideAllErrors() {
                                    const errors = document.querySelectorAll('.error');
                                    errors.forEach(error => {
                                        error.style.display = 'none';
                                    });
                                }
                            });
                        </script>
                    </div>
            </section>
            <!-- leave section -->
            <section id="leave">
                <h5 class="custom-student-card ">Leave Application</h5>
                <div class="fill">
                    <div class="container mt-3">
                        <h2 class="text-start m-4">Teacher Leave Application</h2>
                        <div class="card  shadow-lg">
                            <form method="POST">
                                <div class="mb-3">
                                    <label class="form-label mb-">Name:</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Email:</label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">From Date:</label>
                                    <input type="date" name="startdate" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">To Date</label>
                                    <input type="date" name="enddate" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Reason:</label>
                                    <textarea name="reason" class="form-control" rows="3" required></textarea>
                                </div>

                                <button type="submit" class="upload ">Submit Application</button>
                            </form>
                        </div>
                    </div>

                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $name = $conn->real_escape_string($_POST['name']);
                        $email = $conn->real_escape_string($_POST['email']);
                        $start_date = $conn->real_escape_string($_POST['startdate']);
                        $end_date = $conn->real_escape_string($_POST['enddate']);
                        $reason = $conn->real_escape_string($_POST['reason']);

                        // Check if the teacher exists in the teachers table
                        $check_teacher = "SELECT email_address FROM teacher_1 WHERE email_address = '$email'";
                        $result = $conn->query($check_teacher);

                        if ($result->num_rows > 0) {
                            // Insert leave request into teacher_leave_application table
                            $insert_leave = "INSERT INTO teacher_leave_application (name, teacher_email, start_date, end_date, reason, status)
                                 VALUES ('$name', '$email', '$start_date', '$end_date', '$reason','pending')"; //default is pending

                            if ($conn->query($insert_leave) === TRUE) {
                                echo "<script>alert('Leave application submitted successfully!');</script>";
                            } else {
                                echo "<script>alert('Error: " . $conn->error . "');</script>";
                            }
                        } else {
                            echo "<script>alert('Error: Teacher with this email does not exist!');</script>";
                        }
                    }
                    ?>

                    <!--Teacher Leave History Table-->

                    <!--  -->
                </div>
            </section>
            <section id="leave-history">
                <h5 class="custom-student-card">Leave History</h5>
                <div class="container mt-3 ">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Reason</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>

            </section>
            <!-- announcement section -->
            <section id="announcement">
                <h5 class=" custom-student-card">Announcement</h5>
                <div class="fill ">
                    <div class="container-f">
                        <h2 class="h2">Available Announcement</h2>
                        <label class="label " for="standardFilter">Filter by Standard:</label>
                        <select id="standardFilter" onchange="filterCards()" class="mb-4">
                            <option value="all">All Standards</option>
                            <option value="1">Standard 1</option>
                            <option value="2">Standard 2</option>
                            <option value="3">Standard 3</option>
                            <option value="4">Standard 4</option>
                            <option value="5">Standard 5</option>
                            <option value="6">Standard 6</option>
                            <option value="7">Standard 7</option>
                            <option value="8">Standard 8</option>
                        </select>

                        <div class="pdf-container">
                            <?php
                            $jsonFile = '../shared_announce/documents.json';
                            if (file_exists($jsonFile)) {
                                $data = json_decode(file_get_contents($jsonFile), true);
                                foreach ($data as $doc) {
                                    echo "<div class='pdf-card' data-standard='{$doc['standard']}'>
								<div class='pdf-title'>{$doc['title']}</div>
								<div class='pdf-standard'>Standard: {$doc['standard']}</div>
								<div class='pdf-message'>Message: {$doc['message']}</div>
                        <a class='pdf-link' href='{$doc['file']}' target='_blank'>View</a>
                    </div>";
                                }
                            } else {
                                echo "<p>No Announcement available</p>";
                            }
                            ?>
                        </div>
                    </div>

                    <script>
                        function filterCards() {
                            let standard = document.getElementById('standardFilter').value;
                            let cards = document.querySelectorAll('.pdf-card');

                            cards.forEach(card => {
                                let cardStandard = card.getAttribute('data-standard');
                                if (standard === "all" || cardStandard === standard) {
                                    card.style.display = "block";
                                } else {
                                    card.style.display = "none";
                                }
                            });
                        }
                    </script>
                </div>
            </section>
        </div>
        <script src="js/app.js"></script>
        <script>
            // Auto open the PDF when the page loads
            window.onload = function() {
                // Replace 'your-pdf-file.pdf' with the path to your PDF file
                window.open('your-pdf-file.pdf', '_blank');
            }
        </script>

        <script>
            function toggleSidebar() {
                const sidebar = document.getElementById("sidebar");
                if (sidebar.style.display === "none") {
                    sidebar.style.display = "block";
                } else {
                    sidebar.style.display = "none";
                }
            }
        </script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                // Pie chart
                new Chart(document.getElementById("chartjs-dashboard-pie"), {
                    type: "pie",
                    data: {
                        labels: ["Chrome", "Firefox", "IE"],
                        datasets: [{
                            data: [4306, 3801, 1689],
                            backgroundColor: [
                                window.theme.primary,
                                window.theme.warning,
                                window.theme.danger
                            ],
                            borderWidth: 5
                        }]
                    },
                    options: {
                        responsive: !window.MSInputMethodContext,
                        maintainAspectRatio: false,
                        legend: {
                            display: false
                        },
                        cutoutPercentage: 75
                    }
                });
            });
        </script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                // Bar chart
                new Chart(document.getElementById("chartjs-dashboard-bar"), {
                    type: "bar",
                    data: {
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct",
                            "Nov",
                            "Dec"
                        ],
                        datasets: [{
                            label: "This year",
                            backgroundColor: window.theme.primary,
                            borderColor: window.theme.primary,
                            hoverBackgroundColor: window.theme.primary,
                            hoverBorderColor: window.theme.primary,
                            data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
                            barPercentage: .75,
                            categoryPercentage: .5
                        }]
                    },
                    options: {
                        maintainAspectRatio: false,
                        legend: {
                            display: false
                        },
                        scales: {
                            yAxes: [{
                                gridLines: {
                                    display: false
                                },
                                stacked: false,
                                ticks: {
                                    stepSize: 20
                                }
                            }],
                            xAxes: [{
                                stacked: false,
                                gridLines: {
                                    color: "transparent"
                                }
                            }]
                        }
                    }
                });
            });
        </script>

</body>

</html>