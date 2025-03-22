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
    }

    .container {
        max-width: 1000px;
        margin: 0 auto;
        background-color: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    /* view pdf */
    .container-f {
        width: 100%;
        margin: 50px auto;
        padding: 20px;
        background: white;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        /* text-align: center; */
    }

    .h2 {
        color: #222e3c;
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

    /* over view pdf */

    .no-pdf-msg {
        margin-top: 20px;
        font-size: 16px;
        color: red;
        font-weight: bold;
    }

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
        color: black;
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
        /* margin-left: 45vh; */
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
        padding: 25px;
    }

    .card-announce h5,
    h3 {
        margin: 15px;
    }

    .card {
        margin-left: -1vw;
        width: 76vw;
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

    .sidebar {
        position: sticky;
        top: 0;
        height: 100vh;
    }

    /* Remove any bottom borders or underlines */
    .sidebar-item,
    .sidebar-link {
        border: none !important;
        box-shadow: none !important;
        text-decoration: none !important;
        border-bottom: none !important;
    }

    /* Remove underline from sidebar links */
    .sidebar-link a {
        text-decoration: none !important;
        border-bottom: none !important;
    }

    /* Ensure pseudo-elements don't add underline */
    .sidebar-item::after,
    .sidebar-link::after {
        content: none !important;
        display: none !important;
    }

    /* Remove any border from sidebar items */
    .sidebar-item {
        border-bottom: none !important;
    }

    .car {
        margin-left: 15vw;
    }
	.custom-student-card1 {
	margin: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    width: 100%;
    font-weight: bold; /* Optional: Makes the text stand out */
}

    </style>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <?php include_once "student-sidebar.php"; ?>
        </div>

        <div class="main">
            <div class="navbar">
                <?php include_once "student-navbar.php"; ?>
            </div>
            <section id="profile">
                <main class="content">
                    <div class="container-fluid p-0">
                        <div class="container-fluid p-0">
                            <?php
							$query = "select * from student_1 where id=10";
							$result = mysqli_query($conn, $query);
							if ($result) {
								while ($row = mysqli_fetch_assoc($result)) {
									$student_image = $row["student_image"];
									$full_name = $row["full_name"];
									$date_of_birth = $row["date_of_birth"];
									$residential_address = $row["residential_address"];
									$gender = $row["gender"];
									$standard = $row["standard"];
									$roll_number = $row["roll_number"];
									$mother_name = $row["mother_name"];
									$mother_phone_number = $row["mother_phone_number"];
									$father_name = $row["father_name"];
									$father_phone_number = $row["father_phone_number"];
									$blood_group = $row["blood_group"];
									$school_name = $row["school_name"];
									$academic_year = $row["academic_year"];
									$school_number = $row["school_number"];
							?>

                            <?php
									$mquery = "select * from student_marks where marks_id =10";
									$mresult = mysqli_query($conn, $mquery);
									if ($mresult) {
										while ($mrow = mysqli_fetch_assoc($mresult)) {
											$mathematics = $mrow["mathematics"];
											$gujarati = $mrow["gujarati"];
											$hindi = $mrow["hindi"];
											$art_craft = $mrow["art_craft"];
											$physical_education = $mrow["physical_education"];
									?>

                            <div class="row">
                                <div class="col-12">

                                    <div class="card mb-3">
                                        <h3 class="custom-student-card1">Profile Details</h3>
                                        <div class="card-body text-center">
                                            <img src="<?php echo $student_image; ?>"
                                                class="img-fluid rounded-circle mb-2" width="250" height="250" />
                                            <h5 class="font" style="font-size: xx-large;"><?php echo $full_name; ?>
                                            </h5>
                                            <div class="car">

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
                                                        <td class="bol" style="text-align: left;"><b>Roll-No.:</b></td>
                                                        <td style="text-align: left;"><?php echo $roll_number; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bol" style="text-align: left;"><b>Mother Name:</b>
                                                        </td>
                                                        <td style="text-align: left;"><?php echo $mother_name; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bol" style="text-align: left;">
                                                            <b>Mother-Phone-No.:</b>
                                                        </td>
                                                        <td style="text-align: left;">
                                                            <?php echo $mother_phone_number; ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bol" style="text-align: left;"><b>Father Name:</b>
                                                        </td>
                                                        <td style="text-align: left;"><?php echo $father_name; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bol" style="text-align: left;">
                                                            <b>Father-Phone-No.:</b>
                                                        </td>
                                                        <td style="text-align: left;">
                                                            <?php echo $father_phone_number; ?>
                                                        </td>
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
                                                        <td class="bol" style="text-align: left;"><b>Acedemic Year:</b>
                                                        </td>
                                                        <td style="text-align: left;"><?php echo $academic_year; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bol" style="text-align: left;"><b>School Number:</b>
                                                        </td>
                                                        <td style="text-align: left;"><?php echo $school_number; ?></td>
                                                    </tr>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <?php
										}
									}
								}
							} ?>
                        </div>

                    </div>


            </section>

            <section id="result">
                
                <div class="fill">
				<h5 class=" custom-student-card">Result & Progress</h5>
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
                                                <td>Percentage</td>
                                                <td class="text-end" id="percentageTd"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="card flex-fill w-100" style="margin: 20px;  ">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Subject Graph</h5>

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
                        <h2 class="h2">Available Time Table</h2>
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
						$jsonFile = '../shared_timetable/documents.json';
						if (file_exists($jsonFile)) {
							$data = json_decode(file_get_contents($jsonFile), true);
							foreach ($data as $doc) {
								echo "<div class='pdf-card' data-standard='{$doc['standard']}'>
                        <div class='pdf-title'>{$doc['title']}</div>
                        <div class='pdf-standard'>Standard: {$doc['standard']}</div>
                        <a class='pdf-link' href='{$doc['file']}' target='_blank'>View</a>
                    </div>";
							}
						} else {
							echo "<p>No Time Table available</p>";
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
            <!-- notes section -->
            <section id="notes">
                <h5 class="custom-student-card">Notes</h5>
                <div class="fill">
                    <div class="container-f">
                        <h2 class="h2">Available PDF</h2>
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
						$jsonFile = '../shared/documents.json';
						if (file_exists($jsonFile)) {
							$data = json_decode(file_get_contents($jsonFile), true);
							foreach ($data as $doc) {
								echo "<div class='pdf-card' data-standard='{$doc['standard']}'>
                        <div class='pdf-title'>{$doc['title']}</div>
                        <div class='pdf-standard'>Standard: {$doc['standard']}</div>
                        <a class='pdf-link' href='{$doc['file']}' target='_blank'>View</a>
                    </div>";
							}
						} else {
							echo "<p>No PDFs available</p>";
						}
						?>
                        </div>
                    </div>
                    </main>
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
            <!-- activites section -->
            <section id="activites">
                <h5 class="custom-student-card">Activites</h5>
                <div class="fill">
                    <div class="container-f">
                        <h2 class="h2">Available Activities</h2>
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
						$jsonFile = '../shared_activity/documents.json';
						if (file_exists($jsonFile)) {
							$data = json_decode(file_get_contents($jsonFile), true);
							foreach ($data as $doc) {
								echo "<div class='pdf-card' data-standard='{$doc['standard']}'>
                        <div class='pdf-title'>{$doc['title']}</div>
                        <div class='pdf-standard'>Standard: {$doc['standard']}</div>
                        <a class='pdf-link' href='{$doc['file']}' target='_blank'>View</a>
                    </div>";
							}
						} else {
							echo "<p>No Activities available</p>";
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

        </div>
    </div>

    <script src="js/app.js"></script>
    <script>
    // Auto open the PDF when the page loads
    window.onload = function() {
        // Replace 'your-pdf-file.pdf' with the path to your PDF file
        window.open('your-pdf-file.pdf', '_blank');
    }
    </script>


    <script>
    function toggleSidebar() {
        const sidebar = document.getElementById("sidebar");
        if (sidebar.style.display === "none") {
            sidebar.style.display = "block";
        } else {
            sidebar.style.display = "none";
        }
    }
    </script>

    <script>
    // Convert PHP variables to numbers
    var mathematics = parseFloat("<?php echo $mathematics; ?>") || 0;
    var gujarati = parseFloat("<?php echo $gujarati; ?>") || 0;
    var hindi = parseFloat("<?php echo $hindi; ?>") || 0;
    var art_craft = parseFloat("<?php echo $art_craft; ?>") || 0;
    var physical_education = parseFloat("<?php echo $physical_education; ?>") || 0;

    // Correct formula for percentage
    var total = mathematics + gujarati + hindi + art_craft + physical_education;
    var percentage = (total / 5); // Assuming average calculation
    var other = 100 - percentage;

    // Ensure percentage does not exceed 100
    percentage = Math.min(percentage, 100);
    other = Math.max(other, 0);
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("percentageTd").innerText = percentage + "%";
    })
    </script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Pie chart
        new Chart(document.getElementById("chartjs-dashboard-pie"), {
            type: "pie",
            data: {
                labels: ["Percentage", "."],
                datasets: [{
                    data: [percentage, other],
                    backgroundColor: [
                        window.theme.primary,
                        window.theme.warning,
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
    document.addEventListener("DOMContentLoaded", function() {
        // Bar chart
        new Chart(document.getElementById("chartjs-dashboard-bar"), {
            type: "bar",
            data: {
                labels: ["mathematics", "gujarati", "hindi", "art_craft", "physical_education"],
                datasets: [{
                    label: "Marks",
                    backgroundColor: window.theme.primary,
                    borderColor: window.theme.primary,
                    hoverBackgroundColor: window.theme.primary,
                    hoverBorderColor: window.theme.primary,
                    data: [mathematics, gujarati, hindi, art_craft, physical_education],
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