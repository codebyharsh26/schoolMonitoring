<?php
session_start();
if (!isset($_SESSION["logged_in"])) {
    header("Location: slogin.php");
    exit;
}
include_once "connection.php";
$fpn = $_SESSION["student_id"];
// Fetch teacher leave history if not already stored in session

?>
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
    <title>Student Portal</title>
    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="/schoolMonitoring/adminouncdev/static/css/card-direction.css"> -->
    <style>
    .fill {
        background: white;
        margin: 25px;
        border-radius: 5px;
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

    .container-fluid {
        max-width: 1000px;
        margin: 0 auto;
        background-color: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        display: inline;
    }

    /* view pdf */
    .container-f {
        width: 100%;
        padding: 1.3rem 1.6rem;
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
        justify-content: space-around;
    }

    .pdf-card {
        width: 33rem;
        background: #222e3c;
        opacity: 0.85;
        color: white;
        padding: 15px;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 1rem;
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
        width: 100%;
        /* margin-left: 45vh; */
    }

    h5 .font {
        font-size: xx-large;
    }

    .td {
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
        /* margin: 15px; */
        letter-spacing: 2px;
    }

    .sidebar {
        /* width: 300px; Adjust as needed */
        position: fixed;
        height: 100%;
        background-color: #222e3c;
        color: white;
    }

    .content {
        margin-left: 270px;
        /* Should be at least the width of the sidebar */
        padding: 20px;
    }

    #standardFilter {
        margin-bottom: 1rem;
    }

    .bol {
        font-size: 20px;
    }

    .td {
        font-size: 18px;
    }

    .custom-profile {
        background-color: white;
        border-radius: 5px;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 1rem;
    }

    .car {
        display: flex;
    }

    .pass {
        color: green;
        font-weight: bold;
    }

    .fail {
        color: red;
        font-weight: bold;
    }
    </style>
</head>

<body>
    <div class="wraper p-0 m-0">
        <?php
            include_once("student-sidebar.php");
            ?>

        <div class="main">
            <?php
            include_once("student-navbar.php");
            ?>
            <main class="content p-4">
                <div class="container-fluid p-0">
                    <section id="profile">
                        <?php
                            $query = "select * from student_1 where father_phone_number = $fpn";
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
                                    $mquery = "select * from student_marks where student_name = '$full_name'";
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
                                <h1 class="h3 mb-3"><strong class="h1">Profile</strong> Details</h1>
                                <div class="custom-profile mb-3">
                                    <div class="card-body text-center">
                                        <img src="<?php echo $student_image; ?>" class="img-fluid rounded mb-2"
                                            width="200" height="200" />

                                        <h5 class="font" style="font-size: xx-large;"><?php echo $full_name; ?>
                                        </h5>
                                        <div class="car mt-4 gap-5 mb-4">
                                            <div>
                                                <table class=" m-2">
                                                    <tr>
                                                        <td class="bol" style="text-align: left;"><b>Date-of-birth:</b>
                                                        </td>
                                                        <td style="text-align: left;" class="td">
                                                            <?php echo $date_of_birth; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bol" style="text-align: left;"><b>Gender:</b></td>
                                                        <td style="text-align: left;" class="td"><?php echo $gender; ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bol" style="text-align: left;"><b>Standard:</b></td>
                                                        <td style="text-align: left;" class="td">
                                                            <?php echo $standard; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bol" style="text-align: left;"><b>Roll-No: </b></td>
                                                        <td style="text-align: left;" class="td">
                                                            <?php echo $roll_number; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bol" style="text-align: left;"><b>Mother Name: </b>
                                                        </td>
                                                        <td style="text-align: left;" class="td">
                                                            <?php echo $mother_name; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bol" style="text-align: left;">
                                                            <b>Mother Phone No :</b>
                                                        </td>
                                                        <td style="text-align: left;" class="td">
                                                            <?php echo $mother_phone_number; ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <!-- section-2 -->
                                            <div>
                                                <table class=" m-2">
                                                    <tr>
                                                        <td class="bol" style="text-align: left;"><b>Father Name: </b>
                                                        </td>
                                                        <td style="text-align: left;" class="td">
                                                            <?php echo $father_name; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bol" style="text-align: left;" class="td">
                                                            <b>Father Phone No :</b>
                                                        </td>
                                                        <td style="text-align: left;" class="td">
                                                            <?php echo $father_phone_number; ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bol" style="text-align: left;"><b>Blood-Group: </b>
                                                        </td>
                                                        <td style="text-align: left;" class="td">
                                                            <?php echo $blood_group; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bol" style="text-align: left;"><b>Address:</b></td>
                                                        <td style="text-align: left;" class="td">
                                                            <?php echo $residential_address; ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bol" style="text-align: left;"><b>Acedemic Year:</b>
                                                        </td>
                                                        <td style="text-align: left;" class="td">
                                                            <?php echo $academic_year; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bol" style="text-align: left;"><b>School Number:</b>
                                                        </td>
                                                        <td style="text-align: left;" class="td">
                                                            <?php echo $school_number; ?></td>
                                                    </tr>
                                                </table>
                                            </div>
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
                    </section>
                    <!-- Mark Sheet -->
                    <section id="mark-sheet" class="mt-4">
                        <h1 class="h3 mb-3"><strong class="h1">Marksheet</strong></h1>
                        <div class="fill p-4 m-0">
                            <div class="container mt-4">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped text-center">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Mathematics</th>
                                                <th>Gujarati</th>
                                                <th>Hindi</th>
                                                <th>Arts & Craft</th>
                                                <th>Physical Education</th>
                                                <th>Percentage</th>
                                            </tr>
                                            <tr>
                                                <td><?php echo $mathematics ?></td>
                                                <td><?php echo $gujarati ?></td>
                                                <td><?php echo $hindi ?></td>
                                                <td><?php echo $art_craft ?></td>
                                                <td><?php echo $physical_education ?></td>
                                                <td id="total"></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while ($row = $result->fetch_assoc()): 
                    $percentage = ($row['marks'] / $row['total_marks']) * 100;
                    $status = ($percentage >= 35) ? '<span class="pass">Pass</span>' : '<span class="fail">Fail</span>';
                ?>
                                            <tr>
                                                <td><?= htmlspecialchars($row['student_name']) ?></td>
                                                <td><?= htmlspecialchars($row['subject']) ?></td>
                                                <td><?= $row['marks'] . " / " . $row['total_marks'] ?></td>
                                                <td><?= round($percentage, 2) . "%" ?></td>
                                                <td><?= $status ?></td>
                                            </tr>
                                            <?php endwhile; ?>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="result" class="mt-5">
                        <h1 class="h3 mb-3"><strong class="h1">Progress</strong> Graph</h1>
                        <div class="fill m-0">
                            <!-- <div class="cus1 col-md-4 col-xl-3"> -->
                            <div class="cus card1 flex-fill w-100">
                                <div class="card flex-fill w-100" style="height: 60vh; margin: 20px; box-shadow:none;">
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

                                            <table class="table mt-5">
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
                                <div class="card flex-fill w-100" style="margin: 20px; box-shadow:none;">
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
                        </div>
                    </section>
                    <!-- timetable section -->
                    <section id="timetable" class="mt-5">
                        <h1 class="h3 mb-3"><strong class="h1">Time</strong> Table</h1>
                        <div>
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

                                <div class="pdf-container mb-3">
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
                    <section id="notes" class="mt-5">
                        <h1 class="h3 mb-3"><strong class="h1">Notes</strong></h1>
                        <div>
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

                                <div class="pdf-container mb-3">
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
                    <section id="announcement" class="mt-5">
                        <h1 class="h3 mb-3 mt-4 ml"><strong class="h1">Announcement</strong></h1>
                        <div class="fill m-0">
                            <div class="container-f ">
                                <h2 class="h2">Available Announcement</h2>
                                <label class="label" style="padding: 8px 4px;" for="standardFilter">Filter by
                                    Standard:</label>
                                <select id="standardFilter" onchange="filterCards()" class="mb-4">
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

                                <div class="pdf-container mb-3">
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
                        </div>
                    </section>
                    <!-- activites section -->
                    <section id="activites" class="mt-5">
                        <h1 class="h3 mb-1"><strong class="h1">Activites</strong></h1>
                        <div>
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
                                <div class="pdf-container mb-3">
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
            </main>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="text-muted">
                        <div class="text-end">
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
    <!-- pass-fail graph ------------------------------------------------------------------------------>

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
    percentage = Math.min(percentage, 100);
    other = Math.max(other, 0);
    document.getElementById("total").innerText = percentage + "%";    // Ensure percentage does not exceed 100
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
                    backgroundColor: ["blue", "lightgrey"],
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
                labels: ["Mathematics", "Gujarati", "Hindi", "Art & Craft", "P.E."],
                datasets: [{
                    label: "Marks",
                    backgroundColor: "blue",
                    borderColor: "blue",
                    hoverBackgroundColor: "blue",
                    hoverBorderColor: "blue",
                    data: [mathematics, gujarati, hindi, art_craft, physical_education],
                    barPercentage: 0.55,
                    categoryPercentage: 0.5
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
                        stacked: true,
                        ticks: {
                            stepSize: 20
                        }
                    }],
                    xAxes: [{
                        stacked: false,
                        gridLines: {
                            color: "transparent"
                        },
                        ticks: {
                            maxRotation: 0, // Ensures horizontal labels
                            minRotation: 0,
                            autoSkip: false // Prevents skipping labels
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