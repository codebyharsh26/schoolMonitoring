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

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-profile.html" />

	<title>Profile</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
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



					<main class="content">
						<div class="container-fluid p-0">
<?php
	$query = "select * from principal_1 where id=1";
	$result = mysqli_query($conn,$query);
	if ($result) {
		while ($row = mysqli_fetch_assoc($result)){
			$principal_full_name=$row["principal_full_name	"];
			$date_of_birth=$row["date_of_birth"];
			$residential_address=$row["residential_address"];
			$gender=$row["gender"];
			$standard=$row["standard"];
			$roll_number=$row["roll_number"];
			$mother_name=$row["mother_name"];
			$mother_phone_number=$row["mother_phone_number"];
			$father_name=$row["father_name"];
			$father_phone_number=$row["father_phone_number"];
			$blood_group=$row["blood_group"];
			$school_name=$row["school_name"];
			$academic_year=$row["academic_year"];
			$school_number=$row["school_number"];
?>

							<div class="row">
								<div class="col-12" >
									<div class="card mb-3">
										<div class="card-header">
											<h5 class="card-title mb-0">Profile Details</h5>
										</div>
										<div class="card-body text-center" >
											<div class="car">
											<img src="img/avatars/avatar-4.jpg" alt="Christina Mason" class="img-fluid rounded-circle mb-2" width="128" height="128" />

											<h5 class="font" style="font-size: xx-large;"><?php echo $full_name; ?></h5>
											<table style="width: 100%; margin-top: 5vh; margin-left: 4vh;">
												<tr>
													<td class="bol" style="text-align: left;"><b>Principal Name:</b> </td>
													<td style="text-align: left;"><?php echo $principal_full_name	; ?></td>
												</tr>
												<tr>
													<td class="bol" style="text-align: left;"><b>Address:</b></td>
													<td style="text-align: left;"><?php echo $residential_address; ?></td>
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
													<td class="bol" style="text-align: left;"><b>Roll-No.:</b></td>
													<td style="text-align: left;"><?php echo $roll_number; ?></td>
												</tr>
												<tr>
													<td class="bol" style="text-align: left;"><b>Mother Name:</b></td>
													<td style="text-align: left;"><?php echo $mother_name; ?></td>
												</tr>
												<tr>
													<td class="bol" style="text-align: left;"><b>Mother-Phone-No.:</b></td>
													<td style="text-align: left;"><?php echo $mother_phone_number; ?></td>
												</tr>
												<tr>
													<td class="bol" style="text-align: left;"><b>Father Name:</b></td>
													<td style="text-align: left;"><?php echo $father_name; ?></td>
												</tr>
												<tr>
													<td class="bol" style="text-align: left;"><b>Father-Phone-No.:</b></td>
													<td style="text-align: left;"><?php echo $father_phone_number; ?></td>
												</tr>
												<tr>
													<td class="bol" style="text-align: left;"><b>Blood-Group:</b></td>
													<td style="text-align: left;"><?php echo $blood_group; ?></td>
												</tr>
												<tr>
													<td class="bol" style="text-align: left;"><b>School Name:</b></td>
													<td style="text-align: left;"><?php echo $school_name; ?></td>
												</tr>
												<tr>
													<td class="bol" style="text-align: left;"><b>Acedemic Year:</b></td>
													<td style="text-align: left;"><?php echo $academic_year; ?></td>
												</tr>
												<tr>
													<td class="bol" style="text-align: left;"><b>School Number:</b></td>
													<td style="text-align: left;"><?php echo $school_number; ?></td>
												</tr>
											</table>

										</div>
										</div>
									</div>
								</div>


							</div>
	<?php 	
	}}?>
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

	</div>
	<script src="js/app.js"></script>

</body>

</html>