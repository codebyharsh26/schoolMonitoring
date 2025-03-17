<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	include_once "connection.php";
	?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>School Monitoring System</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/schoolMonitoring/adminkit-dev/static/css/card-direction.css">
	<link rel="stylesheet" href="/adminkit-dev/static/css/admin-custom-style.css">
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

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>
					<div class="row">
						<div class="col-xl-12 d-flex">
							<div class="w-100">
								<div class="row d-flex flex-nowrap gap-3"> <!-- gap-3 adds spacing -->
									<div class="col my-card card">
										<div class="admin-custom-card-content card-body">
											<h5 class="card-title">Total Teachers</h5>
											<h1 class=" mt-1 mb-3" style="font-size: 3rem; margin-left: 0.8rem;">55</h1>
										</div>
									</div>

									<div class="col my-card card">
										<div class="admin-custom-card-content card-body">
											<h5 class="card-title">Total Students</h5>
											<h1 class="mt-1 mb-3" style="font-size: 3rem; margin-left: 0.8rem;">269</h1>

										</div>
									</div>

									<div class="col my-card card">
										<div class="admin-custom-card-content card-body">
											<h5 class="card-title">Total Admission</h5>
											<h1 class="mt-1 mb-3" style="font-size: 3rem; margin-left: 0.8rem;">19</h1>

										</div>
									</div>

									<div class="col my-card card">
										<div class="admin-custom-card-content card-body">
											<h5 class="card-title">Student Left</h5>
											<h1 class="mt-1 mb-3" style="font-size: 3rem; margin-left: 0.8rem;">10</h1>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-12 col-md-6 col-lg-4 col-xxl-3 d-flex order-3">
							<div class="card flex-fill w-100">
								<div class="card-header">

									<h5 class="card-title mb-0">Admission Graph</h5>
								</div>
								<div class="card-body d-flex w-100">
									<div class="align-self-center chart chart-lg">
										<canvas id="chartjs-dashboard-bar"></canvas>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-md-6 col-xxl-3 d-flex order-2 order-xxl-2">
							<div class="card flex-fill w-100">
								<div class="card-header">
									<h5 class="card-title mb-0">Overall Academic Result</h5>
								</div>
								<div class="card-body d-flex">
									<div class="align-self-center w-100">
										<div class="py-3">
											<div class="chart chart-xs">
												<canvas id="chartjs-dashboard-pie"></canvas>
											</div>
										</div>

										<table class="table mb-0">
											<tbody>
												<tr>
													<td>PASS</td>
													<td class="text-end">90%</td>
												</tr>
												<tr>
													<td>FAIL</td>
													<td class="text-end">10%</td>
												</tr>

											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-md-6 col-xxl-3 d-flex order-1 order-xxl-1">
							<div class="card flex-fill">
								<div class="card-header">

									<h5 class="card-title mb-0">Calendar</h5>
								</div>
								<div class="card-body d-flex">
									<div class="align-self-center w-100">
										<div class="chart">
											<div id="datetimepicker-dashboard"></div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="row">

					</div>

				</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">

						</div>
						<div class="col-6 text-end">
							<p class="mb-0">
								<a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>schoolAdmin</strong></a>
							</p>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="js/app.js"></script>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
			var gradient = ctx.createLinearGradient(0, 0, 0, 225);
			gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
			gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
			// Line chart
			new Chart(document.getElementById("chartjs-dashboard-line"), {
				type: "line",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "Sales ($)",
						fill: true,
						backgroundColor: gradient,
						borderColor: window.theme.primary,
						data: [
							2115,
							1562,
							1584,
							1892,
							1587,
							1923,
							2566,
							2448,
							2805,
							3438,
							2917,
							3327
						]
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
								color: "rgba(0,0,0,0.0)"
							}
						}],
						yAxes: [{
							ticks: {
								stepSize: 1000
							},
							display: true,
							borderDash: [3, 3],
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Pie chart with only two parts (red and blue)
			new Chart(document.getElementById("chartjs-dashboard-pie"), {
				type: "pie",
				data: {
					labels: ["fail", "pass"],
					datasets: [{
						data: [10, 90], // Red is 10% and Blue is 90%
						backgroundColor: [
							"red", // Color for Red section
							"blue" // Color for Blue section
						],
						borderWidth: 5
					}]
				},
				options: {
					responsive: !window.MSInputMethodContext,
					maintainAspectRatio: false,
					legend: {
						display: false // Hides the legend
					},
					cutoutPercentage: 75 // To make it a donut chart
				}
			});
		});
	</script>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Initialize Bar Chart to show admissions growth over the years
			new Chart(document.getElementById("chartjs-dashboard-bar"), {
				type: "bar", // The chart type is bar chart
				data: {
					labels: ["2020", "2021", "2022", "2023", "2024"], // Labels representing years
					datasets: [{
						label: "Admissions Growth", // Label for the dataset
						backgroundColor: window.theme.primary, // Bar color, adjust to theme color if necessary
						borderColor: window.theme.primary, // Border color of the bars
						hoverBackgroundColor: window.theme.primary, // Hover color for the bars
						hoverBorderColor: window.theme.primary, // Hover border color
						data: [100, 150, 200, 250, 300], // Admissions data showing the growth from 2020 to 2024
						barPercentage: 0.75, // Controls the width of the bars
						categoryPercentage: 0.5 // Controls the spacing between bars
					}]
				},
				options: {
					maintainAspectRatio: false, // Ensures the chart resizes properly
					legend: {
						display: false // Hides the legend
					},
					scales: {
						y: {
							beginAtZero: true, // Ensures the y-axis starts at 0
							grid: {
								display: false // Hides the grid lines on the y-axis
							},
							ticks: {
								stepSize: 50 // Defines the step size of y-axis ticks
							}
						},
						x: {
							grid: {
								color: "transparent" // Makes the grid lines on the x-axis invisible
							}
						}
					}
				}
			});
		});
	</script>



	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var markers = [{
					coords: [31.230391, 121.473701],
					name: "Shanghai"
				},
				{
					coords: [28.704060, 77.102493],
					name: "Delhi"
				},
				{
					coords: [6.524379, 3.379206],
					name: "Lagos"
				},
				{
					coords: [35.689487, 139.691711],
					name: "Tokyo"
				},
				{
					coords: [23.129110, 113.264381],
					name: "Guangzhou"
				},
				{
					coords: [40.7127837, -74.0059413],
					name: "New York"
				},
				{
					coords: [34.052235, -118.243683],
					name: "Los Angeles"
				},
				{
					coords: [41.878113, -87.629799],
					name: "Chicago"
				},
				{
					coords: [51.507351, -0.127758],
					name: "London"
				},
				{
					coords: [40.416775, -3.703790],
					name: "Madrid "
				}
			];
			var map = new jsVectorMap({
				map: "world",
				selector: "#world_map",
				zoomButtons: true,
				markers: markers,
				markerStyle: {
					initial: {
						r: 9,
						strokeWidth: 7,
						stokeOpacity: .4,
						fill: window.theme.primary
					},
					hover: {
						fill: window.theme.primary,
						stroke: window.theme.primary
					}
				},
				zoomOnScroll: false
			});
			window.addEventListener("resize", () => {
				map.updateSize();
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
			var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
			document.getElementById("datetimepicker-dashboard").flatpickr({
				inline: true,
				prevArrow: "<span title=\"Previous month\">&laquo;</span>",
				nextArrow: "<span title=\"Next month\">&raquo;</span>",
				defaultDate: defaultDate
			});
		});
	</script>

</body>

</html>