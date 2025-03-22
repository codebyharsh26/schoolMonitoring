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
            <div class="container mt-4">
                <div class="custom-card shadow p-5">
                    <h2 class="text-center mb-5 mt-3">Bhavnagar School Enrollment</h2>
                    <form id="enrollmentForm" action="submit.php" method="POST">

                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">School Name:</label>
                                <input type="text" class="form-control" name="school_name" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Affiliation Number:</label>
                                <input type="text" class="form-control" name="affiliation" pattern="\d{6,10}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mt-3">
                                <label class="form-label">Board of Education:</label>
                                <select class="form-select" name="board" required>
                                    <option value="">Select Board</option>
                                    <option value="CBSE">CBSE</option>
                                    <option value="ICSE">ICSE</option>
                                    <option value="State Board">State Board</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label class="form-label">Principal's Name:</label>
                                <input type="text" class="form-control" name="principal" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Principal's Number:</label>
                                <input type="tel" class="form-control" name="contact1" pattern="[6789][0-9]{9}"
                                    required>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label class="form-label">School's Primary Contact Number:</label>
                                <input type="tel" class="form-control" name="contact1" pattern="[6789][0-9]{9}"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">School's Secondary Contact Number:</label>
                                <input type="tel" class="form-control" name="contact2" pattern="[6789][0-9]{9}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mt-3">
                                <label class="form-label">Official Email:</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label class="form-label">State:</label>
                                <input type="text" class="form-control" value="Gujarat" readonly>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">City:</label>
                                <select class="form-select" name="city" required>
                                    <option value="">Select City</option>
                                    <option value="Bhavnagar">Bhavnagar</option>
                                    <option value="Mahuva">Mahuva</option>
                                    <option value="Palitana">Palitana</option>
                                    <option value="Talaja">Talaja</option>
                                    <option value="Gariadhar">Gariadhar</option>
                                    <option value="Sihor">Sihor</oMahon>
                                    <option value="Botad">Botad</option>
                                    <option value="Vallabhipur">Vallabhipur</option>
                                    <option value="Umrala">Umrala</option>
                                    <option value="Ghogha">Ghogha</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mt-3">
                                <label class="form-label">School Address:</label>
                                <textarea class="form-control" name="address" required></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mt-3">
                                <label class="form-label">Pincode:</label>
                                <input type="text" class="form-control" name="pincode" pattern="\d{6}" required>
                            </div>

                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label class="form-label">Password:</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Confirm Password:</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="confirm_password"
                                        name="confirm_password" required>
                                </div>
                            </div>
                        </div>

                        <div class="mt-3 text-center">
                            <button type="submit" class="btn btn-primary w-100">Enroll School</button>
                        </div>

                    </form>
                </div>
            </div>
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
            document.getElementById('enrollmentForm').addEventListener('submit', function (event) {
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