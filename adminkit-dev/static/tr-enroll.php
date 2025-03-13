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
		body {
			background-color: var(--secondary-color);
			color: var(--text-color);
			font-family: "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
			line-height: 1.5;
			margin: 0;
		}

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
	</style>
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="admin.php">
					<span class="align-middle">schoolAdmin</span>
				</a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="admin.php">
							<i class="align-middle" data-feather="sliders"></i> <span
								class="align-middle">Dashboard</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="admin-profile.php">
							<i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
						</a>
					</li>

					<li class="sidebar-header">
						Forms
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="tr-enroll.php">
							<i class="align-middle" data-feather="square"></i> <span class="align-middle">Teacher
								Enrollment</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="std-enroll.php">
							<i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Student
								Enrollment</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="add-marks.php">
							<i class="align-middle" data-feather="grid"></i> <span class="align-middle">Add Marks</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="announce.php">
							<i class="align-middle" data-feather="align-left"></i> <span
								class="align-middle">Anouncement</span>
						</a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="activities.php">
							<i class="align-middle" data-feather="align-left"></i> <span
								class="align-middle">Activities</span>
						</a>
					</li>

					<li class="sidebar-header">
						Monitoring
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="student.php">
							<i class="align-middle" data-feather="bar-chart-2"></i> <span
								class="align-middle">Students</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="teacher.php">
							<i class="align-middle" data-feather="map"></i> <span class="align-middle">Teachers</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="admin-log-out.php">
							<i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Sign
								Out</span>
						</a>
					</li>
				</ul>
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="bell"></i>
									<span class="indicator">4</span>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"
								aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									4 New Notifications
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-danger" data-feather="alert-circle"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Update completed</div>
												<div class="text-muted small mt-1">Restart server 12 to complete the
													update.</div>
												<div class="text-muted small mt-1">30m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-warning" data-feather="bell"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Lorem ipsum</div>
												<div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate
													hendrerit et.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-primary" data-feather="home"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Login from 192.186.1.8</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-success" data-feather="user-plus"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">New connection</div>
												<div class="text-muted small mt-1">Christina accepted your request.
												</div>
												<div class="text-muted small mt-1">14h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all notifications</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown"
								data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="message-square"></i>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"
								aria-labelledby="messagesDropdown">
								<div class="dropdown-menu-header">
									<div class="position-relative">
										4 New Messages
									</div>
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-5.jpg"
													class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Vanessa Tucker</div>
												<div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu
													tortor.</div>
												<div class="text-muted small mt-1">15m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-2.jpg"
													class="avatar img-fluid rounded-circle" alt="William Harris">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">William Harris</div>
												<div class="text-muted small mt-1">Curabitur ligula sapien euismod
													vitae.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-4.jpg"
													class="avatar img-fluid rounded-circle" alt="Christina Mason">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Christina Mason</div>
												<div class="text-muted small mt-1">Pellentesque auctor neque nec urna.
												</div>
												<div class="text-muted small mt-1">4h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-3.jpg"
													class="avatar img-fluid rounded-circle" alt="Sharon Lessman">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Sharon Lessman</div>
												<div class="text-muted small mt-1">Aenean tellus metus, bibendum sed,
													posuere ac, mattis non.</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all messages</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#"
								data-bs-toggle="dropdown">
								<i class="align-middle" data-feather="settings"></i>
							</a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#"
								data-bs-toggle="dropdown">
								<img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1"
									alt="Charles Hall" /> <span class="text-dark">Charles Hall</span>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1"
										data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1"
										data-feather="pie-chart"></i> Analytics</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="index.html"><i class="align-middle me-1"
										data-feather="settings"></i> Settings & Privacy</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1"
										data-feather="help-circle"></i> Help Center</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">

					<h1>Teacher Enrollment Form</h1>
					<p class="form-description">Please complete all required fields to register as a teacher in our
						school monitoring system.</p>

					<form id="teacherEnrollmentForm">
						<div class="form-section">
							<h2>Personal Information</h2>
							<div class="form-row">
								<div class="form-group">
									<label for="name" class="required">Full Name</label>
									<input type="text" id="name" name="name" required>
								</div>
								<div class="form-group">
									<label for="gender" class="required">Gender</label>
									<select id="gender" name="gender" required>
										<option value="">Select</option>
										<option value="male">Male</option>
										<option value="female">Female</option>
										<option value="nonBinary">Non-binary</option>
										<option value="preferNotToSay">Prefer not to say</option>
									</select>
								</div>
							</div>

							<div class="form-row">
								<div class="form-group">
									<label for="dob" class="required">Date of Birth</label>
									<input type="date" id="dob" name="dob" required>
								</div>
								<div class="form-group">
									<label for="bloodGroup" class="required">Blood Group</label>
									<select id="bloodGroup" name="bloodGroup" required>
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
									<label for="phone" class="required">Phone Number</label>
									<input type="tel" id="phone" name="phone" required>
								</div>
								<div class="form-group">
									<label for="emergencyNumber" class="required">Emergency Contact Number</label>
									<input type="tel" id="emergencyNumber" name="emergencyNumber" required>
								</div>
							</div>
							<div class="form-row">

								<div class="form-group">
									<label for="email" class="required">Email Address</label>
									<input type="email" id="email" name="email" required>
								</div>

								<div class="form-group">
									<label for="address" class="required">Residential Address</label>
									<textarea id="address" name="address" rows="1" required></textarea>
								</div>
							</div>
						</div>

						<div class="form-section">
							<h2>Professional Information</h2>
							<div class="form-row">
								<div class="form-group">
									<label for="schoolName" class="required">School Name</label>
									<input type="text" id="schoolName" name="schoolName" required>
								</div>
								<div class="form-group">
									<label for="salary" class="required">Salary (Monthly)</label>
									<input type="number" id="salary" name="salary" min="0" required>
								</div>
							</div>

							<div class="form-group">
								<label for="qualification" class="required">Qualification</label>
								<input type="text" id="qualification" name="qualification" required
									placeholder="e.g., M.Ed., B.Sc., Ph.D.">
							</div>

							<div class="form-group">
								<label for="firstLanguage" class="required">First Language (Native)</label>
								<select id="firstLanguage" name="firstLanguage" required>
									<option value="">Select</option>
									<option value="english">English</option>
									<option value="hindi">Hindi</option>
									<option value="spanish">Spanish</option>
									<option value="french">French</option>
									<option value="mandarin">Gujarati</option>
									<option value="arabic">Arabic</option>
									<option value="bengali">Bengali</option>
									<option value="tamil">Tamil</option>
									<option value="telugu">Telugu</option>
									<option value="marathi">Marathi</option>
									<option value="other">Other</option>
								</select>
							</div>

							<div class="form-group">
								<label for="languageKnown" class="required">Languages Known</label>
								<div class="language-container" id="languageContainer"></div>
								<div id="languageInput">
									<input type="text" id="languageKnown" placeholder="Enter a language">
									<button type="button" id="addLanguageBtn">Add</button>
								</div>
								<input type="hidden" id="languagesList" name="languagesList" required>
							</div>
						</div>

						<div class="form-group">
							<div class="checkbox-item">
								<input type="checkbox" id="termsAgreement" name="termsAgreement" required>
								<label for="termsAgreement" class="required">I confirm that all information provided is
									accurate and complete</label>
							</div>
						</div>

						<div class="btn-container">
							<button type="button" class="btn btn-secondary" id="resetBtn">Reset Form</button>
							<button type="submit" class="btn btn-primary" id="submitBtn">Submit Enrollment</button>
						</div>
					</form>

					<div class="form-footer">
						<p>For assistance, please contact the IT department at support@schoolmonitor.edu</p>
					</div>

					</>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">

						</div>
						<div class="col-6 text-end">
							<p class="mb-0">
								<a class="text-muted" href="https://adminkit.io/"
									target="_blank"><strong>schoolAdmin</strong></a>
							</p>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="js/app.js"></script>
	<?php
	include_once 'connection.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$teacher_name = $_POST['teacher_name'];
		$teacher_phone = $_POST['teacher_phone'];
		$teacher_email = $_POST['teacher_email'];
		$teacher_salary = $_POST['teacher_salary'];
		$teacher_dob = $_POST['teacher_dob'];
		$teacher_address = $_POST['teacher_address'];
		$qualification = $_POST['qualification'];
		$subject = $_POST['subject'];
		$std = $_POST['std'];
		$gender = $_POST['gender'];
		$school_name = $_POST['school_name'];
		$school_no = $_POST['school_no'];

		$insert_query = "INSERT INTO teacher_1 (teacher_name, teacher_phone, teacher_email, teacher_salary, teacher_dob, teacher_address, qualification, subject, std, gender, school_name, school_no) 
                        VALUES (NULL,'$teacher_name', '$teacher_phone', '$teacher_email', '$teacher_salary', '$teacher_dob', '$teacher_address', '$qualification', '$subject', '$std', '$gender', '$school_name', '$school_no')";
		$insert_result = mysqli_query($conn, $insert_query);

		if ($insert_result) {
			header("Location: teacher.php");
			exit();
		} else {
			echo "Error: " . mysqli_error($conn);
		}
	}
	?>
</body>

</html>