<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current file name
?>

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
    <link rel="canonical" href="https://demo-basic.adminkit.io/ui-forms.html" />
    <link href="css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="/adminkit-dev/static/css/admin-custom-style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <title>School Monitoring System</title>
</head>
<style>
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
</style>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="teacher-index.php">
                    <span class="align-middle">TeacherPortal</span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Pages
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#profile">
                            <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#timetable">
                            <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Time
                                Table</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#notes">
                            <i class="align-middle" data-feather="square"></i> <span class="align-middle">Uploads
                                Notes</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#marks">
                            <i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Marks
                                Entry</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#leave">
                            <i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Leave
                                Application</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#leave-history">
                            <i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Leave
                                History</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#announcement">
                            <i class="align-middle" data-feather="bar-chart-2"></i> <span
                                class="align-middle">Announcement</span>
                        </a>
                    </li>

                    <footer class="custom-margin">
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="#" onclick="confirmLogout()">
                                <i class="align-middle fas fa-sign-out-alt" data-feather="log-in"> </i>
                                <span class="align-middle">Sign Out</span>
                            </a>
                        </li>
                    </footer>
                </ul>
            </div>
        </nav>
    </div>
    <script src="js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function confirmLogout() {
            Swal.fire({
                title: "Are you sure?",
                text: "You will be logged out!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Yes, Sign Out",
                cancelButtonText: "Cancel"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'admin-logout.php'; // Redirect to logout script
                }
            });
        }
    </script>
</body>

</html>