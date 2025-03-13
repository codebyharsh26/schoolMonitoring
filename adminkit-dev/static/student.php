<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/charts-chartjs.html" />

	<title>Student report</title>
	<link rel="stylesheet" href="/adminkit-dev/static/css/admin-custom-style.css">

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/schoolMonitoring/adminkit-dev/static/css/student-list-display.css">
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

					<li class="sidebar-item ">
						<a class="sidebar-link" href="admin.php">
							<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
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
							<i class="align-middle" data-feather="square"></i> <span class="align-middle">Teacher Enrollment</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="std-enroll.php">
							<i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Student Enrollment</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="add-marks.php">
							<i class="align-middle" data-feather="grid"></i> <span class="align-middle">Add Marks</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="announce.php">
							<i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Anouncement</span>
						</a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="activities.php">
							<i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Activities</span>
						</a>
					</li>

					<li class="sidebar-header">
						Monitoring
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="student.php">
							<i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Students</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="teacher.php">
							<i class="align-middle" data-feather="map"></i> <span class="align-middle">Teachers</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="admin-log-out.php">
							<i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Sign Out</span>
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
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
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
												<div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
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
												<div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
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
												<div class="text-muted small mt-1">Christina accepted your request.</div>
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
							<a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="message-square"></i>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
								<div class="dropdown-menu-header">
									<div class="position-relative">
										4 New Messages
									</div>
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Vanessa Tucker</div>
												<div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
												<div class="text-muted small mt-1">15m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-2.jpg" class="avatar img-fluid rounded-circle" alt="William Harris">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">William Harris</div>
												<div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-4.jpg" class="avatar img-fluid rounded-circle" alt="Christina Mason">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Christina Mason</div>
												<div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
												<div class="text-muted small mt-1">4h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-3.jpg" class="avatar img-fluid rounded-circle" alt="Sharon Lessman">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Sharon Lessman</div>
												<div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
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
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
								<i class="align-middle" data-feather="settings"></i>
							</a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
								<img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark">Charles Hall</span>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="index.html"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

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
								<a class="text-muted" href="https://adminkit.io/"
									target="_blank"><strong>schoolAdmin</strong></a>
							</p>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<script src="js/app.js"></script>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
		<script>
			$(document).ready(function() {
				$('.edit-btn').click(function() {
					$('#edit-id').val($(this).data('id'));
					$('#edit-full_name').val($(this).data('full_name'));
					$('#edit-date_of_birth').val($(this).data('date_of_birth'));
					$('#edit-address').val($(this).data('address'));
					$('#edit-gender').val($(this).data('gender'));
					$('#edit-standard').val($(this).data('standard'));
					$('#edit-roll').val($(this).data('roll'));
					$('#edit-mother_name').val($(this).data('mother_name'));
					$('#edit-mother_phone_number').val($(this).data('mother_phone_number'));
					$('#edit-father_name').val($(this).data('father_name'));
					$('#edit-father_phone_number').val($(this).data('father_phone_number'));
					$('#edit-blood_group').val($(this).data('blood_group'));
					$('#edit-school_name').val($(this).data('school_name'));
					$('#edit-school_no').val($(this).data('school_no'));
					$('#edit-page').val(new URLSearchParams(window.location.search).get('page') || 1);
				});

				$('.view-btn').click(function() {
					$('#view-full_name').text($(this).data('full_name'));
					$('#view-date_of_birth').text($(this).data('date_of_birth'));
					$('#view-address').text($(this).data('address'));
					$('#view-gender').text($(this).data('gender'));
					$('#view-standard').text($(this).data('standard'));
					$('#view-roll').text($(this).data('roll'));
					$('#view-mother_name').text($(this).data('mother_name'));
					$('#view-mother_phone_number').text($(this).data('mother_phone_number'));
					$('#view-father_name').text($(this).data('father_name'));
					$('#view-father_phone_number').text($(this).data('father_phone_number'));
					$('#view-blood_group').text($(this).data('blood_group'));
					$('#view-school_name').text($(this).data('school_name'));
					$('#view-school_no').text($(this).data('school_no'));
				});
			});
		</script>

		<script>
			$(document).ready(function() {
				let deleteUrl = "";

				$(".delete-btn").click(function() {
					let studentId = $(this).data("id");
					let page = $(this).data("page");

					deleteUrl = "stu_delete.php?deleteid=" + studentId + "&page=" + page;
				});

				$("#confirmDeleteBtn").click(function() {
					window.location.href = deleteUrl;
				});
			});
		</script>
		<script>
			document.addEventListener("DOMContentLoaded", function() {
				// Line chart
				new Chart(document.getElementById("chartjs-line"), {
					type: "line",
					data: {
						labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
						datasets: [{
							label: "Sales ($)",
							fill: true,
							backgroundColor: "transparent",
							borderColor: window.theme.primary,
							data: [2115, 1562, 1584, 1892, 1487, 2223, 2966, 2448, 2905, 3838, 2917, 3327]
						}, {
							label: "Orders",
							fill: true,
							backgroundColor: "transparent",
							borderColor: "#adb5bd",
							borderDash: [4, 4],
							data: [958, 724, 629, 883, 915, 1214, 1476, 1212, 1554, 2128, 1466, 1827]
						}]
					},
					options: {
						maintainAspectRatio: false,
						legend: {
							display: false
						},
						tooltips: {
							intersect: false
						},
						hover: {
							intersect: true
						},
						plugins: {
							filler: {
								propagate: false
							}
						},
						scales: {
							xAxes: [{
								reverse: true,
								gridLines: {
									color: "rgba(0,0,0,0.05)"
								}
							}],
							yAxes: [{
								ticks: {
									stepSize: 500
								},
								display: true,
								borderDash: [5, 5],
								gridLines: {
									color: "rgba(0,0,0,0)",
									fontColor: "#fff"
								}
							}]
						}
					}
				});
			});
		</script>
		<script>
			document.addEventListener("DOMContentLoaded", function() {
				// Bar chart
				new Chart(document.getElementById("chartjs-bar"), {
					type: "bar",
					data: {
						labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
						datasets: [{
							label: "Last year",
							backgroundColor: window.theme.primary,
							borderColor: window.theme.primary,
							hoverBackgroundColor: window.theme.primary,
							hoverBorderColor: window.theme.primary,
							data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
							barPercentage: .75,
							categoryPercentage: .5
						}, {
							label: "This year",
							backgroundColor: "#dee2e6",
							borderColor: "#dee2e6",
							hoverBackgroundColor: "#dee2e6",
							hoverBorderColor: "#dee2e6",
							data: [69, 66, 24, 48, 52, 51, 44, 53, 62, 79, 51, 68],
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
		<script>
			document.addEventListener("DOMContentLoaded", function() {
				// Doughnut chart
				new Chart(document.getElementById("chartjs-doughnut"), {
					type: "doughnut",
					data: {
						labels: ["Social", "Search Engines", "Direct", "Other"],
						datasets: [{
							data: [260, 125, 54, 146],
							backgroundColor: [
								window.theme.primary,
								window.theme.success,
								window.theme.warning,
								"#dee2e6"
							],
							borderColor: "transparent"
						}]
					},
					options: {
						maintainAspectRatio: false,
						cutoutPercentage: 65,
						legend: {
							display: false
						}
					}
				});
			});
		</script>
		<script>
			document.addEventListener("DOMContentLoaded", function() {
				// Pie chart
				new Chart(document.getElementById("chartjs-pie"), {
					type: "pie",
					data: {
						labels: ["Social", "Search Engines", "Direct", "Other"],
						datasets: [{
							data: [260, 125, 54, 146],
							backgroundColor: [
								window.theme.primary,
								window.theme.warning,
								window.theme.danger,
								"#dee2e6"
							],
							borderColor: "transparent"
						}]
					},
					options: {
						maintainAspectRatio: false,
						legend: {
							display: false
						}
					}
				});
			});
		</script>
		<script>
			document.addEventListener("DOMContentLoaded", function() {
				// Radar chart
				new Chart(document.getElementById("chartjs-radar"), {
					type: "radar",
					data: {
						labels: ["Speed", "Reliability", "Comfort", "Safety", "Efficiency"],
						datasets: [{
							label: "Model X",
							backgroundColor: "rgba(0, 123, 255, 0.2)",
							borderColor: window.theme.primary,
							pointBackgroundColor: window.theme.primary,
							pointBorderColor: "#fff",
							pointHoverBackgroundColor: "#fff",
							pointHoverBorderColor: window.theme.primary,
							data: [70, 53, 82, 60, 33]
						}, {
							label: "Model S",
							backgroundColor: "rgba(220, 53, 69, 0.2)",
							borderColor: window.theme.danger,
							pointBackgroundColor: window.theme.danger,
							pointBorderColor: "#fff",
							pointHoverBackgroundColor: "#fff",
							pointHoverBorderColor: window.theme.danger,
							data: [35, 38, 65, 85, 84]
						}]
					},
					options: {
						maintainAspectRatio: false
					}
				});
			});
		</script>
		<script>
			document.addEventListener("DOMContentLoaded", function() {
				// Polar Area chart
				new Chart(document.getElementById("chartjs-polar-area"), {
					type: "polarArea",
					data: {
						labels: ["Speed", "Reliability", "Comfort", "Safety", "Efficiency"],
						datasets: [{
							label: "Model S",
							data: [35, 38, 65, 70, 24],
							backgroundColor: [
								window.theme.primary,
								window.theme.success,
								window.theme.danger,
								window.theme.warning,
								window.theme.info
							]
						}]
					},
					options: {
						maintainAspectRatio: false
					}
				});
			});
		</script>
</body>

</html>