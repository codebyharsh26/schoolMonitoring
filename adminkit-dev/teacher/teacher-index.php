<!DOCTYPE html>
<html lang="en">

<head>

	<?php
	include_once "teacher-sidebar.php";
	include_once "connection.php";
	include_once "teacher-navbar.php";
	?>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords"
		content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>School Monitoring System</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<!-- <link rel="stylesheet" href="/schoolMonitoring/adminkit-dev/static/css/card-direction.css"> -->
	<style>
		.fill {
			background: white;
			margin: 25px;
		}

		.cus {
			/* margin: 25px; 	 */
			display: flex;
			flex-direction: row;
			justify-content: center;
			align-items: center;
		}

		.cus1 {
			display: flex;
			flex-direction: row;
			justify-content: center;
			width: 100%;
		}

		.col-12 {
			width: 100%;
			padding: auto 20vw;
		}

		img .img {
			height: 50%;
		}

		body {
			font-family: Arial, sans-serif;
			margin: 0;
			background-color: #f4f8ff;
			;
		}

		.container {
			max-width: 1000px;
			margin: 0 auto;
			background-color: white;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
		}

		/* upload pdf css */
		.container-f {
			width: 100%;
			margin: auto;
			padding: 20px;
			background: white;
			border-radius: 10px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
		}

		input,
		textarea {
			width: 100%;
			padding: 10px;
			margin: 10px 0;
		}

		.label {
			font-weight: bold;
			display: block;
			margin-bottom: 5px;
		}

		select {
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border-radius: 5px;
			border: 1px solid #ccc;
		}

		.pdf-container {
			display: flex;
			flex-wrap: wrap;
			/* justify-content: center; */
			gap: 20px;
		}

		.pdf-card {
			width: 474px;
			background: #222e3c;
			opacity: 0.85;
			color: white;
			padding: 15px;
			border-radius: 10px;
			/* text-align: center; */
			box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
		}

		.pdf-title {
			font-size: 18px;
			font-weight: bold;
		}

		.pdf-standard {
			font-size: 14px;
			margin-top: 5px;
		}

		.pdf-link {
			display: inline-block;
			margin-top: 10px;
			background: white;
			color: #222e3c;
			padding: 8px 15px;
			border-radius: 5px;
			text-decoration: none;
			font-weight: bold;
		}

		.pdf-link:hover {
			background: #222e3c;
			opacity: 0.85;
			outline: 2px solid white;
			text-decoration: none;
			color: white;
		}

		.pdf {
			width: 100%;
			padding: 10px;
			margin-bottom: 10px;
			border: 1px solid #ccc;
			border-radius: 4px;
			font-size: 16px;
			background: #f1f1f1;
		}

		.upload {
			background: white;
			margin-top: 10px;
			margin-left: 2px;
			margin-bottom: 3 px;
			color: #222e3c;
			outline: 2px solid #222e3c;
			border: none;
			padding: 10px 20px;
			cursor: pointer;
			font-weight: bold;
			text-decoration: none;
		}

		.upload:hover {
			background: #222e3c;
			text-decoration: none;
			color: white;
		}

		.h2 {
			color: #222e3c;
		}

		/* over upload pdf */

		h1 {
			color: #333;
		}

		.options {
			margin-bottom: 20px;
		}

		button {
			padding: 8px 16px;
			background-color: #4CAF50;
			color: white;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			margin-right: 10px;
		}

		button:hover {
			background-color: #45a049;
		}

		#file-input {
			display: none;
		}

		label {
			padding: 8px 16px;
			/* background-color: #2196F3; */
			color: white;
			border-radius: 4px;
			/* cursor: pointer; */
		}

		/* label:hover {
			background-color: #0b7dda;
		} */

		img {
			margin: 25px;
		}

		.card {
			width: 80vw;
			margin: auto 15rem;
			/* margin-left: 18vw; */
		}

		h5 .font {
			font-size: xx-large;
		}

		.car {}

		td {
			font-size: x-large;
		}

		.card-announce {
			margin: 1020px;
			width: 20vw;
			height: 40vh;
			border-radius: 10px;
			box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
			margin-left: 115px;
			padding: 25px;
		}

		.card-announce h5,
		h3 {
			margin: 15px;
		}

		.custom-student-card {
			font-size: 40px;
			margin-top: 40px;
			font-weight: 600;
			letter-spacing: 3px;
			opacity: 0.5;
			margin-left: 6vw;

		}

		.custom-student-card1 {
			font-size: 40px;
			font-weight: 600;
			letter-spacing: 3px;
			opacity: 0.5;
			margin-bottom: 5vh;
		}

		.card-custom-text {
			margin: 15px;
			letter-spacing: 2px;
		}
	</style>
</head>

<body>

	<div class="main">
		<?php include_once("teacher-navbar.php"); ?>
		<!-- profile section -->
		<section style="margin-top: -75px; " id="profile">
			<main class="content">
				<div class="container-fluid p-0">
					<?php
					$query = "select * from teacher_1 where id=1";
					$result = mysqli_query($conn, $query);
					if ($result) {
						while ($row = mysqli_fetch_assoc($result)) {
							$full_name = $row["full_name"];
							$date_of_birth = $row["date_of_birth"];
							$residential_address = $row["residential_address"];
							$gender = $row["gender"];
							$standard = $row["standard"];
							$email_address = $row["email_address"];
							$emergency_contact_number = $row["emergency_contact_number"];
							$subject_name = $row["subject_name"];
							$salary_monthly = $row["salary_monthly"];
							$qualification = $row["qualification"];
							$blood_group = $row["blood_group"];
							$school_name = $row["school_name"];
							$first_language = $row["first_language"];
							$school_number = $row["school_number"];
							$language_known = $row["language_known"];
							$phone_number = $row["phone_number"];
							?>
							<div class="row">
								<h5 class="custom-student-card1">Profile Details</h5>
								<div class="col-12 ">
									<div class="card mb-3">
										<div class="card-header">
										</div>
										<div class="card-body text-center">
											<div class="car">
												<img src="img/avatars/avatar-4.jpg" alt="Christina Mason"
													class="img-fluid rounded-circle mb-2" width="128" height="128" />

												<h5 class="font" style="font-size: xx-large;"><?php echo $full_name; ?>
												</h5>
												<table style="width: 100%; margin-top: 5vh; margin-left: 4vh;">
													<tr>
														<td class="bol" style="text-align: left;"><b>Date-of-birth:</b>
														</td>
														<td style="text-align: left;"><?php echo $date_of_birth; ?></td>
													</tr>
													<tr>
														<td class="bol" style="text-align: left;"><b>Address:</b></td>
														<td style="text-align: left;">
															<?php echo $residential_address; ?>
														</td>
													</tr>
													<tr>
														<td class="bol" style="text-align: left;"><b>Gender:</b></td>
														<td style="text-align: left;"><?php echo $gender; ?></td>
													</tr>
													<tr>
														<td class="bol" style="text-align: left;"><b>Standard:</b></td>
														<td style="text-align: left;"><?php echo $standard; ?></td>
													</tr>
													<tr>
														<td class="bol" style="text-align: left;"><b>Email:</b></td>
														<td style="text-align: left;"><?php echo $email_address; ?></td>
													</tr>
													<tr>
														<td class="bol" style="text-align: left;"><b>Phone Number:</b>
														</td>
														<td style="text-align: left;"><?php echo $phone_number; ?></td>
													</tr>
													<tr>
														<td class="bol" style="text-align: left;"><b>Emergency
																Contact:</b></td>
														<td style="text-align: left;">
															<?php echo $emergency_contact_number; ?>
														</td>
													</tr>
													<tr>
														<td class="bol" style="text-align: left;"><b>Subject-Name:</b>
														</td>
														<td style="text-align: left;"><?php echo $subject_name; ?></td>
													</tr>
													<tr>
														<td class="bol" style="text-align: left;"><b>Salary Month:</b>
														</td>
														<td style="text-align: left;"><?php echo $salary_monthly; ?>
														</td>
													</tr>
													<tr>
														<td class="bol" style="text-align: left;"><b>Qualification:</b>
														</td>
														<td style="text-align: left;"><?php echo $qualification; ?></td>
													</tr>
													<tr>
														<td class="bol" style="text-align: left;"><b>Blood-Group:</b>
														</td>
														<td style="text-align: left;"><?php echo $blood_group; ?></td>
													</tr>
													<tr>
														<td class="bol" style="text-align: left;"><b>School Name:</b>
														</td>
														<td style="text-align: left;"><?php echo $school_name; ?></td>
													</tr>
													<tr>
														<td class="bol" style="text-align: left;"><b>First Language:</b>
														</td>
														<td style="text-align: left;"><?php echo $first_language; ?>
														</td>
													</tr>
													<tr>
														<td class="bol" style="text-align: left;"><b>School Number:</b>
														</td>
														<td style="text-align: left;"><?php echo $school_number; ?></td>
													</tr>
													<tr>
														<td class="bol" style="text-align: left;"><b>Language-Known:</b>
														</td>
														<td style="text-align: left;"><?php echo $language_known; ?>
														</td>
													</tr>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php
						}
					} ?>
				</div>
			</main>
		</section>
		<!-- teacher progress section -->
		<section id="progress">
			<h5 class="custom-student-card">Progress</h5>
			<div class="fill">
				<!-- <div class="cus1 col-md-4 col-xl-3"> -->
				<div class="cus card1 flex-fill w-100">

					<div class="card flex-fill w-100" style="height: 60vh; margin: 20px; ">
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

					<div class="card flex-fill w-100" style="margin: 20px;  ">
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
				<!-- </div> -->
			</div>

		</section>
		<!-- timetable section -->
		<section id="timetable">
			<h5 class="custom-student-card">Time Table</h5>
			<div class="fill">
				<div class="container-f">
					<h2 class="h2">Upload Time Table</h2>
					<form action="teacher-index.php" method="POST" enctype="multipart/form-data">
						<input type="text" name="t_title" placeholder="Enter Title" required>
						<select name="t_standard" required>
							<option value="">Select Standard</option>
							<option value="All">All Standards</option>
							<option value="1">Standard 1</option>
							<option value="2">Standard 2</option>
							<option value="3">Standard 3</option>
							<option value="4">Standard 4</option>
							<option value="5">Standard 5</option>
							<option value="6">Standard 6</option>
							<option value="7">Standard 7</option>
							<option value="8">Standard 8</option>
						</select>
						<input type="file" class="pdf" name="t_file" accept="application/pdf" required>
						<button class="upload" type="submit" name="t_upload">Upload</button>
					</form>
				</div>
			</div>
			<?php
			if (isset($_POST['t_upload'])) {
				$t_title = $_POST['t_title'];
				$t_standard = $_POST['t_standard'];
				$t_file = $_FILES['t_file'];

				if ($t_file['type'] != 'application/pdf') {
					echo "<script>alert('Only PDF files are allowed!');</script>";
					exit;
				}

				$t_uploadDir = '../shared_timetable/uploads/';
				if (!is_dir($t_uploadDir))
					mkdir($t_uploadDir, 0777, true);
				$t_filePath = $t_uploadDir . basename($t_file['name']);

				if (move_uploaded_file($t_file['tmp_name'], $t_filePath)) {
					$t_jsonFile = '../shared_timetable/documents.json';
					$t_data = file_exists($t_jsonFile) ? json_decode(file_get_contents($t_jsonFile), true) : [];
					$t_data[] = ['title' => $t_title, 'standard' => $t_standard, 'file' => $t_filePath];
					file_put_contents($t_jsonFile, json_encode($t_data, JSON_PRETTY_PRINT));
					echo "<script>alert('File uploaded successfully!');</script>";
				} else {
					echo "<script>alert('Error uploading file.');</script>";
				}
			}
			?>
		</section>
	<!-- notes section -->
	<section id="notes">
		<h5 class="custom-student-card">Notes</h5>
		<div class="fill">
			<div class="container-f">
				<h2 class="h2">Upload Pdf</h2>
				<form action="teacher-index.php" method="POST" enctype="multipart/form-data">
					<input type="text" name="title" placeholder="Enter PDF Title" required>
					<select name="standard" required>
						<option value="">Select Standard</option>
						<option value="All">All Standards</option>
						<option value="1">Standard 1</option>
						<option value="2">Standard 2</option>
						<option value="3">Standard 3</option>
						<option value="4">Standard 4</option>
						<option value="5">Standard 5</option>
						<option value="6">Standard 6</option>
						<option value="7">Standard 7</option>
						<option value="8">Standard 8</option>
					</select>
					<input type="file" class="pdf" name="pdf_file" accept="application/pdf" required>
					<button class="upload" type="submit" name="upload">Upload</button>
				</form>
			</div>
		</div>
		<?php
		if (isset($_POST['upload'])) {
			$title = $_POST['title'];
			$standard = $_POST['standard'];
			$file = $_FILES['pdf_file'];

			if ($file['type'] != 'application/pdf') {
				echo "<script>alert('Only PDF files are allowed!');</script>";
				exit;
			}

			$uploadDir = '../shared/uploads/';
			if (!is_dir($uploadDir))
				mkdir($uploadDir, 0777, true);
			$filePath = $uploadDir . basename($file['name']);

			if (move_uploaded_file($file['tmp_name'], $filePath)) {
				$jsonFile = '../shared/documents.json';
				$data = file_exists($jsonFile) ? json_decode(file_get_contents($jsonFile), true) : [];
				$data[] = ['title' => $title, 'standard' => $standard, 'file' => $filePath];
				file_put_contents($jsonFile, json_encode($data, JSON_PRETTY_PRINT));
				echo "<script>alert('File uploaded successfully!');</script>";
			} else {
				echo "<script>alert('Error uploading file.');</script>";
			}
		}
		?>
	</section>
	<!-- marks section -->
	<section id="marks">
		<h5 class="custom-student-card">Marks Entry</h5>
		<div class="fill">
			<img src="" alt="" height="500vh" width="98%">
		</div>
	</section>
	<!-- leave section -->
	<section id="leave">
		<h5 class="custom-student-card">Leave Application</h5>
		<div class="fill">
			<img src="" alt="" height="500vh" width="98%">
		</div>
	</section>
	<!-- announcement section -->
	<section id="announcement">
		<h5 class=" custom-student-card">Announcement</h5>
		<div class="fill">
		<div class="container-f">
					<h2 class="h2">Available Announcement</h2>
					<label class="label" for="standardFilter">Filter by Standard:</label>
					<select id="standardFilter" onchange="filterCards()">
						<option value="all">All Standards</option>
						<option value="1">Standard 1</option>
						<option value="2">Standard 2</option>
						<option value="3">Standard 3</option>
						<option value="4">Standard 4</option>
						<option value="5">Standard 5</option>
						<option value="6">Standard 6</option>
						<option value="7">Standard 7</option>
						<option value="8">Standard 8</option>
					</select>

					<div class="pdf-container">
						<?php
						$jsonFile = '../shared_announce/documents.json';
						if (file_exists($jsonFile)) {
							$data = json_decode(file_get_contents($jsonFile), true);
							foreach ($data as $doc) {
								echo "<div class='pdf-card' data-standard='{$doc['standard']}'>
                        <div class='pdf-title'>{$doc['title']}</div>
                        <div class='pdf-standard'>Standard: {$doc['standard']}</div>
						<div class='pdf-message'>Message: {$doc['message']}</div>
                        <a class='pdf-link' href='{$doc['file']}' target='_blank'>View</a>
                    </div>";
							}
						} else {
							echo "<p>No Announcement available</p>";
						}
						?>
					</div>
				</div>

				<script>
					function filterCards() {
						let standard = document.getElementById('standardFilter').value;
						let cards = document.querySelectorAll('.pdf-card');

						cards.forEach(card => {
							let cardStandard = card.getAttribute('data-standard');
							if (standard === "all" || cardStandard === standard) {
								card.style.display = "block";
							} else {
								card.style.display = "none";
							}
						});
					}
				</script>
		</div>
	</section>
	<!-- calender section -->
	<section id="calender">
		<h5 class="custom-student-card">Calender</h5>
		<div class="fill">
			<img src="" alt="" height="500vh" width="98%">
		</div>
	</section>
	</div>

	<script src="js/app.js"></script>
	<script>
		// Auto open the PDF when the page loads
		window.onload = function () {
			// Replace 'your-pdf-file.pdf' with the path to your PDF file
			window.open('your-pdf-file.pdf', '_blank');
		}
	</script>

	<!-- <script>
		document.addEventListener("DOMContentLoaded", function () {
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
	</script> -->
	<!-- <script>
		function toggleSidebar() {
			const sidebar = document.getElementById("sidebar");
			if (sidebar.style.display === "none") {
				sidebar.style.display = "block";
			} else {
				sidebar.style.display = "none";
			}
		}
	</script> -->
	<script>
		document.addEventListener("DOMContentLoaded", function () {
			// Pie chart
			new Chart(document.getElementById("chartjs-dashboard-pie"), {
				type: "pie",
				data: {
					labels: ["Chrome", "Firefox", "IE"],
					datasets: [{
						data: [4306, 3801, 1689],
						backgroundColor: [
							window.theme.primary,
							window.theme.warning,
							window.theme.danger
						],
						borderWidth: 5
					}]
				},
				options: {
					responsive: !window.MSInputMethodContext,
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					cutoutPercentage: 75
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function () {
			// Bar chart
			new Chart(document.getElementById("chartjs-dashboard-bar"), {
				type: "bar",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "This year",
						backgroundColor: window.theme.primary,
						borderColor: window.theme.primary,
						hoverBackgroundColor: window.theme.primary,
						hoverBorderColor: window.theme.primary,
						data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
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
		document.addEventListener("DOMContentLoaded", function () {
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
		document.addEventListener("DOMContentLoaded", function () {
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