<?php
include_once 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['updateid'])) {
        $id = $_POST['updateid'];
        $page = isset($_POST['page']) ? $_POST['page'] : 1;

        // Retrieve other form data
        $full_name = $_POST['full_name'];
        $roll_number = $_POST['roll_number'];
        $date_of_birth = $_POST['date_of_birth'];
        $gender = $_POST['gender'];
        $blood_group = $_POST['blood_group'];
        $residential_address = $_POST['residential_address'];
        $father_name = $_POST['father_name'];
        $father_phone_number = $_POST['father_phone_number'];
        $mother_name = $_POST['mother_name'];
        $mother_phone_number = $_POST['mother_phone_number'];
        $standard = $_POST['standard'];
        $academic_year = $_POST['academic_year'];
        $school_name = $_POST['school_name'];
        $school_number = $_POST['school_number'];

        // SQL query to update the record
        $update_query = "UPDATE student_1 SET 
            full_name='$full_name',  
            roll_number='$roll_number', 
            date_of_birth='$date_of_birth', 
            gender='$gender', 
            blood_group='$blood_group',
            residential_address='$residential_address',
            father_name='$father_name',
            father_phone_number='$father_phone_number',
            mother_name='$mother_name',
            mother_phone_number='$mother_phone_number',
            standard='$standard',
            academic_year='$academic_year',
            school_name='$school_name',
            school_number='$school_number'
            WHERE id='$id'";

        if (mysqli_query($conn, $update_query)) {
            header("Location: student.php?page=" . $page);
            exit();
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    } else {
        echo "Error: Update ID missing!";
    }
}
?>