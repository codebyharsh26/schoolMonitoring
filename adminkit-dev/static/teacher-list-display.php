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
    <link rel="canonical" href="https://demo-basic.adminkit.io/ui-typography.html" />
    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <title>Teacher Details</title>

</head>

<body>
    <main role="main" class="content p-4">
        <div class="container">
            <h1 class="h3 mb-3" style="font-weight:normal"><strong class="h1"
                    style="font-weight:normal">Teachers</strong> List</h1>
            <div class="row">
                <?php
                include_once 'connection.php';

                $limit = 21; // Number of records per page
                $page = isset($_GET['page']) ? $_GET['page'] : 1; // Current page
                $offset = ($page - 1) * $limit; // Offset for pagination

                // Count total records
                $total_query = "SELECT COUNT(*) FROM teacher_1 WHERE school_number = 1";
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
                                        <img src="' . $row['teacher_image'] . '" alt="Teacher Image" class="card-img-top" style="height: 200px; object-fit: cover">
                                            <div class="card-body">
                                                <h5 class="card-title">' . $row['full_name'] . '</h5>
                                                <p class="card-text"><b>Subject Name:</b> ' . $row['subject_name'] . '</p>
                                                <p class="card-text"><b>Standard:</b> ' . $row['standard'] . '</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="btn-group">
                                                        <button class="btn btn-sm btn-outline-info view-btn" 
                                                            data-id="' . $row['id'] . '" 
                                                            data-full_name="' . $row['full_name'] . '" 
                                                            data-gender="' . $row['gender'] . '"
                                                            data-date_of_birth="' . $row['date_of_birth'] . '" 
                                                            data-blood_group="' . $row['blood_group'] . '" 
                                                            data-phone_number="' . $row['phone_number'] . '" 
                                                            data-emergency_contact_number="' . $row['emergency_contact_number'] . '" 
                                                            data-email_address="' . $row['email_address'] . '" 
                                                            data-residential_address="' . $row['residential_address'] . '" 
                                                            data-subject_name="' . $row['subject_name'] . '" 
                                                            data-standard="' . $row['standard'] . '" 
                                                            data-salary_monthly="' . $row['salary_monthly'] . '"
                                                            data-qualification="' . $row['qualification'] . '" 
                                                            data-first_language="' . $row['first_language'] . '" 
                                                            data-language_known="' . $row['language_known'] . '"
                                                            data-school_name="' . $row['school_name'] . '" 
                                                            data-school_number="' . $row['school_number'] . '" 
                                                            data-toggle="modal" 
                                                            data-target="#viewModal">View</button>
                                                            
                                                        <button class="btn btn-sm btn-outline-success edit-btn" 
                                                            data-id="' . $row['id'] . '" 
                                                            data-full_name="' . $row['full_name'] . '" 
                                                            data-gender="' . $row['gender'] . '"
                                                            data-date_of_birth="' . $row['date_of_birth'] . '"
                                                            data-blood_group="' . $row['blood_group'] . '"
                                                            data-phone_number="' . $row['phone_number'] . '" 
                                                            data-emergency_contact_number="' . $row['emergency_contact_number'] . '" 
                                                            data-email_address="' . $row['email_address'] . '" 
                                                            data-residential_address="' . $row['residential_address'] . '" 
                                                            data-subject_name="' . $row['subject_name'] . '" 
                                                            data-standard="' . $row['standard'] . '" 
                                                            data-salary_monthly="' . $row['salary_monthly'] . '"
                                                            data-qualification="' . $row['qualification'] . '" 
                                                            data-first_language="' . $row['first_language'] . '"
                                                            data-language_known="' . $row['language_known'] . '"
                                                            data-school_name="' . $row['school_name'] . '" 
                                                            data-school_number="' . $row['school_number'] . '" 
                                                            data-toggle="modal" 
                                                            data-target="#editModal">Edit</button>
                                                        <a href="#" class="btn btn-sm btn-outline-danger delete-btn" data-toggle="modal" data-target="#deleteConfirmModal" data-id="' . $row['id'] . '" data-page="' . $page . '">Delete</a>                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                    }
                }
                ?>
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
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Edit Teacher</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="teacher-list-update.php" method="POST">
                                <input type="hidden" name="updateid" id="edit-id">
                                <input type="hidden" name="page" id="edit-page">

                                <div class="form-group">
                                    <label for="edit-full_name">Full Name</label>
                                    <input type="text" class="form-control" name="full_name" id="edit-full_name">
                                </div>
                                <div class="form-group">
                                    <label for="edit-gender">Gender</label>
                                    <select class="form-control" name="gender" id="edit-gender">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="edit-date_of_birth">Date of Birth</label>
                                    <input type="date" class="form-control" name="date_of_birth"
                                        id="edit-date_of_birth">
                                </div>
                                <div class="form-group">
                                    <label for="edit-blood_group">Blood Group</label>
                                    <input type="text" class="form-control" name="blood_group" id="edit-blood_group">
                                </div>
                                <div class="form-group">
                                    <label for="edit-phone_number">Phone Number</label>
                                    <input type="tel" class="form-control" name="phone_number" id="edit-phone_number">
                                </div>
                                <div class="form-group">
                                    <label for="edit-emergency_contact_number">Emergency Contact Number</label>
                                    <input type="tel" class="form-control" name="emergency_contact_number"
                                        id="edit-emergency_contact_number">
                                </div>
                                <div class="form-group">
                                    <label for="edit-email_address">Email Address</label>
                                    <input type="tel" class="form-control" name="email_address" id="edit-email_address">
                                </div>
                                <div class="form-group">
                                    <label for="edit-residential_address">Residential Address</label>
                                    <input type="text" class="form-control" name="residential_address"
                                        id="edit-residential_address">
                                </div>
                                <div class="form-group">
                                    <label for="edit-subject_name">Subject Name</label>
                                    <input type="text" class="form-control" name="subject_name" id="edit-subject_name">
                                </div>
                                <div class="form-group">
                                    <label for="edit-standard">Standard</label>
                                    <input type="text" class="form-control" name="standard" id="edit-standard">
                                </div>
                                <div class="form-group">
                                    <label for="edit-salary_monthly">Monthly Salary</label>
                                    <input type="number" class="form-control" name="salary_monthly"
                                        id="edit-salary_monthly">
                                </div>
                                <div class="form-group">
                                    <label for="edit-qualification">Qualification</label>
                                    <input type="text" class="form-control" name="qualification"
                                        id="edit-qualification">
                                </div>
                                <div class="form-group">
                                    <label for="edit-first_language">First Language</label>
                                    <input type="text" class="form-control" name="first_language"
                                        id="edit-first_language">
                                </div>
                                <div class="form-group">
                                    <label for="edit-language_known">Language Known</label>
                                    <input type="text" class="form-control" name="language_known"
                                        id="edit-language_known">
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
                            <h5 class="modal-title" id="viewModalLabel">View Teacher</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p><b>Id:</b> <span id="view-id"></span></p>
                            <p><b>Full Name:</b> <span id="view-full_name"></span></p>
                            <p><b>Gender:</b> <span id="view-gender"></span></p>
                            <p><b>Date of Birth:</b> <span id="view-date_of_birth"></span></p>
                            <p><b>Blood Group:</b> <span id="view-blood_group"></span></p>
                            <p><b>Phone Number:</b> <span id="view-phone_number"></span></p>
                            <p><b>Emergency Contact Number:</b> <span id="view-emergency_contact_number"></span></p>
                            <p><b>Email Address:</b> <span id="view-email_address"></span></p>
                            <p><b>Residential Address:</b> <span id="view-residential_address"></span></p>
                            <p><b>Subject Name:</b> <span id="view-subject_name"></span></p>
                            <p><b>Standard:</b> <span id="view-standard"></span></p>
                            <p><b>Teacher Salary(Monthly):</b> <span id="view-salary_monthly"></span></p>
                            <p><b>Qualification:</b> <span id="view-qualification"></span></p>
                            <p><b>First Language:</b> <span id="view-first_language"></span></p>
                            <p><b>Language Known:</b> <span id="view-language_known"></span></p>
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
                            Are you sure you want to delete this teacher?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <a href="#" id="confirmDeleteBtn" name="id" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.edit-btn').click(function() {
                $('#edit-id').val($(this).data('id'));
                $('#edit-full_name').val($(this).data('full_name'));
                $('#edit-gender').val($(this).data('gender'));
                $('#edit-date_of_birth').val($(this).data('date_of_birth'));
                $('#edit-blood_group').val($(this).data('blood_group'));
                $('#edit-phone_number').val($(this).data('phone_number'));
                $('#edit-emergency_contact_number').val($(this).data('emergency_contact_number'));
                $('#edit-email_address').val($(this).data('email_address'));
                $('#edit-residential_address').val($(this).data('residential_address'));
                $('#edit-subject_name').val($(this).data('subject_name'));
                $('#edit-standard').val($(this).data('standard'));
                $('#edit-salary_monthly').val($(this).data('salary_monthly'));
                $('#edit-qualification').val($(this).data('qualification'));
                $('#edit-first_language').val($(this).data('first_language'));
                $('#edit-language_known').val($(this).data('language_known'));
                $('#edit-school_name').val($(this).data('school_name'));
                $('#edit-school_number').val($(this).data('school_number'));
                $('#edit-page').val(new URLSearchParams(window.location.search).get('page') || 1);
            });

            $('.view-btn').click(function() {
                $('#view-id').text($(this).data('id'));
                $('#view-full_name').text($(this).data('full_name'));
                $('#view-gender').text($(this).data('gender'));
                $('#view-date_of_birth').text($(this).data('date_of_birth'));
                $('#view-blood_group').text($(this).data('blood_group'));
                $('#view-phone_number').text($(this).data('phone_number'));
                $('#view-emergency_contact_number').text($(this).data('emergency_contact_number'));
                $('#view-email_address').text($(this).data('email_address'));
                $('#view-residential_address').text($(this).data('residential_address'));
                $('#view-subject_name').text($(this).data('subject_name'));
                $('#view-standard').text($(this).data('standard'));
                $('#view-salary_monthly').text($(this).data('salary_monthly'));
                $('#view-qualification').text($(this).data('qualification'));
                $('#view-first_language').text($(this).data('first_language'));
                $('#view-language_known').text($(this).data('language_known'));
                $('#view-school_name').text($(this).data('school_name'));
                $('#view-school_number').text($(this).data('school_number'));
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            let deleteUrl = "";

            $(".delete-btn").click(function() {
                let teacherId = $(this).data("id");
                let page = $(this).data("page");

                deleteUrl = "teacher-list-delete.php?deleteid=" + teacherId + "&page=" + page;
            });

            $("#confirmDeleteBtn").click(function() {
                window.location.href = deleteUrl;
            });
        });
    </script>

</body>

</html>