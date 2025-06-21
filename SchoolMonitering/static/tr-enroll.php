<?php session_start(); ?>
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
    <link rel="canonical" href="https://demo-basic.adminkit.io/ui-buttons.html" />
    <title>Teacher-Enrollment</title>
    <link rel="stylesheet" href="/adminkit-dev/static/css/admin-custom-style.css">
    <link href="css/app.css" rel="stylesheet">
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
    /* body {
			background-color: var(--secondary-color);
			color: var(--text-color);
			font-family: "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
			line-height: 1.5;
			margin: 0;
		} */

    .container-fluid {
        padding: 1.5rem 2rem;
    }

    /* Form Header Styling */
    h1 {
        font-size: 1.8rem;
        font-weight: 600;
        color: var(--text-color);
        margin-bottom: 0.5rem;
    }

    .form-description {
        color: #6c757d;
        margin-bottom: 2rem;
    }

    /* Form Sections */
    .form-section {
        background-color: var(--form-bg);
        border-radius: 5px;
        padding: 1.5rem;
        margin-bottom: 1.5rem;
        box-shadow: var(--card-shadow);
    }

    h2 {
        font-size: 1.25rem;
        font-weight: 600;
        margin-bottom: 1.5rem;
        color: var(--text-color);
    }

    /* Form Rows and Groups */
    .form-row {
        display: flex;
        flex-wrap: wrap;
    }

    .form-group {
        flex: 0 0 calc(50% - 1.5rem);
        margin: 0 0.75rem 1.25rem;
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
    input[type="password"],
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

    /* Languages Known Section */
    .language-container {
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
        margin-bottom: 0.75rem;
    }

    .language-tag {
        background-color: var(--secondary-color);
        border-radius: 0.25rem;
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
        display: flex;
        align-items: center;
    }

    .language-tag span {
        margin-right: 0.5rem;
    }

    .remove-language {
        cursor: pointer;
        color: var(--danger-color);
        border: none;
        background: none;
        font-size: 0.75rem;
    }

    #languageInput {
        display: flex;
        margin-bottom: 0.75rem;
    }

    #languageKnown {
        flex: 1;
        margin-right: 0.5rem;
    }

    #addLanguageBtn {
        padding: 0.5rem 0.75rem;
        background-color: var(--secondary-color);
        border: 1px solid var(--border-color);
        border-radius: 0.25rem;
        cursor: pointer;
        font-size: 0.875rem;
    }

    #addLanguageBtn:hover {
        background-color: #e9ecef;
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

    .pdf {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        background: #f1f1f1;
    }
    </style>
</head>

<body>
    <div class="wrapper p-0 m-0">
        <div class="sidebar"><?php include_once("sidebar.php"); ?></div>
        <div class="main">
            <?php include_once("navbar.php"); ?>
            <form action="tr-enroll.php" method="post">
                <main class="content p-4">
                    <div class="container-fluid p-0">
                        <h1 class="h3 mb-3"><strong class="h1">Teacher Enrollment</strong> Form</h1>
                        <div class="form-section">
                            <h3 class="mb-3">Personal Information</h3>
                            <div class="form-group">
                                <div class="teacher-photo">
                                    <input type="file" class="pdf" id="teacher_image" name="teacher_image"
                                        accept="image/*" class="photo-upload" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="full_name" class="required">Full Name</label>
                                    <input type="text" id="full_name" name="full_name" required>
                                </div>
                                <div class="form-group">
                                    <label for="gender" class="required">Gender</label>
                                    <select id="gender" name="gender" required>
                                        <option value="">Select</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="date_of_birth" class="required">Date of Birth</label>
                                    <input type="date" id="date_of_birth" name="date_of_birth" required>
                                </div>
                                <div class="form-group">
                                    <label for="blood_group" class="required">Blood Group</label>
                                    <select id="blood_group" name="blood_group" required>
                                        <option value="">Select</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="phone_number" class="required">Phone
                                        Number</label>
                                    <input type="tel" id="phone_number" name="phone_number" required>
                                </div>
                                <div class="form-group">
                                    <label for="emergency_contact_number" class="required">Emergency Contact
                                        Number</label>
                                    <input type="tel" id="emergency_contact_number" name="emergency_contact_number"
                                        required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="email_address" class="required">Email
                                        Address</label>
                                    <input type="email" id="email_address" name="email_address" required>
                                </div>
                                <div class="form-group">
                                    <label for="residential_address" class="required">Residential
                                        Address</label>
                                    <textarea id="residential_address" name="residential_address" rows="1"
                                        required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-section">
                            <h2>Professional Information</h2>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="edit-subject_name" class="required">Subject Name</label>
                                    <select id="edit-subject_name" name="subject_name">
                                        <option value="">Select</option>
                                        <option value="Mathematics">Mathematics</option>
                                        <option value="Science">Science</option>
                                        <option value="Social Science">Social Science</option>
                                        <option value="EVS">EVS</option>
                                        <option value="English">English</option>
                                        <option value="Gujarati">Gujarati</option>
                                        <option value="Hindi">Hindi</option>
                                        <option value="Sanskrit">Sanskrit</option>
                                        <option value="Computer">Computer</option>
                                        <option value="Art & Craft">Art & Craft</option>
                                        <option value="Work & Art">Wok & Art</option>
                                        <option value="Physical Education & Health">Physical Education &
                                            Health</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="edit-standard" class="required">Standard</label>
                                    <input type="text" class="form-control" name="standard" id="edit-standard">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="edit-salary_monthly" class="required">Teacher Salary(Monthly)</label>
                                    <input type="number" class="form-control" min="0" max="10000000" step="0.01"
                                        name="salary_monthly" id="edit-salary_monthly">
                                </div>
                                <div class="form-group">
                                    <label for="edit-qualification" class="required">Qualification</label>
                                    <input type="text" class="form-control" name="qualification"
                                        id="edit-qualification">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="edit-first_language" class="required">First Language</label>
                                    <input type="text" class="form-control" name="first_language"
                                        id="edit-first_language">
                                </div>
                                <div class="form-group">
                                    <label for="edit-language_known" class="required">Language Known</label>
                                    <input type="text" class="form-control" name="language_known"
                                        id="edit-language_known">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="edit-school_name" class="required">School Name</label>
                                    <input type="text" class="form-control" name="school_name" id="edit-school_name">
                                </div>
                                <div class="form-group">
                                    <label for="edit-school_number" class="required">School Number</label>
                                    <input type="text" class="form-control" name="school_number"
                                        id="edit-school_number">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="password" class="required">Password</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="required">Confirm Password</label>
                                    <input type="password" class="form-control" id="c_password" name="C_password"
                                        required>
                                </div>
                            </div>
                            <div id="message"></div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox-item">
                                <input type="checkbox" id="termsAgreement" name="termsAgreement" class="required" required>
                                <label for="termsAgreement" class="required">I confirm that all information
                                    provided is
                                    accurate and complete</label>
                            </div>
                        </div>

                        <div class="btn-container">
                            <button type="reset" class="btn btn-secondary" id="resetBtn">Reset Form</button>
                            <button type="submit" name="submitBtn" class="btn btn-primary" id="submitBtn"
                                onsubmit="return validatePassword()">Submit
                                Enrollment</button>
                        </div>
                    </div>
                </main>
            </form>
            <footer class="footer">
                <!-- <div class="container-fluid"> -->
                <div class="row text-muted">
                    <div class="col-6 text-start">
                    </div>
                    <div class="col-6 text-end">
                        <p class="mb-0"><strong>schoolAdmin</strong></p>
                    </div>
                </div>
                <!-- </div> -->
            </footer>
        </div>
    </div>

    <script src="js/app.js"></script>
    <script>
    function validatePassword() {
        let password = document.getElementById("password").value;
        let confirmPassword = document.getElementById("c_password").value;
        let message = document.getElementById("message");

        if (password !== confirmPassword) {
            message.textContent = "Passwords do not match!";
            return false;
        } else {
            message.textContent = "";
            return true;
        }
    }
    </script>
    <?php
    include_once 'connection.php';

    if (isset($_POST['submitBtn'])) {
        $teacher_image = $_POST['teacher_image'];
        $full_name = $_POST['full_name'];
        $gender = $_POST['gender'];
        $date_of_birth = $_POST['date_of_birth'];
        $blood_group = $_POST['blood_group'];
        $phone_number = $_POST['phone_number'];
        $emergency_contact_number = $_POST['emergency_contact_number'];
        $email_address = $_POST['email_address'];
        $residential_address = $_POST['residential_address'];
        $subject_name = $_POST['subject_name'];
        $standard = $_POST['standard'];
        $salary_monthly = $_POST['salary_monthly'];
        $qualification = $_POST['qualification'];
        $first_language = $_POST['first_language'];
        $language_known = $_POST['language_known'];
        $school_name = $_POST['school_name'];
        $school_number = $_POST['school_number'];
        $password = $_POST['password'];

        $insert_query = "INSERT INTO teacher_1 VALUES ('$teacher_image', NULL, '$full_name', '$gender', '$date_of_birth', '$blood_group', '$phone_number', '$emergency_contact_number', '$email_address', '$residential_address', '$subject_name', '$standard', '$salary_monthly', '$qualification', '$first_language', '$language_known', '$school_name', '$school_number', '$password')";
        $insert_result = mysqli_query($conn, $insert_query);
    }
    ?>
</body>

</html>