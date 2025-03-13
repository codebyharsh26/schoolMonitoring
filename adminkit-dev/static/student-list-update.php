<?php
include_once 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['updateid'])) {
        $id = $_POST['updateid'];
        $page = isset($_POST['page']) ? $_POST['page'] : 1;

        // Retrieve other form data
        $full_name = $_POST['full_name'];
        $date_of_birth = $_POST['date_of_birth'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $standard = $_POST['standard'];
        $roll = $_POST['roll'];
        $mother_name = $_POST['mother_name'];
        $mother_phone_number = $_POST['mother_phone_number'];
        $father_name = $_POST['father_name'];
        $father_phone_number = $_POST['father_phone_number'];
        $blood_group = $_POST['blood_group'];
        $school_name = $_POST['school_name'];
        $school_no = $_POST['school_no'];

        // Validate input (Optional but recommended)
        if (empty($full_name) || empty($date_of_birth) || empty($address)) {
            die("Error: Some fields are empty!");
        }

        // SQL query to update the record
        $update_query = "UPDATE student_1 SET 
            full_name='$full_name', 
            date_of_birth='$date_of_birth', 
            address='$address', 
            gender='$gender', 
            standard='$standard', 
            roll='$roll', 
            mother_name='$mother_name', 
            mother_phone_number='$mother_phone_number', 
            father_name='$father_name', 
            father_phone_number='$father_phone_number', 
            blood_group='$blood_group', 
            school_name='$school_name', 
            school_no='$school_no' 
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