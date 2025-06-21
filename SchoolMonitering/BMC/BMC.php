<?php
session_start();

// Check if admin is logged in
if (!isset($_SESSION["admin_logged_in"]) || $_SESSION["admin_logged_in"] !== true) {
    header("Location: blogin.php"); // Redirect to login page if not logged in
    exit;
}

include_once "connection.php"; 

// Fetch admin details (optional)
$admin_email = $_SESSION["admin_id"];
$query = "SELECT * FROM admin_bmc WHERE email_address = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "s", $admin_email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$admin_data = mysqli_fetch_assoc($result);
mysqli_stmt_close($stmt);
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
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />
    <title>BMC Portal</title>

    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/schoolMonitoring/adminkit-dev/static/css/card-direction.css">
    <link rel="stylesheet" href="/adminkit-dev/static/css/admin-custom-style.css">

    <style>
    * {}

    /* Increase space between sidebar items */


    /* Align Sign Out at the bottom */
    .sidebar-content {
        display: flex;
        flex-direction: column;
        height: 100vh;
    }

    .sidebar-nav {
        flex-grow: 1;
        /* Pushes content up, moving the footer to the bottom */
    }

    .past-date {
        color: #d3d3d3 !important;
        /* Light gray color */
        opacity: 0.8;
        /* Make it slightly faded */
        pointer-events: none;
        /* Disable clicking */
    }
    </style>
</head>

<body>
    <div class="wrapper p-0 m-0">
        <div class="sidebar">
            <?php
            include_once("sidebar.php");
            ?>
        </div>
        <div class="main">
            <?php
            include_once("navbar.php");
            ?>

            <main class="content p-4">
                <div class="container-fluid p-0">
                    <h1 class="h3 mb-3"><strong class="h1">Analytics</strong> Dashboard</h1>

                    <div class="row">
                        <div class="col-xl-12 d-flex">
                            <div class="w-100">
                                <div class="d-flex flex-nowrap gap-4">
                                    <!-- gap-3 adds spacing -->
                                    <?php
                                    $teachers = "SELECT COUNT(*) AS total_teachers FROM teacher_1";
                                    $result_t = mysqli_query($conn, $teachers);
                                    $fetch_t = mysqli_fetch_assoc($result_t);
                                    $total_teachers = $fetch_t['total_teachers'];
                                    ?>
                                    <div class="col my-card card">
                                        <div class="admin-custom-card-content card-body">
                                            <h5 class="card-title">Total Teachers</h5>
                                            <h1 class=" mt-1 mb-3" style="font-size: 3rem; margin-left: 0.8rem;">
                                                <?php echo $total_teachers ?>
                                            </h1>
                                        </div>
                                    </div>

                                    <?php
                                    $students = "SELECT COUNT(*) AS total_students FROM student_1";
                                    $result_s = mysqli_query($conn, $students);
                                    $fetch_s = mysqli_fetch_assoc($result_s);
                                    $total_students = $fetch_s['total_students'];
                                    ?>
                                    <div class="col my-card card">
                                        <div class="admin-custom-card-content card-body">
                                            <h5 class="card-title">Total Students</h5>
                                            <h1 class="mt-1 mb-3" style="font-size: 3rem; margin-left: 0.8rem;">
                                                <?php echo $total_students ?>
                                            </h1>
                                        </div>
                                    </div>

                                    <div class="col my-card card">
                                        <div class="admin-custom-card-content card-body">
                                            <h5 class="card-title">Total Admission</h5>
                                            <h1 class="mt-1 mb-3" style="font-size: 3rem; margin-left: 0.8rem;">0</h1>
                                        </div>
                                    </div>

                                    <div class="col my-card card">
                                        <div class="admin-custom-card-content card-body">
                                            <h5 class="card-title">Student Left</h5>
                                            <h1 class="mt-1 mb-3" style="font-size: 3rem; margin-left: 0.8rem;">0</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Calendar: Takes 50% Width -->
                        <div class="col-12 col-lg-6 d-flex order-1 order-lg-1">
                            <div class="card w-100">
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

                        <!-- Academic Result: Takes 25% Width -->
                        <div class="col-12 col-md-6 col-lg-4 col-xxl-3 d-flex order-2 order-xxl-2">
                            <div class="card w-100">
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
                                                    <td class="text-end" id="pass"></td>
                                                </tr>
                                                <tr>
                                                    <td>FAIL</td>
                                                    <td class="text-end" id="fail"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Admission Graph: Takes 25% Width -->
                        <div class="col-12 col-lg-3 d-flex order-3 order-lg-3">
                            <div class="card w-100">
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
                    </div>
                </div>
            </main>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                        </div>
                        <div class="col-6 text-end">
                            <p class="mb-0"><strong>schoolAdmin</strong></p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="js/app.js"></script>

    <?php 
    $sql = "SELECT mathematics, gujarati, hindi, art_craft, physical_education FROM student_marks";
    $result = $conn->query($sql);
    
    $pass_count = 0;
    $fail_count = 0;
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $total_marks = $row['mathematics'] + $row['gujarati'] + $row['hindi'] + $row['art_craft'] + $row['physical_education'];
            $percentage = $total_marks / 5;
    
            if ($percentage >= 50) {
                $pass_count++;
            } else {
                $fail_count++;
            }
        }
    }
    
    $total_students = $pass_count + $fail_count;

    // Avoid division by zero
    $pass_percentage = ($total_students > 0) ? ($pass_count / $total_students) * 100 : 0;
    $fail_percentage = ($total_students > 0) ? ($fail_count / $total_students) * 100 : 0;
?>

    <span id="pass"></span>
    <span id="fail"></span>

    <script>
    var passPercentage = <?php echo number_format($pass_percentage, 2); ?>;
    var failPercentage = <?php echo number_format($fail_percentage, 2); ?>;

    // Display values in table
    document.getElementById("pass").innerHTML = passPercentage + "%";
    document.getElementById("fail").innerHTML = failPercentage + "%";
    </script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <script>
    document.addEventListener("DOMContentLoaded", function() {
        new Chart(document.getElementById("chartjs-dashboard-pie"), {
            type: "pie",
            data: {
                labels: ["Pass", "Fail"],
                datasets: [{
                    data: [passPercentage, failPercentage],
                    backgroundColor: ["blue", "red"],
                    borderWidth: 5
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: true
                    }
                },
                cutout: 75
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
                    data: [9, 33, 57, 69,80], // Admissions data showing the growth from 2020 to 2024
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
        var today = new Date();
        today.setHours(0, 0, 0, 0); // Reset time to avoid time-related mismatches

        document.getElementById("datetimepicker-dashboard").flatpickr({
            inline: true,
            prevArrow: "<span title=\"Previous month\">&laquo;</span>",
            nextArrow: "<span title=\"Next month\">&raquo;</span>",
            defaultDate: today, // Ensure the default date is today
            onDayCreate: function(dObj, dStr, fp, dayElem) {
                let date = dayElem.dateObj;
                date.setHours(0, 0, 0, 0); // Normalize date for proper comparison

                // Apply the past-date class **only if the date is before today**
                if (date < today) {
                    dayElem.classList.add("past-date");
                }
            }
        });
    });
    </script>

</body>

</html>