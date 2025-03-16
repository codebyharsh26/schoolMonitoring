<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current file name
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sidebar</title>
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="admin.php">
					<span class="align-middle">schoolAdmin</span>
				</a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">Pages</li>

					<li class="sidebar-item <?= ($current_page == 'admin.php') ? 'active' : '' ?>">
						<a class="sidebar-link" href="admin.php">
							<i class="align-middle" data-feather="sliders"></i>
							<span class="align-middle">Dashboard</span>
						</a>
					</li>

					<li class="sidebar-item <?= ($current_page == 'admin-profile.php') ? 'active' : '' ?>">
						<a class="sidebar-link" href="admin-profile.php">
							<i class="align-middle" data-feather="user"></i>
							<span class="align-middle">Profile</span>
						</a>
					</li>

					<li class="sidebar-header">Forms</li>

					<li class="sidebar-item <?= ($current_page == 'tr-enroll.php') ? 'active' : '' ?>">
						<a class="sidebar-link" href="tr-enroll.php">
							<i class="align-middle" data-feather="square"></i>
							<span class="align-middle">Teacher Enrollment</span>
						</a>
					</li>

					<li class="sidebar-item <?= ($current_page == 'std-enroll.php') ? 'active' : '' ?>">
						<a class="sidebar-link" href="std-enroll.php">
							<i class="align-middle" data-feather="check-square"></i>
							<span class="align-middle">Student Enrollment</span>
						</a>
					</li>

					<!-- <li class="sidebar-item <?= ($current_page == 'add-marks.php') ? 'active' : '' ?>">
						<a class="sidebar-link" href="add-marks.php">
							<i class="align-middle" data-feather="grid"></i>
							<span class="align-middle">Add Marks</span>
						</a>
					</li> -->

					<li class="sidebar-item <?= ($current_page == 'announce.php') ? 'active' : '' ?>">
						<a class="sidebar-link" href="announce.php">
							<i class="align-middle" data-feather="align-left"></i>
							<span class="align-middle">Announcement</span>
						</a>
					</li>

					<li class="sidebar-item <?= ($current_page == 'activities.php') ? 'active' : '' ?>">
						<a class="sidebar-link" href="activities.php">
							<i class="align-middle" data-feather="align-left"></i>
							<span class="align-middle">Activities</span>
						</a>
					</li>

					<li class="sidebar-header">Monitoring</li>

					<li class="sidebar-item <?= ($current_page == 'student.php') ? 'active' : '' ?>">
						<a class="sidebar-link" href="student.php">
							<i class="align-middle" data-feather="bar-chart-2"></i>
							<span class="align-middle">Students</span>
						</a>
					</li>

					<li class="sidebar-item <?= ($current_page == 'teacher.php') ? 'active' : '' ?>">
						<a class="sidebar-link" href="teacher.php">
							<i class="align-middle" data-feather="map"></i>
							<span class="align-middle">Teachers</span>
						</a>
					</li>

					<li class="sidebar-item <?= ($current_page == 'admin-log-out.php') ? 'active' : '' ?>">
						<a class="sidebar-link" href="admin-log-out.php">
							<i class="align-middle" data-feather="log-in"></i>
							<span class="align-middle">Sign Out</span>
						</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</body>

</html>