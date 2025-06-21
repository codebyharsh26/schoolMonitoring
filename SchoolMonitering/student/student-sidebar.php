<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sidebar</title>
    <style>
    footer {
        margin-bottom: 2.5rem;
        margin-left: 2.5rem;
    }
    .align-middle{
        font-size:14px;
    }
    .align-middle-cstm{
font-size:19.4px;
    }
    .mt{
        margin-top: 15.5rem;
        margin-left: 2.3rem;

    }
    </style>
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="index.html">
                    <span class="align-middle-cstm">StudentPortal</span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Pages
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#profile">
                            <i class="align-middle-cstm" data-feather="user"></i> <span class="align-middle">Profile</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#mark-sheet">
                            <i class="align-middle-cstm" data-feather="clipboard"></i> <span class="align-middle">Result</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#result">
                            <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Progress Graph</span>
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
                            <i class="align-middle" data-feather="square"></i> <span class="align-middle">Notes</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#announcement">
                            <i class="align-middle" data-feather="mic"></i> <span
                                class="align-middle">Announcement</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#activites">
                            <i class="align-middle" data-feather="bar-chart-2"></i> <span
                                class="align-middle">Activites</span>
                        </a>
                    </li>

                    <footer class="mt" >
                        <li class="signout-btn sidebar-item <?= ($current_page == 'admin-log-out.php') ? 'active' : '' ?>">
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11">
    </script>
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