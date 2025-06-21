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
    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-profile.html" />
    <title>Profile</title>
    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/adminkit-dev/static/css/admin-custom-style.css">
    <style>
    .car{
        display: flex;
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
    </style>
</head>

<body>
    <?php
    session_start();
    include_once("connection.php") ?>
    <div class="wrapper m-0 p-0">
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
                    <h1 class="h3 mb-3"><strong class="h1">Profile</strong> Details</h1>
                    <?php
                    $query = "select * from principal_1 where id=1";
                    $result = mysqli_query($conn, $query);
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $principal_image = $row["principal_image"];
                            $principal_full_name = $row["principal_full_name"];
                            $date_of_birth = $row["date_of_birth"];
                            $email = $row["email"];
                            $gender = $row["gender"];
                            $phone = $row["phone"];
                            $qualification = $row["qualification"];
                            $address = $row["address"];
                            $school_name = $row["school_name"];
                            $school_no = $row["school_no"];
                            $salary = $row["salary"];
                    ?>
                    <div class="custom-profile mb-3">
                            <div class="card-body text-center">
                                <img src="<?php echo $principal_image; ?>" alt="Christina Mason"
                                    class="img-fluid rounded mb-2" width="128" height="128" />

                                <h5 class="font" style="font-size: xx-large;">
                                    <?php echo $principal_full_name; ?></h5>
                                <div class="car mt-4 gap-5 mb-4">
                                    <div>
                                    <table class=" m-2">

                                        <tr>
                                            <td class="bol" style="text-align: left;"><b>DOB:</b></td>
                                            <td style="text-align: left;" class="td"><?php echo $date_of_birth; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="bol" style="text-align: left;"><b>Gender:</b></td>
                                            <td style="text-align: left;"class="td"><?php echo $gender; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="bol" style="text-align: left;"><b>Address:</b></td>
                                            <td style="text-align: left;"class="td"><?php echo $address; ?></td>
                                        </tr>
                                        
                                        
                                    </table>
                                    </div>
                                    <div>
                                        <table class=" m-2">
                                        <tr>
                                            <td class="bol" style="text-align: left;"><b>Email:</b></td>
                                            <td style="text-align: left;"class="td"><?php echo $email; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="bol" style="text-align: left;"><b>Phone:</b></td>
                                            <td style="text-align: left;"class="td"><?php echo $phone; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="bol" style="text-align: left;"><b>Qualification:</b>
                                            </td>
                                            <td style="text-align: left;"class="td"><?php echo $qualification; ?></td>
                                        </tr>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    } ?>
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
</body>

</html>