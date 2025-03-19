<?php
include_once 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['updateid'])) {
        $id = $_POST['updateid'];
        $page = isset($_POST['page']) ? $_POST['page'] : 1;

        // Retrieve other form data
        $full_name = $_POST['full_name'];
        $gender = $_POST['gender'];
        $date_of_birth = $_POST['date_of_birth'];
        $blood_group = $_POST['blood_group'];
        $phone_number = $_POST['phone_number'];
        $emergency_contact_number = $_POST['emergency_contact_number'];
        $email_address = $_POST['email_address'];
        $residential_address = $_POST['residential_address'];
        $subject_name = $_POST['subject_name'];
        $standard = $_POST['standard'];
        $salary_monthly = $_POST['salary_monthly'];
        $qualification = $_POST['qualification'];
        $first_language = $_POST['first_language'];
        $language_known = $_POST['language_known'];
        $school_name = $_POST['school_name'];
        $school_number = $_POST['school_number'];

        // SQL query to update the record
        $update_query = "UPDATE teacher_1 SET 
            full_name='$full_name',
            gender='$gender', 
            date_of_birth='$date_of_birth', 
            blood_group='$blood_group',
            phone_number='$phone_number',
            emergency_contact_number='$emergency_contact_number',
            email_address='$email_address',
            residential_address='$residential_address',
            subject_name='$subject_name',
            standard='$standard',
            salary_monthly='$salary_monthly',
            qualification='$qualification',
            first_language='$first_language',
            language_known='$language_known',
            school_name='$school_name',
            school_number='$school_number'
            WHERE id='$id'";

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