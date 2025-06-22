<?php
include('connectiondb.php');

$student_id = $_SESSION['student_id'];

if(isset($_POST['submit'])){
    if(isset($_FILES['image']) && $_FILES['image']['error'] == 0){
        $tempname = $_FILES['image']['tmp_name'];
        $file_type = mime_content_type($tempname);
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];

        if(in_array($file_type, $allowed_types)){
            $image_data = file_get_contents($tempname);

            // Delete previous image for this student
            $del_sql = "DELETE FROM profiles WHERE student_id = '".mysqli_real_escape_string($con, $student_id)."'";
            mysqli_query($con, $del_sql);

            // Insert new image data
            $image_data_escaped = mysqli_real_escape_string($con, $image_data);
            $file_type_escaped = mysqli_real_escape_string($con, $file_type);
            $student_id_escaped = mysqli_real_escape_string($con, $student_id);

            $insert_sql = "INSERT INTO profiles (student_id, image_data, image_type) VALUES ('$student_id_escaped', '$image_data_escaped', '$file_type_escaped')";
            if(mysqli_query($con, $insert_sql)){
                echo "<script>alert('File Uploaded successfully');</script>";
            } else {
                echo "<script>alert('Error uploading file: ".mysqli_error($con)."');</script>";
            }
        } else {
            echo "<script>alert('Invalid file type. Only JPG, PNG, GIF allowed.');</script>";
        }
    } else {
        echo "<script>alert('No file uploaded or upload error.');</script>";
    }
}
?>
