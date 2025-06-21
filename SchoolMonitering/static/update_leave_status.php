<?php
include_once "connection.php"; // Adjust path if necessary

if (isset($_GET['id']) && isset($_GET['status'])) {
    $id = $_GET['id'];
    $status = $_GET['status'];

    $query = "UPDATE teacher_leave_application SET status = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("si", $status, $id);

    if ($stmt->execute()) {
        echo "<script>alert('Leave status updated!'); window.location='tr-leave-application-display.php';</script>";
    } else {
        echo "<script>alert('Error updating leave status');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
