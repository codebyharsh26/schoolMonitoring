<?php
include_once 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['updateid'])) {
        $teacher_id = $_POST['updateid'];
        $page = isset($_POST['page']) ? $_POST['page'] : 1;

        // Retrieve other form data
        $teacher_name = $_POST['teacher_name'];
        $teacher_phone = $_POST['teacher_phone'];
        $teacher_email = $_POST['teacher_email'];
        $teacher_salary = $_POST['teacher_salary'];
        $teacher_dob = $_POST['teacher_dob'];
        $teacher_address = $_POST['teacher_address'];
        $qualification = $_POST['qualification'];
        $subject = $_POST['subject'];
        $std = $_POST['std'];
        $gender = $_POST['gender'];
        $school_name = $_POST['school_name'];
        $school_no = $_POST['school_no'];

        // SQL query to update the record
        $update_query = "UPDATE teacher_1 SET 
            teacher_name='$teacher_name', 
            teacher_phone='$teacher_phone', 
            teacher_email='$teacher_email', 
            teacher_salary='$teacher_salary', 
            teacher_dob='$teacher_dob', 
            teacher_address='$teacher_address', 
            qualification='$qualification', 
            subject='$subject', 
            std='$std', 
            gender='$gender', 
            school_name='$school_name', 
            school_no='$school_no' 
            WHERE teacher_id='$teacher_id'";

        if (mysqli_query($conn, $update_query)) {
            header("Location: teacher.php?page=" . $page);
            exit();
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    } else {
        echo "Error: Update ID missing!";
    }
}
?>