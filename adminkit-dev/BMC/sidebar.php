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
    <!-- SweetAlert2 CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

</head>
<style>
    /* Make the sidebar fixed */
    #sidebar {
        position: fixed;
        top: 0;
        left: 0;
        width: 250px;
        /* Adjust as per your design */
        height: 100vh;
        /* Full height */
        background: #2C3E50;
        /* Sidebar background */
        color: white;
        overflow-y: auto;
        /* Allow scrolling inside sidebar */
        box-shadow: 2px 0px 5px rgba(0, 0, 0, 0.2);
    }

    /* Ensure sidebar content takes full height */
    .sidebar-content {
        height: 100%;
        overflow-y: auto;
    }

    /* Adjust main content so it doesn't go under the sidebar */
    .wrapper {
        display: flex;
    }

    #main-content {
        margin-left: 250px;
        /* Same as sidebar width */
        padding: 20px;
        width: calc(100% - 250px);
    }
</style>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="BMC.php">
                    <span class="align-middle">B.M.C.</span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">Pages</li>

                    <li class="sidebar-item <?= ($current_page == 'BMC.php') ? 'active' : '' ?>">
                        <a class="sidebar-link" href="BMC.php">
                            <i class="align-middle" data-feather="sliders"></i>
                            <span class="align-middle">Dashboard</span>
                        </a>
                    </li>

                    <!-- <li class="sidebar-item <?= ($current_page == 'admin-profile.php') ? 'active' : '' ?>">
                        <a class="sidebar-link" href="admin-profile.php">
                            <i class="align-middle" data-feather="user"></i>
                            <span class="align-middle">Profile</span>
                        </a>
                    </li> -->

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

                    <!-- <li
                        class="sidebar-item <?= ($current_page == 'tr-leave-application-display.php') ? 'active' : '' ?>">
                        <a class="sidebar-link" href="tr-leave-application-display.php">
                            <i class="align-middle" data-feather="bookmark"></i>
                            <span class="align-middle">Leave Application</span>
                        </a>
                    </li> -->

                    <li class="sidebar-item <?= ($current_page == 'BMC-announce.php') ? 'active' : '' ?>">
                        <a class="sidebar-link" href="BMC-announce.php">
                            <i class="align-middle" data-feather="mic"></i>
                            <span class="align-middle">Announcement</span>
                        </a>
                    </li>

                    <!-- <li class="sidebar-item <?= ($current_page == 'activities.php') ? 'active' : '' ?>">
                        <a class="sidebar-link" href="activities.php">
                            <i class="align-middle" data-feather="activity"></i>
                            <span class="align-middle">Activities</span>
                        </a>
                    </li> -->

                    <li class="sidebar-header">Monitoring</li>

                    <li class="sidebar-item <?= ($current_page == 'school-list.php') ? 'active' : '' ?>">
                        <a class="sidebar-link" href="school-list.php">
                            <i class="align-middle" data-feather="layers"></i>
                            <span class="align-middle">List of School</span>
                        </a>
                    </li>

                    <li class="sidebar-item <?= ($current_page == 'principal-list.php') ? 'active' : '' ?>">
                        <a class="sidebar-link" href="principal-list.php">
                            <i class="align-middle" data-feather="layers"></i>
                            <span class="align-middle">List of Principal</span>
                        </a>
                    </li>

                    <li class="sidebar-item <?= ($current_page == 'teacher-list.php') ? 'active' : '' ?>">
                        <a class="sidebar-link" href="teacher-list.php">
                            <i class="align-middle" data-feather="layers"></i>
                            <span class="align-middle">List of Teachers</span>
                        </a>
                    </li>

                    <li class="sidebar-item <?= ($current_page == 'student-list.php') ? 'active' : '' ?>">
                        <a class="sidebar-link" href="student-list.php">
                            <i class="align-middle" data-feather="layers"></i>
                            <span class="align-middle">List of Students</span>
                        </a>
                    </li>

                    <footer class="footer mt-5" style="background-color: transparent; border-top:0; margin-left: 20px;">
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