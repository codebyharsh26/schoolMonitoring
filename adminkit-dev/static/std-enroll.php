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

	<link rel="canonical" href="https://demo-basic.adminkit.io/ui-forms.html" />

	<title>Forms | AdminKit Demo</title>

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
			border-radius: 0.5rem;
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
			margin-right: -0.75rem;
			margin-left: -0.75rem;
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
		<div class="sidebar">
			<div class="sidebar"><?php include_once("sidebar.php"); ?></div>
		</div>

		<div class="main">
			<?php include_once("navbar.php"); ?>
			<form action="std-enroll.php" method="post">
				<main class="content p-4">
					<div class="container-fluid p-0">
						<h1 class="h3 mb-3"><strong class="h1">Student Enrollment</strong> Form</h1>
						<div class="form-section">
							<h3 class="mb-3">Personal Information</h3>
							<div style="margin: 0 0 1.25">
								<div class="student-photo">
									<input type="file" class="pdf" id="student_image" name="student_image"
										accept="image/*" class="photo-upload">
								</div>
							</div>

							<div class="form-row">
								<div class="form-group">
									<label for="full_name" class="required">Full Name</label>
									<input type="text" id="full_name" name="full_name" required>
								</div>
								<div class="form-group">
									<label for="roll_number" class="required">Roll Number</label>
									<input type="number" id="roll_number" name="roll_number" required>
								</div>
							</div>

							<div class="form-row">
								<div class="form-group">
									<label for="date_of_birth" class="required">Date of Birth</label>
									<input type="date" id="date_of_birth" name="date_of_birth" required>
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
								<div class="form-group">
									<label for="residential_address" class="required">Residential
										Address</label>
									<textarea id="residential_address" name="residential_address" rows="1"
										required></textarea>
								</div>
							</div>
						</div>

						<div class="form-section">
							<h2>Parent/Guardian Information</h2>
							<div class="form-row">
								<div class="form-group">
									<label for="father_name" class="required">Father's Name</label>
									<input type="text" id="father_name" name="father_name" required>
								</div>
								<div class="form-group">
									<label for="father_phone_number" class="required">Father's Phone
										Number</label>
									<input type="tel" id="father_phone_number" name="father_phone_number" required>
								</div>
							</div>

							<div class="form-row">
								<div class="form-group">
									<label for="mother_name" class="required">Mother's Name</label>
									<input type="text" id="mother_name" name="mother_name" required>
								</div>
								<div class="form-group">
									<label for="mother_phone_number" class="required">Mother's Phone
										Number</label>
									<input type="tel" id="mother_phone_number" name="mother_phone_number" required>
								</div>
							</div>
						</div>

						<div class="form-section">
							<h2>School Information</h2>
							<div class="form-row">
								<div class="form-group">
									<label for="standard" class="required">Standard</label>
									<select id="standard" name="standard" required>
										<option value="">Select</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
									</select>
								</div>

								<div class="form-group">
									<label for="academic_year" class="required">Academic Year</label>
									<select id="academic_year" name="academic_year" required>
										<option value="">Select</option>
										<option value="2024-2025">2024-2025</option>
										<option value="2025-2026">2025-2026</option>
									</select>
								</div>
							</div>

							<div class="form-row">
								<div class="form-group">
									<label for="school_name" class="required">School Name</label>
									<input type="text" id="school_name" name="school_name" required>
								</div>

								<div class="form-group">
									<label for="school_number" class="required">School Number</label>
									<input type="number" id="school_number" name="school_number" required>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group">
									<label for="password">Password</label>
									<input type="password" class="form-control" id="password" name="password"
										required>
								</div>
								<div class="form-group">
									<label for="password">Confirm Password</label>
									<input type="password" class="form-control" id="c_password" name="c_password"
										required>
								</div>
							</div>
							<div id="message"></div>
						</div>

						<div class="form-group">
							<div class="checkbox-item">
								<input type="checkbox" id="termsAgreement" name="termsAgreement" required>
								<label for="termsAgreement" class="required">I confirm that all information
									provided is
									accurate and complete</label>
							</div>
						</div>

						<div class="btn-container">
							<button type="reset" class="btn btn-secondary" id="resetBtn">Reset
								Form</button>
							<button type="submit" name="submit" class="btn btn-primary" id="submit"
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

			if (password !== c_password) {
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

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$student_image = $_POST['student_image'];
		$full_name = $_POST['full_name'];
		$roll_number = $_POST['roll_number'];
		$date_of_birth = $_POST['date_of_birth'];
		$gender = $_POST['gender'];
		$blood_group = $_POST['blood_group'];
		$residential_address = $_POST['residential_address'];
		$father_name = $_POST['father_name'];
		$father_phone_number = $_POST['father_phone_number'];
		$mother_name = $_POST['mother_name'];
		$mother_phone_number = $_POST['mother_phone_number'];
		$standard = $_POST['standard'];
		$academic_year = $_POST['academic_year'];
		$school_name = $_POST['school_name'];
		$school_number = $_POST['school_number'];
		$password = $_POST['password'];

		$insert_query = "INSERT INTO student_1 VALUES ('$student_image', NULL, '$full_name', '$roll_number', '$date_of_birth', '$gender', '$blood_group', '$residential_address', '$father_name', '$father_phone_number', '$mother_name', '$mother_phone_number', '$standard', '$academic_year', '$school_name', '$school_number', '$password')";
		$insert_result = mysqli_query($conn, $insert_query);
	}
	?>
</body>

</html>