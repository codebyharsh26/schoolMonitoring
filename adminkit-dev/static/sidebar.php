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

/* Sidebar Content: No Scrollbar */
.sidebar-content {
    width: 100%;
    height: 100%;
    overflow-y: auto;
}

/* Adjust main content so it doesn't go under the sidebar */
.wrapper {
    display: flex;
    align-items: center;
    padding: 10px;
    text-decoration: none !important;
    color: white;
    font-size: 16px;
    border-radius: 5px;
    transition: background 0.2s ease-in-out;
}

/* Active Sidebar Item - Highlighted */
.sidebar-item.active .sidebar-link {
    background: rgba(255, 255, 255, 0.2);
}

/* Sidebar Hover Effects */
.sidebar-link:hover {
    background: rgba(255, 255, 255, 0.3);
}

/* Remove Focus Outline */
.sidebar-link:focus,
.sidebar-link:active {
    text-decoration: none !important;
    outline: none !important;
    box-shadow: none !important;
}

/* ============================= */
/* 📌 Ensure Sidebar Doesn't Resize */
/* ============================= */

/* Prevent Sidebar Expansion on Click */
.sidebar-content .sidebar-item {
    width: 100%;
    max-width: 100%;
}

/* Fix Sidebar Width on Window Resize */
@media screen and (max-width: 992px) {
    #sidebar {
        width: 250px !important;
        min-width: 250px !important;
        max-width: 250px !important;
    }
}

/* ============================= */
/* 📌 Adjust Main Content Area   */
/* ============================= */
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
                            <i class="align-middle" data-feather="edit-2"></i>
                            <span class="align-middle">Teacher Enrollment</span>
                        </a>
                    </li>

                    <li class="sidebar-item <?= ($current_page == 'std-enroll.php') ? 'active' : '' ?>">
                        <a class="sidebar-link" href="std-enroll.php">
                            <i class="align-middle" data-feather="edit-2"></i>
                            <span class="align-middle">Student Enrollment</span>
                        </a>
                    </li>

                    <li
                        class="sidebar-item <?= ($current_page == 'tr-leave-application-display.php') ? 'active' : '' ?>">
                        <a class="sidebar-link" href="tr-leave-application-display.php">
                            <i class="align-middle" data-feather="bookmark"></i>
                            <span class="align-middle">Leave Application</span>
                        </a>
                    </li>

                    <li class="sidebar-item <?= ($current_page == 'announce.php') ? 'active' : '' ?>">
                        <a class="sidebar-link" href="announce.php">
                            <i class="align-middle" data-feather="mic"></i>
                            <span class="align-middle">Announcement</span>
                        </a>
                    </li>

                    <li class="sidebar-item <?= ($current_page == 'activities.php') ? 'active' : '' ?>">
                        <a class="sidebar-link" href="activities.php">
                            <i class="align-middle" data-feather="activity"></i>
                            <span class="align-middle">Activities</span>
                        </a>
                    </li>

                    <li class="sidebar-header">Monitoring</li>

                    <li class="sidebar-item <?= ($current_page == 'student.php') ? 'active' : '' ?>">
                        <a class="sidebar-link" href="student.php">
                            <i class="align-middle" data-feather="layers"></i>
                            <span class="align-middle">Students</span>
                        </a>
                    </li>

                    <li class="sidebar-item <?= ($current_page == 'teacher.php') ? 'active' : '' ?>">
                        <a class="sidebar-link" href="teacher.php">
                            <i class="align-middle" data-feather="layers"></i>
                            <span class="align-middle">Teachers</span>
                        </a>
                    </li>

                    <li class="sidebar-item <?= ($current_page == 'admin-log-out.php') ? 'active' : '' ?>">
                        <a class="sidebar-link" href="#" onclick="confirmLogout()">
                            <i class="align-middle fas fa-sign-out-alt" data-feather="log-in"> </i>
                            <span class="align-middle">Sign Out</span>
                        </a>
                    </li>
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