<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/adminkit-dev/static/css/student-list-display.css">
    <title>Student Details</title>
    <!-- <style>
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
    </style> -->
</head>

<body>
    <main role="main">
        <div class="container">
            <div class="container bg-light">
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
                                        <div class="card mb-4 shadow-sm">
                                            <img src="' . $row['student_image'] . '" alt="Student Image" class="card-img-top" style="height: 200px; object-fit: cover;">
                                            <div class="card-body">
                                                <h5 class="card-title">' . $row['full_name'] . '</h5>
                                                <p class="card-text"><b>Standard:</b> ' . $row['standard'] . '</p>
                                                <p class="card-text"><b>Roll Number:</b> ' . $row['roll_number'] . '</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="btn-group">
                                                        <button class="btn btn-sm btn-outline-info view-btn" 
                                                            data-id="' . $row['id'] . '" 
                                                            data-full_name="' . $row['full_name'] . '" 
                                                            data-roll_number="' . $row['roll_number'] . '" 
                                                            data-date_of_birth="' . $row['date_of_birth'] . '" 
                                                            data-gender="' . $row['gender'] . '" 
                                                            data-blood_group="' . $row['blood_group'] . '"                                                             
                                                            data-residential_address="' . $row['residential_address'] . '" 
                                                            data-father_name="' . $row['father_name'] . '" 
                                                            data-father_phone_number="' . $row['father_phone_number'] . '" 
                                                            data-mother_name="' . $row['mother_name'] . '" 
                                                            data-mother_phone_number="' . $row['mother_phone_number'] . '" 
                                                            data-standard="' . $row['standard'] . '"
                                                            data-academic_year="' . $row['academic_year'] . '"
                                                            data-school_name="' . $row['school_name'] . '" 
                                                            data-school_number="' . $row['school_number'] . '" 
                                                            data-toggle="modal" 
                                                            data-target="#viewModal">View</button>
                                                        <button class="btn btn-sm btn-outline-success edit-btn" 
                                                            data-id="' . $row['id'] . '" 
                                                            data-full_name="' . $row['full_name'] . '" 
                                                            data-roll_number="' . $row['roll_number'] . '" 
                                                            data-date_of_birth="' . $row['date_of_birth'] . '" 
                                                            data-gender="' . $row['gender'] . '" 
                                                            data-blood_group="' . $row['blood_group'] . '"                                                             
                                                            data-residential_address="' . $row['residential_address'] . '" 
                                                            data-father_name="' . $row['father_name'] . '" 
                                                            data-father_phone_number="' . $row['father_phone_number'] . '" 
                                                            data-mother_name="' . $row['mother_name'] . '" 
                                                            data-mother_phone_number="' . $row['mother_phone_number'] . '" 
                                                            data-standard="' . $row['standard'] . '"
                                                            data-academic_year="' . $row['academic_year'] . '"
                                                            data-school_name="' . $row['school_name'] . '" 
                                                            data-school_number="' . $row['school_number'] . '" 
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
                    // // File Upload Handling
                    // $target_dir = "uploads/";
                    // $target_file = $target_dir . basename($_FILES["student_image"]["name"]);
                    // move_uploaded_file($_FILES["student_image"]["tmp_name"], $target_file);
                    ?>
                </div>
            </div>
            <!-- Pagination -->
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <?php if ($page > 1): ?>
                    <li class="page-item"><a class="page-link" href="?page=<?php echo $page - 1; ?>">Previous</a></li>
                    <?php endif; ?>
                    <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                    <li class="page-item <?php if ($i == $page)
                            echo 'active'; ?>">
                        <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                    </li>
                    <?php endfor; ?>
                    <?php if ($page < $total_pages): ?>
                    <li class="page-item"><a class="page-link" href="?page=<?php echo $page + 1; ?>">Next</a></li>
                    <?php endif; ?>
                </ul>
            </nav>

            <!-- Edit Modal -->
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Edit Student</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="student-list-update.php" method="POST">
                                <input type="hidden" name="updateid" id="edit-id">
                                <input type="hidden" name="page" id="edit-page">
                                <div class="form-group">
                                    <label for="edit-full_name">Full Name</label>
                                    <input type="text" class="form-control" name="full_name" id="edit-full_name">
                                </div>
                                <div class="form-group">
                                    <label for="edit-roll_number">Roll Number</label>
                                    <input type="number" class="form-control" name="roll_number" id="edit-roll_number">
                                </div>
                                <div class="form-group">
                                    <label for="edit-date_of_birth">Date of Birth</label>
                                    <input type="date" class="form-control" name="date_of_birth"
                                        id="edit-date_of_birth">
                                </div>
                                <div class="form-group">
                                    <label for="edit-gender">Gender</label>
                                    <select class="form-control" name="gender" id="edit-gender">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="edit-blood_group">Blood Group</label>
                                    <input type="text" class="form-control" name="blood_group" id="edit-blood_group">
                                </div>
                                <div class="form-group">
                                    <label for="edit-residential_address">Residential Address</label>
                                    <input type="text" class="form-control" name="residential_address"
                                        id="edit-residential_address">
                                </div>
                                <div class="form-group">
                                    <label for="edit-father_name">Father's Name</label>
                                    <input type="text" class="form-control" name="father_name" id="edit-father_name">
                                </div>
                                <div class="form-group">
                                    <label for="edit-father_phone_number">Father's Phone</label>
                                    <input type="tel" class="form-control" name="father_phone_number"
                                        id="edit-father_phone_number">
                                </div>
                                <div class="form-group">
                                    <label for="edit-mother_name">Mother's Name</label>
                                    <input type="text" class="form-control" name="mother_name" id="edit-mother_name">
                                </div>
                                <div class="form-group">
                                    <label for="edit-mother_phone_number">Mother's Phone</label>
                                    <input type="tel" class="form-control" name="mother_phone_number"
                                        id="edit-mother_phone_number">
                                </div>
                                <div class="form-group">
                                    <label for="edit-standard">Standard</label>
                                    <input type="text" class="form-control" name="standard" id="edit-standard">
                                </div>
                                <div class="form-group">
                                    <label for="edit-academic_year">Academic Year</label>
                                    <input type="text" class="form-control" name="academic_year"
                                        id="edit-academic_year">
                                </div>
                                <div class="form-group">
                                    <label for="edit-school_name">School Name</label>
                                    <input type="text" class="form-control" name="school_name" id="edit-school_name">
                                </div>
                                <div class="form-group">
                                    <label for="edit-school_number">School Number</label>
                                    <input type="text" class="form-control" name="school_number"
                                        id="edit-school_number">
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- View Modal -->
            <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="viewModalLabel">View Student</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p><b>Id:</b> <span id="view-id"></span></p>
                            <p><b>Full Name:</b> <span id="view-full_name"></span></p>
                            <p><b>Roll Number:</b> <span id="view-roll_number"></span></p>
                            <p><b>Date of Birth:</b> <span id="view-date_of_birth"></span></p>
                            <p><b>Gender:</b> <span id="view-gender"></span></p>
                            <p><b>Blood Group:</b> <span id="view-blood_group"></span></p>
                            <p><b>Residential Address:</b> <span id="view-residential_address"></span></p>
                            <p><b>Father's Name:</b> <span id="view-father_name"></span></p>
                            <p><b>Father's Phone:</b> <span id="view-father_phone_number"></span></p>
                            <p><b>Mother's Name:</b> <span id="view-mother_name"></span></p>
                            <p><b>Mother's Phone:</b> <span id="view-mother_phone_number"></span></p>
                            <p><b>Standard:</b> <span id="view-standard"></span></p>
                            <p><b>Academic Year:</b> <span id="view-academic_year"></span></p>
                            <p><b>School Name:</b> <span id="view-school_name"></span></p>
                            <p><b>School Number:</b> <span id="view-school_number"></span></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Delete Confirmation Modal -->
            <div class="modal fade" id="deleteConfirmModal" tabindex="-1" role="dialog"
                aria-labelledby="deleteConfirmModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteConfirmModalLabel">Confirm Deletion</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to delete this student?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <a href="#" id="confirmDeleteBtn" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            </div>


            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
            <script>
            $(document).ready(function() {
                $('.edit-btn').click(function() {
                    $('#edit-id').val($(this).data('id'));
                    $('#edit-full_name').val($(this).data('full_name'));
                    $('#edit-roll_number').val($(this).data('roll_number'));
                    $('#edit-date_of_birth').val($(this).data('date_of_birth'));
                    $('#edit-gender').val($(this).data('gender'));
                    $('#edit-blood_group').val($(this).data('blood_group'));
                    $('#edit-residential_address').val($(this).data('residential_address'));
                    $('#edit-father_name').val($(this).data('father_name'));
                    $('#edit-father_phone_number').val($(this).data('father_phone_number'));
                    $('#edit-mother_name').val($(this).data('mother_name'));
                    $('#edit-mother_phone_number').val($(this).data('mother_phone_number'));
                    $('#edit-standard').val($(this).data('standard'));
                    $('#edit-academic_year').val($(this).data('academic_year'));
                    $('#edit-school_name').val($(this).data('school_name'));
                    $('#edit-school_number').val($(this).data('school_number'));
                    $('#edit-page').val(new URLSearchParams(window.location.search).get('page') || 1);
                });

                $('.view-btn').click(function() {
                    $('#view-id').text($(this).data('id'));
                    $('#view-full_name').text($(this).data('full_name'));
                    $('#view-roll_number').text($(this).data('roll_number'));
                    $('#view-date_of_birth').text($(this).data('date_of_birth'));
                    $('#view-gender').text($(this).data('gender'));
                    $('#view-blood_group').text($(this).data('blood_group'));
                    $('#view-residential_address').text($(this).data('residential_address'));
                    $('#view-father_name').text($(this).data('father_name'));
                    $('#view-father_phone_number').text($(this).data('father_phone_number'));
                    $('#view-mother_name').text($(this).data('mother_name'));
                    $('#view-mother_phone_number').text($(this).data('mother_phone_number'));
                    $('#view-standard').text($(this).data('standard'));
                    $('#view-academic_year').text($(this).data('academic_year'));
                    $('#view-school_name').text($(this).data('school_name'));
                    $('#view-school_number').text($(this).data('school_number'));
                });
            });
            </script>

            <script>
            $(document).ready(function() {
                let deleteUrl = "";

                $(".delete-btn").click(function() {
                    let studentId = $(this).data("id");
                    let page = $(this).data("page");

                    deleteUrl = "student-list-delete.php?deleteid=" + studentId + "&page=" + page;
                });

                $("#confirmDeleteBtn").click(function() {
                    window.location.href = deleteUrl;
                });
            });
            </script>
        </div>
    </main>
</body>

</html>