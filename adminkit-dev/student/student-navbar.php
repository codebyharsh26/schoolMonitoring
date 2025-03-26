<?php
include_once("connection.php"); // Ensure database connection is included

// Assuming teacher ID is stored in session after login
$student_id = $_SESSION['student_id'] ?? null;
$student_name = "Unknown Teacher"; // Default value

if ($student_id) {
    $query = "SELECT full_name FROM student_1 WHERE father_phone_number = '$student_id'";
    $result = mysqli_query($conn, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        $student_name = $row['full_name'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">

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

    <link rel="canonical" href="https://demo-basic.adminkit.io/ui-forms.html" />

    <title>School Monitoring System</title>

    <link href="css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="/adminkit-dev/static/css/admin-custom-style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
    /* Main Theme Colors and Variables */
    :root {
        --primary-color: #3a7dda;
        --secondary-color: #f5f7fb;
        --text-color: #1e2022;
        --border-color: #e7eaf0;
        --success-color: #42ba96;
        --danger-color: #df4759;
        --warning-color: #f3b02a;
        --sidebar-bg: #1b2537;
        --sidebar-text: #ffffff;
        --card-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
        --form-bg: #ffffff;
    }

    /* Base Layout */
    body {
        background-color: var(--secondary-color);
        color: var(--text-color);
        font-family: "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        line-height: 1.5;
        margin: 0;
    }

    .dont-click {
        pointer-events: none;
    }

    @media (max-width: 768px) {
        .form-group {
            flex: 0 0 calc(100% - 1.5rem);
        }
    }

    /* Labels */
    label {
        display: block;
        font-size: 0.875rem;
        font-weight: 500;
        margin-bottom: 0.5rem;
        color: var(--text-color);
    }

    label.required:after {
        content: " *";
        color: var(--danger-color);
    }

    /* Form Controls */
    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="number"],
    input[type="date"],
    textarea,
    select {
        width: 100%;
        padding: 0.5rem 0.75rem;
        font-size: 0.875rem;
        line-height: 1.5;
        color: var(--text-color);
        background-color: rgb(215, 217, 221);
        background-clip: padding-box;
        border: 1px solid var(--border-color);
        border-radius: 0.25rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    input:focus,
    textarea:focus,
    select:focus {
        border-color: var(--primary-color);
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(58, 125, 218, 0.25);
    }

    textarea {
        resize: vertical;
    }

    /* Checkboxes */
    .checkbox-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 1rem;
    }

    .checkbox-item input[type="checkbox"] {
        margin-right: 0.75rem;
        margin-top: 0.25rem;
    }

    /* Buttons */
    .btn {
        display: inline-block;
        font-weight: 500;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        user-select: none;
        border: 1px solid transparent;
        padding: 0.5rem 1rem;
        font-size: 0.875rem;
        line-height: 1.5;
        border-radius: 0.25rem;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
        cursor: pointer;
    }

    .btn-primary {
        color: #fff;
        background-color: var(--primary-color);
        border-color: var(--primary-color);
    }

    .btn-primary:hover {
        background-color: #2e68b8;
        border-color: #2b61ad;
    }

    .btn-secondary {
        color: var(--text-color);
        background-color: var(--secondary-color);
        border-color: var(--border-color);
    }

    .btn-secondary:hover {
        background-color: #e2e6ea;
        border-color: #dae0e5;
    }

    .btn-container {
        display: flex;
        justify-content: flex-end;
        gap: 1rem;
        margin-top: 1.5rem;
    }

    /* Footer */
    .form-footer {
        margin-top: 2rem;
        padding-top: 1rem;
        border-top: 1px solid var(--border-color);
        color: #6c757d;
        font-size: 0.875rem;
    }

    /* Student Form specific styles */
    .student-photo {
        text-align: center;
        margin-bottom: 1.5rem;
    }

    .photo-placeholder {
        width: 150px;
        height: 180px;
        background-color: #e9ecef;
        border: 1px dashed var(--border-color);
        border-radius: 0.25rem;
        margin: 0 auto 1rem;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #6c757d;
    }

    .photo-upload {
        margin-top: 0.5rem;
    }

    /* Main layout for the page */
    .wrapper {
        display: flex;
        width: 100%;
        align-items: stretch;
    }

    .main {
        flex-grow: 1;
        padding: 1rem;
    }

    /* For demo purposes */
    .navbar {
        background-color: var(--form-bg);
        box-shadow: var(--card-shadow);
        padding: 0.5rem 1rem;
        margin-bottom: 1.5rem;
        margin-left: 17vw;
    }

    .footer {
        padding: 1rem;
        background-color: var(--form-bg);
        border-top: 1px solid var(--border-color);
        margin-top: 1.5rem;
    }

    .sch-name {
        display: flex;
        align-items: center;
    }

    .sch-name img {
        width: 40px;
        height: 40px;
        margin-right: 1rem;
    }

    .sch-name h4 {
        margin: 0;
        font-size: 1.25rem;
        font-weight: 500;
    }

    .logo {
        margin: 0;
        width: 150px;
        height: auto;
    }

    .custom-navbar {
        display: flex;
        padding: 10px;
        gap: 30px;
        justify-content: center;
    }

    .custom-sch-font {
        font-size: 18px;
        font-weight: bold;
        opacity: 0.6;
    }
    </style>
</head>

<body>
    <?php include_once("connection.php") ?>
    <?php
    $query = "select * from principal_1 where id=1";
    $result = mysqli_query($conn, $query);
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $school_name = $row["school_name"];
    ?>
    <nav class="navbar navbar-expand navbar-light navbar-bg">
        <div class="custom-navbar">
            <div><img src="logo.png" alt="School Logo" class="logo"></div>
            <div class="custom-sch-font"><?php echo $school_name; ?></div>
        </div>
        <?php }
    } ?>

        <?php
            $query = "select * from student_1 where father_phone_number = $fpn";
            $result = mysqli_query($conn, $query);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $student_image = $row["student_image"];
                }
            }
        ?>
        <div class="navbar-collapse collapse">
            <ul class="navbar-nav navbar-align">
                <li class="nav-item dropdown dont-click">
                    <!-- <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#"
                            data-bs-toggle="dropdown">
                            <i class="align-middle" data-feather="settings"></i>
                        </a> -->

                    <a class="nav-link d-none d-sm-inline-block" href="#">
                        <img src="<?php echo $student_image; ?>" class="avatar img-fluid rounded me-1"
                            alt="Charles Hall" /> <span class="text-dark"><?php echo $student_name; ?></span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <script src="js/app.js"></script>
</body>

</html>