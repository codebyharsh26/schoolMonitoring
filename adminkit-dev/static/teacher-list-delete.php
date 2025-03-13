<?php
include_once 'connection.php';

if (isset($_GET['deleteid']) && isset($_GET['page'])) {
    $teacher_id = $_GET['deleteid'];
    $page = max(1, (int)$_GET['page']); // Ensure page is at least 1
    $limit = 21; // Must match the pagination limit

    // Calculate OFFSET for the current page
    $offset = max(0, ($page - 1) * $limit);

    // Check if the record being deleted is the first one on the page
    $first_record_query = "SELECT teacher_id FROM teacher_1 ORDER BY teacher_id LIMIT 1 OFFSET $offset";
    $first_record_result = mysqli_query($conn, $first_record_query);

    if ($first_record_result && mysqli_num_rows($first_record_result) > 0) {
        $first_record_id = mysqli_fetch_assoc($first_record_result)['teacher_id'];
    } else {
        $first_record_id = null;
    }

    // Perform the deletion
    $delete = "DELETE FROM teacher_1 WHERE teacher_id=$teacher_id";
    if (mysqli_query($conn, $delete)) {
        // If the deleted record was the first record on the page, redirect to page 1
        if ($id == $first_record_id) {
            header("Location: teacher.php?page=1");
        } else {
            header("Location: teacher.php?page=$page");
        }
        exit();
    } else {
        die("Error: " . mysqli_error($conn));
    }
} else {
    die("Error: Missing delete ID or page number!");
}
?>