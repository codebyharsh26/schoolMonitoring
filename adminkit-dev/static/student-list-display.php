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
        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
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
            /* background-color: #007bff; */
            color: #007bff;
            /* border-radius: 3px; */
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
    </style>
</head>
<div class="sidebar">
    <?php
    include_once("sidebar.php");
    ?>
</div>

<body>
    <main role="main" style="margin-top: 3rem;">
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
                    $total_query = "SELECT COUNT(*) FROM student_1 WHERE school_no = 1";
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
                                            <div class="card-body">
                                                <h5 class="card-title">' . $row['full_name'] . '</h5>
                                                <p class="card-text"><b>Standard:</b> ' . $row['standard'] . '</p>
                                                <p class="card-text"><b>Roll:</b> ' . $row['roll'] . '</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="btn-group">
                                                        <button class="btn btn-sm btn-outline-info view-btn" 
                                                            data-id="' . $row['id'] . '" 
                                                            data-full_name="' . $row['full_name'] . '" 
                                                            data-date_of_birth="' . $row['date_of_birth'] . '" 
                                                            data-address="' . $row['address'] . '" 
                                                            data-gender="' . $row['gender'] . '" 
                                                            data-standard="' . $row['standard'] . '" 
                                                            data-roll="' . $row['roll'] . '" 
                                                            data-mother_name="' . $row['mother_name'] . '" 
                                                            data-mother_phone_number="' . $row['mother_phone_number'] . '" 
                                                            data-father_name="' . $row['father_name'] . '" 
                                                            data-father_phone_number="' . $row['father_phone_number'] . '" 
                                                            data-blood_group="' . $row['blood_group'] . '" 
                                                            data-school_name="' . $row['school_name'] . '" 
                                                            data-school_no="' . $row['school_no'] . '" 
                                                            data-toggle="modal" 
                                                            data-target="#viewModal">View</button>
                                                        <button class="btn btn-sm btn-outline-success edit-btn" 
                                                            data-id="' . $row['id'] . '" 
                                                            data-full_name="' . $row['full_name'] . '" 
                                                            data-date_of_birth="' . $row['date_of_birth'] . '" 
                                                            data-address="' . $row['address'] . '" 
                                                            data-gender="' . $row['gender'] . '" 
                                                            data-standard="' . $row['standard'] . '" 
                                                            data-roll="' . $row['roll'] . '" 
                                                            data-mother_name="' . $row['mother_name'] . '" 
                                                            data-mother_phone_number="' . $row['mother_phone_number'] . '" 
                                                            data-father_name="' . $row['father_name'] . '" 
                                                            data-father_phone_number="' . $row['father_phone_number'] . '" 
                                                            data-blood_group="' . $row['blood_group'] . '" 
                                                            data-school_name="' . $row['school_name'] . '" 
                                                            data-school_no="' . $row['school_no'] . '" 
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

        <!-- Edit Modal -->
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Student</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="stu_update.php" method="POST">
                            <input type="hidden" name="updateid" id="edit-id">
                            <input type="hidden" name="page" id="edit-page">
                            <div class="form-group">
                                <label for="edit-full_name">Full Name</label>
                                <input type="text" class="form-control" name="full_name" id="edit-full_name">
                            </div>
                            <div class="form-group">
                                <label for="edit-date_of_birth">Date of Birth</label>
                                <input type="date" class="form-control" name="date_of_birth" id="edit-date_of_birth">
                            </div>
                            <div class="form-group">
                                <label for="edit-address">Address</label>
                                <input type="text" class="form-control" name="address" id="edit-address">
                            </div>
                            <div class="form-group">
                                <label for="edit-gender">Gender</label>
                                <select class="form-control" name="gender" id="edit-gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="edit-standard">Standard</label>
                                <input type="text" class="form-control" name="standard" id="edit-standard">
                            </div>
                            <div class="form-group">
                                <label for="edit-roll">Roll</label>
                                <input type="number" class="form-control" name="roll" id="edit-roll">
                            </div>
                            <div class="form-group">
                                <label for="edit-mother_name">Mother's Name</label>
                                <input type="text" class="form-control" name="mother_name" id="edit-mother_name">
                            </div>
                            <div class="form-group">
                                <label for="edit-mother_phone_number">Mother's Phone</label>
                                <input type="tel" class="form-control" name="mother_phone_number" id="edit-mother_phone_number">
                            </div>
                            <div class="form-group">
                                <label for="edit-father_name">Father's Name</label>
                                <input type="text" class="form-control" name="father_name" id="edit-father_name">
                            </div>
                            <div class="form-group">
                                <label for="edit-father_phone_number">Father's Phone</label>
                                <input type="tel" class="form-control" name="father_phone_number" id="edit-father_phone_number">
                            </div>
                            <div class="form-group">
                                <label for="edit-blood_group">Blood Group</label>
                                <input type="text" class="form-control" name="blood_group" id="edit-blood_group">
                            </div>
                            <div class="form-group">
                                <label for="edit-school_name">School Name</label>
                                <input type="text" class="form-control" name="school_name" id="edit-school_name">
                            </div>
                            <div class="form-group">
                                <label for="edit-school_no">School No</label>
                                <input type="text" class="form-control" name="school_no" id="edit-school_no">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- View Modal -->
        <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="viewModalLabel">View Student</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p><b>Full Name:</b> <span id="view-full_name"></span></p>
                        <p><b>Date of Birth:</b> <span id="view-date_of_birth"></span></p>
                        <p><b>Address:</b> <span id="view-address"></span></p>
                        <p><b>Gender:</b> <span id="view-gender"></span></p>
                        <p><b>Standard:</b> <span id="view-standard"></span></p>
                        <p><b>Roll:</b> <span id="view-roll"></span></p>
                        <p><b>Mother's Name:</b> <span id="view-mother_name"></span></p>
                        <p><b>Mother's Phone:</b> <span id="view-mother_phone_number"></span></p>
                        <p><b>Father's Name:</b> <span id="view-father_name"></span></p>
                        <p><b>Father's Phone:</b> <span id="view-father_phone_number"></span></p>
                        <p><b>Blood Group:</b> <span id="view-blood_group"></span></p>
                        <p><b>School Name:</b> <span id="view-school_name"></span></p>
                        <p><b>School No:</b> <span id="view-school_no"></span></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Delete Confirmation Modal -->
        <div class="modal fade" id="deleteConfirmModal" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmModalLabel" aria-hidden="true">
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
                    $('#edit-date_of_birth').val($(this).data('date_of_birth'));
                    $('#edit-address').val($(this).data('address'));
                    $('#edit-gender').val($(this).data('gender'));
                    $('#edit-standard').val($(this).data('standard'));
                    $('#edit-roll').val($(this).data('roll'));
                    $('#edit-mother_name').val($(this).data('mother_name'));
                    $('#edit-mother_phone_number').val($(this).data('mother_phone_number'));
                    $('#edit-father_name').val($(this).data('father_name'));
                    $('#edit-father_phone_number').val($(this).data('father_phone_number'));
                    $('#edit-blood_group').val($(this).data('blood_group'));
                    $('#edit-school_name').val($(this).data('school_name'));
                    $('#edit-school_no').val($(this).data('school_no'));
                    $('#edit-page').val(new URLSearchParams(window.location.search).get('page') || 1);
                });

                $('.view-btn').click(function() {
                    $('#view-full_name').text($(this).data('full_name'));
                    $('#view-date_of_birth').text($(this).data('date_of_birth'));
                    $('#view-address').text($(this).data('address'));
                    $('#view-gender').text($(this).data('gender'));
                    $('#view-standard').text($(this).data('standard'));
                    $('#view-roll').text($(this).data('roll'));
                    $('#view-mother_name').text($(this).data('mother_name'));
                    $('#view-mother_phone_number').text($(this).data('mother_phone_number'));
                    $('#view-father_name').text($(this).data('father_name'));
                    $('#view-father_phone_number').text($(this).data('father_phone_number'));
                    $('#view-blood_group').text($(this).data('blood_group'));
                    $('#view-school_name').text($(this).data('school_name'));
                    $('#view-school_no').text($(this).data('school_no'));
                });
            });
        </script>

        <script>
            $(document).ready(function() {
                let deleteUrl = "";

                $(".delete-btn").click(function() {
                    let studentId = $(this).data("id");
                    let page = $(this).data("page");

                    deleteUrl = "stu_delete.php?deleteid=" + studentId + "&page=" + page;
                });

                $("#confirmDeleteBtn").click(function() {
                    window.location.href = deleteUrl;
                });
            });
        </script>
    </main>
</body>

</html>