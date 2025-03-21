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
    </style>
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="index.html">
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
                        <a class="sidebar-link" href="#progress">
                            <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Record
                                and Progress</span>
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
                        <a class="sidebar-link" href="#announcement">
                            <i class="align-middle" data-feather="bar-chart-2"></i> <span
                                class="align-middle">Announcement</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#calender">
                            <i class="align-middle" data-feather="bar-chart-2"></i> <span
                                class="align-middle">Calender</span>
                        </a>
                    </li>


                </ul>
                <footer>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#" onclick="confirmLogout()">
                            <i class="align-middle fas fa-sign-out-alt" data-feather="log-in"> </i>
                            <span class="align-middle">Sign Out</span>
                        </a>
                    </li>
                </footer>
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