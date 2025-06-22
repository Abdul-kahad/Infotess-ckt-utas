<?php
include('connectiondb.php');
session_start();

$student_id = $_SESSION['student_id'];
$student_id_escaped = mysqli_real_escape_string($con, $student_id);

$query = "SELECT image_data, image_type FROM profiles WHERE student_id = '$student_id_escaped' LIMIT 1";
$result = mysqli_query($con, $query);

if($result && mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
    $image_data = $row['image_data'];
    $image_type = $row['image_type'];

    header("Content-Type: $image_type");
    echo $image_data;
} else {
    header("Content-Type: image/png");
    readfile(__DIR__ . '/Images/default.png');
}
?>
