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

    <link rel="canonical" href="https://demo-basic.adminkit.io/maps-google.html" />

    <title>Teacher report</title>
    <!-- <link rel="stylesheet" href="/adminkit-dev/static/css/admin-custom-style.css"> -->

    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
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
            <?php
			include 'teacher-list-display.php'; ?>
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

</body>

</html>