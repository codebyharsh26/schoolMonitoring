<?php
include_once 'connection.php';

if (isset($_GET['deleteid']) && isset($_GET['page'])) {
    $id = $_GET['deleteid'];
    $page = max(1, (int)$_GET['page']); // Ensure page is at least 1
    $limit = 20; // Must match the pagination limit

    // Calculate OFFSET for the current page
    $offset = max(0, ($page - 1) * $limit);

    // Check if the record being deleted is the first one on the page
    $first_record_query = "SELECT id FROM student_1 ORDER BY id LIMIT 1 OFFSET $offset";
    $first_record_result = mysqli_query($conn, $first_record_query);

    if ($first_record_result && mysqli_num_rows($first_record_result) > 0) {
        $first_record_id = mysqli_fetch_assoc($first_record_result)['id'];
    } else {
        $first_record_id = null;
    }

    // Perform the deletion
    $delete = "DELETE FROM student_1 WHERE id=$id";
    if (mysqli_query($conn, $delete)) {
        // If the deleted record was the first record on the page, redirect to page 1
        if ($id == $first_record_id) {
            header("Location: student.php?page=1");
        } else {
            header("Location: student.php?page=$page");
        }
        exit();
    } else {
        die("Error: " . mysqli_error($conn));
    }
} else {
    die("Error: Missing delete ID or page number!");
}
?>