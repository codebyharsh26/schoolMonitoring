<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/schoolMonitoring/adminkit-dev/static/css/teacher-list-display.css">
    <title>Teacher Details</title>
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
                <h1 class="h3 mb-4"><strong>Teachers</strong> Details</h1>

                <div class="row">
                    <?php
                    include_once 'connection.php';

                    $limit = 21; // Number of records per page
                    $page = isset($_GET['page']) ? $_GET['page'] : 1; // Current page
                    $offset = ($page - 1) * $limit; // Offset for pagination

                    // Count total records
                    $total_query = "SELECT COUNT(*) FROM teacher_1 WHERE school_no = 1";
                    $total_result = mysqli_query($conn, $total_query);
                    $total_rows = mysqli_fetch_array($total_result)[0];
                    $total_pages = ceil($total_rows / $limit); // Total pages

                    // Fetch records for the current page
                    $select = "SELECT * FROM teacher_1 LIMIT $limit OFFSET $offset";
                    $result = mysqli_query($conn, $select);

                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<div class="col-md-4">
                                        <div class="card mb-4 shadow-sm">
                                            <div class="card-body">
                                                <h5 class="card-title">' . $row['teacher_name'] . '</h5>
                                                <p class="card-text"><b>Subject:</b> ' . $row['subject'] . '</p>
                                                <p class="card-text"><b>Standard:</b> ' . $row['std'] . '</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="btn-group">
                                                        <button class="btn btn-sm btn-outline-info view-btn" 
                                                            data-teacher_id="' . $row['teacher_id'] . '" 
                                                            data-teacher_name="' . $row['teacher_name'] . '" 
                                                            data-teacher_phone="' . $row['teacher_phone'] . '" 
                                                            data-teacher_email="' . $row['teacher_email'] . '" 
                                                            data-teacher_salary="' . $row['teacher_salary'] . '"
                                                            data-teacher_dob="' . $row['teacher_dob'] . '" 
                                                            data-teacher_address="' . $row['teacher_address'] . '"  
                                                            data-qualification="' . $row['qualification'] . '" 
                                                            data-subject="' . $row['subject'] . '" 
                                                            data-std="' . $row['std'] . '" 
                                                            data-gender="' . $row['gender'] . '" 
                                                            data-school_name="' . $row['school_name'] . '" 
                                                            data-school_no="' . $row['school_no'] . '" 
                                                            data-toggle="modal" 
                                                            data-target="#viewModal">View</button>
                                                            <button class="btn btn-sm btn-outline-success edit-btn" 
                                                            data-teacher_id="' . $row['teacher_id'] . '" 
                                                            data-teacher_name="' . $row['teacher_name'] . '" 
                                                            data-teacher_phone="' . $row['teacher_phone'] . '" 
                                                            data-teacher_email="' . $row['teacher_email'] . '" 
                                                            data-teacher_salary="' . $row['teacher_salary'] . '"
                                                            data-teacher_dob="' . $row['teacher_dob'] . '" 
                                                            data-teacher_address="' . $row['teacher_address'] . '"  
                                                            data-qualification="' . $row['qualification'] . '" 
                                                            data-subject="' . $row['subject'] . '" 
                                                            data-std="' . $row['std'] . '" 
                                                            data-gender="' . $row['gender'] . '" 
                                                            data-school_name="' . $row['school_name'] . '" 
                                                            data-school_no="' . $row['school_no'] . '" 
                                                            data-toggle="modal" 
                                                            data-target="#editModal">Edit</button>
                                                        <a href="#" class="btn btn-sm btn-outline-danger delete-btn" data-toggle="modal" data-target="#deleteConfirmModal" data-teacher_id="' . $row['teacher_id'] . '" data-page="' . $page . '">Delete</a>                                                    </div>
                                                    <small class="text-muted">ID: ' . $row['teacher_id'] . '</small>
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
        <nav aria-label="Page navigation">
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
                        <h5 class="modal-title" id="editModalLabel">Edit Teacher</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="tea_update.php" method="POST">
                            <input type="hidden" name="updateid" id="edit-teacher_id">
                            <input type="hidden" name="page" id="edit-page">
                            <div class="form-group">
                                <label for="edit-teacher_name">Teacher Name</label>
                                <input type="text" class="form-control" name="teacher_name" id="edit-teacher_name">
                            </div>
                            <div class="form-group">
                                <label for="edit-teacher-phone">Teacher Phone</label>
                                <input type="tel" class="form-control" name="teacher_phone" id="edit-teacher_phone">
                            </div>
                            <div class="form-group">
                                <label for="edit-teacher-email">Teacher Email</label>
                                <input type="email" class="form-control" name="teacher_email" id="edit-teacher_email">
                            </div>
                            <div class="form-group">
                                <label for="edit-teacher-salary">Teacher Salary</label>
                                <input type="number" class="form-control" min="0" max="10000000" step="0.01" name="teacher_salary" id="edit-teacher_salary">
                            </div>
                            <div class="form-group">
                                <label for="edit-teacher_dob">Teacher DOB</label>
                                <input type="date" class="form-control" name="teacher_dob" id="edit-teacher_dob">
                            </div>
                            <div class="form-group">
                                <label for="edit-teacher_address">Teacher Address</label>
                                <input type="text" class="form-control" name="teacher_address" id="edit-teacher_address">
                            </div>
                            <div class="form-group">
                                <label for="edit-qualification">Qualification</label>
                                <input type="text" class="form-control" name="qualification" id="edit-qualification">
                            </div>
                            <div class="form-group">
                                <label for="edit-subject">Subject</label>
                                <input type="text" class="form-control" name="subject" id="edit-subject">
                            </div>
                            <div class="form-group">
                                <label for="edit-std">Standard</label>
                                <input type="text" class="form-control" name="std" id="edit-std">
                            </div>
                            <div class="form-group">
                                <label for="edit-gender">Gender</label>
                                <select class="form-control" name="gender" id="edit-gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
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
                        <h5 class="modal-title" id="viewModalLabel">View Teacher</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p><b>Teacher Name:</b> <span id="view-teacher_name"></span></p>
                        <p><b>Teacher Phone:</b> <span id="view-teacher_phone"></span></p>
                        <p><b>Teacher Email:</b> <span id="view-teacher_email"></span></p>
                        <p><b>Teacher Salary:</b> <span id="view-teacher_salary"></span></p>
                        <p><b>Teacher DOB:</b> <span id="view-teacher_dob"></span></p>
                        <p><b>Teacher Address:</b> <span id="view-teacher_address"></span></p>
                        <p><b>Qualification:</b> <span id="view-qualification"></span></p>
                        <p><b>Subject:</b> <span id="view-subject"></span></p>
                        <p><b>Standard:</b> <span id="view-std"></span></p>
                        <p><b>Gender:</b> <span id="view-gender"></span></p>
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
                        Are you sure you want to delete this teacher?
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
                    $('#edit-teacher_id').val($(this).data('teacher_id'));
                    $('#edit-teacher_name').val($(this).data('teacher_name'));
                    $('#edit-teacher_phone').val($(this).data('teacher_phone'));
                    $('#edit-teacher_email').val($(this).data('teacher_email'));
                    $('#edit-teacher_salary').val($(this).data('teacher_salary'));
                    $('#edit-teacher_dob').val($(this).data('teacher_dob'));
                    $('#edit-teacher_address').val($(this).data('teacher_address'));
                    $('#edit-qualification').val($(this).data('qualification'));
                    $('#edit-subject').val($(this).data('subject'));
                    $('#edit-std').val($(this).data('std'));
                    $('#edit-gender').val($(this).data('gender'));
                    $('#edit-school_name').val($(this).data('school_name'));
                    $('#edit-school_no').val($(this).data('school_no'));
                    $('#edit-page').val(new URLSearchParams(window.location.search).get('page') || 1);
                });

                $('.view-btn').click(function() {
                    $('#view-teacher_id').text($(this).data('teacher_id'));
                    $('#view-teacher_name').text($(this).data('teacher_name'));
                    $('#view-teacher_phone').text($(this).data('teacher_phone'));
                    $('#view-teacher_email').text($(this).data('teacher_email'));
                    $('#view-teacher_salary').text($(this).data('teacher_salary'));
                    $('#view-teacher_dob').text($(this).data('teacher_dob'));
                    $('#view-teacher_address').text($(this).data('teacher_address'));
                    $('#view-qualification').text($(this).data('qualification'));
                    $('#view-subject').text($(this).data('subject'));
                    $('#view-std').text($(this).data('std'));
                    $('#view-gender').text($(this).data('gender'));
                    $('#view-school_name').text($(this).data('school_name'));
                    $('#view-school_no').text($(this).data('school_no'));
                });
            });
        </script>

        <script>
            $(document).ready(function() {
                let deleteUrl = "";

                $(".delete-btn").click(function() {
                    let studentId = $(this).data("teacher_id");
                    let page = $(this).data("page");

                    deleteUrl = "tea_delete.php?deleteid=" + studentId + "&page=" + page;
                });

                $("#confirmDeleteBtn").click(function() {
                    window.location.href = deleteUrl;
                });
            });
        </script>

    </main>
</body>

</html>