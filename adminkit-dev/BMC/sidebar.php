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

    <title>School Monitoring System</title>

    <link href="css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="/adminkit-dev/static/css/admin-custom-style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    
    <style>
    .sidebar {
        position: sticky;
        top: 0;
        height: 100vh;
    }

    .sidebar-item,
    .sidebar-link {
        border: none !important;
        box-shadow: none !important;
        text-decoration: none !important;
        border-bottom: none !important;
    }

    .sidebar-link a {
        text-decoration: none !important;
        border-bottom: none !important;
    }

    .sidebar-item::after,
    .sidebar-link::after {
        content: none !important;
        display: none !important;
    }

    .sidebar-item {
        border-bottom: none !important;
    }
    </style>
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="BMC.php">
                    <span class="align-middle-cstm">B.M.C.</span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">Pages</li>
                    <li class="sidebar-item <?= ($current_page == 'BMC.php') ? 'active' : '' ?>">
                        <a class="sidebar-link" href="BMC.php">
                            <i class="align-middle" data-feather="sliders"></i>
                            <span class="align-middle">Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-header">Forms</li>
                    <li class="sidebar-item <?= ($current_page == 'schEnroll.php') ? 'active' : '' ?>">
                        <a class="sidebar-link" href="schEnroll.php">
                            <i class="align-middle" data-feather="edit-2"></i>
                            <span class="align-middle">School Enrollment</span>
                        </a>
                    </li>
                    <li class="sidebar-item <?= ($current_page == 'principal-enroll.php') ? 'active' : '' ?>">
                        <a class="sidebar-link" href="principal-enroll.php">
                            <i class="align-middle" data-feather="edit-2"></i>
                            <span class="align-middle">Principal Enrollment</span>
                        </a>
                    </li>
                    <li class="sidebar-item <?= ($current_page == 'BMC-announce.php') ? 'active' : '' ?>">
                        <a class="sidebar-link" href="BMC-announce.php">
                            <i class="align-middle" data-feather="mic"></i>
                            <span class="align-middle">Announcement</span>
                        </a>
                    </li>
                    <li class="sidebar-header">Monitoring</li>
                    <li class="sidebar-item <?= ($current_page == 'school-list.php') ? 'active' : '' ?>">
                        <a class="sidebar-link" href="school-list.php">
                            <i class="align-middle" data-feather="users"></i>
                            <span class="align-middle">List of School</span>
                        </a>
                    </li>
                    <li class="sidebar-item <?= ($current_page == 'principal-list.php') ? 'active' : '' ?>">
                        <a class="sidebar-link" href="principal-list.php">
                            <i class="align-middle" data-feather="users"></i>
                            <span class="align-middle">List of Principal</span>
                        </a>
                    </li>
                    <li class="sidebar-item <?= ($current_page == 'teacher-list.php') ? 'active' : '' ?>">
                        <a class="sidebar-link" href="teacher-list.php">
                            <i class="align-middle" data-feather="users"></i>
                            <span class="align-middle">List of Teachers</span>
                        </a>
                    </li>
                    <li class="sidebar-item <?= ($current_page == 'student-list.php') ? 'active' : '' ?>">
                        <a class="sidebar-link" href="student-list.php">
                            <i class="align-middle" data-feather="users"></i>
                            <span class="align-middle">List of Students</span>
                        </a>
                    </li>

                    <footer class="footer mt-7" style="background-color: transparent; border-top:0; margin-left: 20px;">
                        <li
                            class="signout-btn sidebar-item <?= ($current_page == 'admin-log-out.php') ? 'active' : '' ?>">
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
                window.location.href = 'logout.php'; // Redirect to logout script
            }
        });
    }
    </script>

</body>

</html>