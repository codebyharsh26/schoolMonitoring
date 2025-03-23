<!DOCTYPE html>
<html lang="en">

<head>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="/adminkit-dev/static/css/admin-custom-style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Bhavnagar School Enrollment Form</title>
    <!-- <link rel="stylesheet" href="adminkit-dev/BMC/css/schEnroll-style.css"> -->
    <style>
        /* Global Styles */
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background: #f8f9fa;
        }

        .card {
            max-width: 800px;
            margin: auto;
        }

        textarea {
            height: 80px;
        }

        .custom-card {
            padding: 2rem;
            width: 100%;
            background-color: white;
            border-radius: 10px;
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
            <form id="enrollmentForm" action="schEnroll.php" method="POST">
                <div class="container-fluid p-0">
                    <main class="container p-4">
                        <h1 class="h3 mb-3"><strong class="h1">School Enrollment</strong> Form</h1>

                        <div class="custom-card">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">School Name:</label>
                                    <input type="text" class="form-control" name="school_name" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">School Number:</label>
                                    <input type="number" class="form-control" name="school_no" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label class="form-label">Principal Name:</label>
                                    <input type="text" class="form-control" name="principal_name" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Standard:</label>
                                    <input type="text" class="form-control" name="standard" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="mt-3">
                                    <label class="form-label">Email Address:</label>
                                    <input type="email" class="form-control" name="email_address" required>
                                </div>

                            </div>

                            <div class="row">
                                <div class="mt-3">
                                    <label class="form-label">School Address:</label>
                                    <textarea class="form-control" name="address" required></textarea>
                                </div>
                            </div>

                            <div class="mt-3 text-center">
                                <button type="submit" class="btn btn-primary w-100">Enroll School</button>
                            </div>
                        </div>
                    </main>

                </div>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            // Toggle password visibility
            // function togglePassword() {
            // 	let pass = document.getElementById("password");
            // 	pass.type = (pass.type === "password") ? "text" : "password";
            // }

            // function toggleConfirmPassword() {
            // 	let pass = document.getElementById("confirm_password");
            // 	pass.type = (pass.type === "password") ? "text" : "password";
            // }


            // Form Validation
            document.getElementById('enrollmentForm').addEventListener('submit', function(event) {
                let pincode = document.getElementById('pincode').value;
                let contact1 = document.getElementById('contact1').value;
                let contact2 = document.getElementById('contact2').value;
                let password = document.getElementById('password').value;
                let confirmPassword = document.getElementById('confirm_password').value;

                if (pincode.length !== 6 || isNaN(pincode)) {
                    alert("Enter a valid 6-digit Pincode.");
                    event.preventDefault();
                }

                if (!contact1.match(/^[6789]\d{9}$/)) {
                    alert("Enter a valid 10-digit Primary Contact Number.");
                    event.preventDefault();
                }

                if (contact2 !== "" && !contact2.match(/^[6789]\d{9}$/)) {
                    alert("Enter a valid 10-digit Secondary Contact Number.");
                    event.preventDefault();
                }

                if (password !== confirmPassword) {
                    alert("Passwords do not match!");
                    event.preventDefault();
                }
            });
        </script>

</body>

</html>