<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/adminkit-dev/static/css/student-list-display.css">
    <title>Student Details</title>
    <style>
        /* General reset for margin and padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }

        /* Container styling */
        .container {
            margin-top: 20px; /* Adjust top margin */
        }

        .row {
            margin: 0; /* Ensure no extra margin on rows */
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
            margin-top: 20px; /* Adjust pagination margin */
        }

        .pagination .page-item.active .page-link {
            border: 1px solid #007bff;
            color: #007bff;
            background-color: white;
            border-radius: 3px;
        }

        .pagination .page-item {
            margin: 0 5px;
        }

        .pagination .page-link {
            padding: 5px 10px;
            text-decoration: none;
            color: #007bff;
        }

        /* Modal Styling */
        .modal {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 60%;
            background: white;
            padding: 20px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }

        .modal.active {
            display: block;
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }

        .modal-footer {
            display: flex;
            justify-content: flex-end;
            margin-top: 10px;
        }

        /* Card Styling */
        .card {
            margin-bottom: 20px; /* Adjust bottom margin for card */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 15px;
        }

        .card-title {
            font-size: 1.25rem;
            margin-bottom: 10px;
        }

        .card-text {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <main class="main">
        <div class="container">
            <div class="bg-light p-4">
                <h1 class="h3 mb-4"><strong>Students</strong> Details</h1>

                <div class="row">
                    <?php
                    include_once 'connection.php';

                    $limit = 20; // Number of records per page
                    $page = isset($_GET['page']) ? $_GET['page'] : 1; // Current page
                    $offset = ($page - 1) * $limit; // Offset for pagination

                    // Count total records
                    $total_query = "SELECT COUNT(*) FROM student_1 WHERE school_number = 1";
                    $total_result = mysqli_query($conn, $total_query);
                    $total_rows = mysqli_fetch_array($total_result)[0];
                    $total_pages = ceil($total_rows / $limit); // Total pages

                    // Fetch records for the current page
                    $select = "SELECT * FROM student_1 LIMIT $limit OFFSET $offset";
                    $result = mysqli_query($conn, $select);

                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<div class="col-md-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">' . $row['full_name'] . '</h5>
                                                <p class="card-text"><b>Standard:</b> ' . $row['standard'] . '</p>
                                                <p class="card-text"><b>Roll:</b> ' . $row['roll_number'] . '</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="btn-group">
                                                        <button class="btn btn-sm btn-outline-info view-btn" 
                                                            data-id="' . $row['id'] . '" 
                                                            data-full_name="' . $row['full_name'] . '" 
                                                            data-date_of_birth="' . $row['date_of_birth'] . '" 
                                                            data-address="' . $row['residential_address'] . '" 
                                                            data-gender="' . $row['gender'] . '" 
                                                            data-standard="' . $row['standard'] . '" 
                                                            data-roll="' . $row['roll_number'] . '" 
                                                            data-mother_name="' . $row['mother_name'] . '" 
                                                            data-mother_phone_number="' . $row['mother_phone_number'] . '" 
                                                            data-father_name="' . $row['father_name'] . '" 
                                                            data-father_phone_number="' . $row['father_phone_number'] . '" 
                                                            data-blood_group="' . $row['blood_group'] . '" 
                                                            data-school_name="' . $row['school_name'] . '" 
                                                            data-school_no="' . $row['school_number'] . '" 
                                                            data-toggle="modal" 
                                                            data-target="#viewModal">View</button>
                                                        <button class="btn btn-sm btn-outline-success edit-btn" 
                                                            data-id="' . $row['id'] . '" 
                                                            data-full_name="' . $row['full_name'] . '" 
                                                            data-date_of_birth="' . $row['date_of_birth'] . '" 
                                                            data-address="' . $row['residential_address'] . '" 
                                                            data-gender="' . $row['gender'] . '" 
                                                            data-standard="' . $row['standard'] . '" 
                                                            data-roll="' . $row['roll_number'] . '" 
                                                            data-mother_name="' . $row['mother_name'] . '" 
                                                            data-mother_phone_number="' . $row['mother_phone_number'] . '" 
                                                            data-father_name="' . $row['father_name'] . '" 
                                                            data-father_phone_number="' . $row['father_phone_number'] . '" 
                                                            data-blood_group="' . $row['blood_group'] . '" 
                                                            data-school_name="' . $row['school_name'] . '" 
                                                            data-school_no="' . $row['school_number'] . '" 
                                                            data-toggle="modal" 
                                                            data-target="#editModal">Edit</button>
                                                        <a href="#" class="btn btn-sm btn-outline-danger delete-btn" data-toggle="modal" data-target="#deleteConfirmModal" data-id="' . $row['id'] . '" data-page="' . $page . '">Delete</a>                                                    </div>
                                                    <small class="text-muted">ID: ' . $row['id'] . '</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- Pagination -->
        <nav>
            <ul class="pagination justify-content-center">
                <?php if ($page > 1): ?>
                    <li class="page-item"><a class="page-link" href="?page=<?php echo $page - 1; ?>">Previous</a></li>
                <?php endif; ?>
                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                    <li class="page-item <?php if ($i == $page) echo 'active'; ?>">
                        <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                    </li>
                <?php endfor; ?>
                <?php if ($page < $total_pages): ?>
                    <li class="page-item"><a class="page-link" href="?page=<?php echo $page + 1; ?>">Next</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </main>

    <!-- Include your modal and other JavaScript here -->
</body>

</html>
