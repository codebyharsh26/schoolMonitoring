<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once "connection.php";
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Marks Entry</title>
    <style>
        :root {
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

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f5f5f7;
            color: var(--dark);
            line-height: 1.6;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 25px;
            margin-bottom: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h1 {
            color: var(--primary-dark);
            margin-bottom: 10px;
        }

        .header p {
            color: var(--gray);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }

        input, select {
            width: 100%;
            padding: 12px;
            border: 1px solid var(--gray-light);
            border-radius: 4px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        input:focus, select:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 2px rgba(67, 97, 238, 0.2);
        }

        .btn {
            display: inline-block;
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 500;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: var(--primary-dark);
        }

        .btn-secondary {
            background-color: var(--gray);
        }

        .btn-secondary:hover {
            background-color: var(--dark);
        }

        .form-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 30px;
        }

        .alert {
            padding: 15px;
            border-radius: 4px;
            margin-bottom: 20px;
        }

        .alert-success {
            background-color: rgba(76, 201, 240, 0.1);
            border: 1px solid var(--success);
            color: var(--success);
        }

        .alert-danger {
            background-color: rgba(247, 37, 133, 0.1);
            border: 1px solid var(--danger);
            color: var(--danger);
        }

        .marks-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .marks-table th, .marks-table td {
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

        .subject-fields {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 20px;
        }

        .subject-field {
            flex: 1;
            min-width: 200px;
        }

        .error {
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
    <div class="wrapper">
        <div class="sidebar">
            <?php
            include_once("sidebar.php");
            ?>
        </div>

        <div class="main">
            <?php
            include_once("navbar.php");
            ?>

            <!-- Form content starts here -->
            <div class="container">
                <div class="header">
                    <h1>Student Marks Entry</h1>
                    <p>Enter student information and subject marks</p>
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
                
                <div class="card">
                    <form id="marksForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <div class="form-group">
                            <label for="studentName">Student Name *</label>
                            <input type="text" id="studentName" name="student_name" placeholder="Enter student's full name" required>
                            <div class="error" id="nameError">Please enter a valid name</div>
                        </div>
                        
                        <div class="form-group">
                            <label for="studentId">Roll Number *</label>
                            <input type="text" id="studentId" name="roll_number" placeholder="Enter roll number" required>
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
                                    <input type="number" id="mathematics" name="mathematics" placeholder="Enter marks" min="0" max="100">
                                    <div class="error" id="mathError">Marks should be between 0 and 100</div>
                                </div>
                                
                                <div class="subject-field">
                                    <label for="gujarati">Gujarati</label>
                                    <input type="number" id="gujarati" name="gujarati" placeholder="Enter marks" min="0" max="100">
                                    <div class="error" id="gujaratiError">Marks should be between 0 and 100</div>
                                </div>
                                
                                <div class="subject-field">
                                    <label for="hindi">Hindi</label>
                                    <input type="number" id="hindi" name="hindi" placeholder="Enter marks" min="0" max="100">
                                    <div class="error" id="hindiError">Marks should be between 0 and 100</div>
                                </div>
                            </div>
                            
                            <div class="subject-fields">
                                <div class="subject-field">
                                    <label for="art_craft">Art & Craft</label>
                                    <input type="number" id="art_craft" name="art_craft" placeholder="Enter marks" min="0" max="100">
                                    <div class="error" id="artCraftError">Marks should be between 0 and 100</div>
                                </div>
                                
                                <div class="subject-field">
                                    <label for="physical_education">Physical Education & Health</label>
                                    <input type="number" id="physical_education" name="physical_education" placeholder="Enter marks" min="0" max="100">
                                    <div class="error" id="physicalError">Marks should be between 0 and 100</div>
                                </div>
                                <div class="subject-field"></div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="teacher_comments">Teacher Comments</label>
                            <input type="text" id="teacher_comments" name="teacher_comments" placeholder="Add any comments or feedback">
                        </div>
                        
                        <div class="form-actions">
                            <button type="button" class="btn btn-secondary" id="resetBtn">Reset Form</button>
                            <button type="submit" name="submitBtn" class="btn" id="submitBtn">Submit Marks</button>
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
                    if(empty($student_name) || empty($roll_number) || empty($class)) {
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
    <script src="js/app.js"></script>
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
</body>
</html>