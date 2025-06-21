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
	<link rel="canonical" href="https://demo-basic.adminkit.io/charts-chartjs.html" />

	<title>School report</title>

	<!-- Custom Style -->
	<link rel="stylesheet" href="/adminkit-dev/static/css/admin-custom-style.css">
	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/schoolMonitoring/adminkit-dev/static/css/student-list-display.css">

	<!-- Internal Styles to Remove Padding and Margin -->
	<style>
		/* Reset margins and padding globally */
		*,
		*::before,
		*::after {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		/* Body, Wrapper, Sidebar, Main */
		body {
			margin: 0;
			padding: 0;
		}

		/* Button adjustments */
		.btn {
			margin: 0;
			padding: 0.25rem 0.5rem;
			/* Adjust this padding as needed */
		}

		/* Chart container adjustments */
		.chart-container {
			padding: 0;
		}

		/* Table adjustments */
		.table th,
		.table td {
			padding: 0.5rem;
			/* Adjust padding as needed */
		}

		/* Modal Dialog adjustments */
		.modal-content {
			margin: 0;
			padding: 0;
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

			<?php
			include_once("student-list-display.php");
			?>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">

						</div>
						<div class="col-6 text-end">
							<p class="mb-0">
								<strong>schoolAdmin</strong>
							</p>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="js/app.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>

	<script>
		$(document).ready(function() {
			let deleteUrl = "";

			$(".delete-btn").click(function() {
				let studentId = $(this).data("id");
				let page = $(this).data("page");

				deleteUrl = "student.php?deleteid=" + studentId + "&page=" + page;
			});

			$("#confirmDeleteBtn").click(function() {
				window.location.href = deleteUrl;
			});
		});
	</script>
</body>

</html>