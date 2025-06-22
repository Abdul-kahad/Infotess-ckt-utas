<?php
include('connectiondb.php');
session_start();

include('upload.php');
if (!isset($_SESSION['student_id'])) {
    header("Location: login.php");
    exit();
}
$student_id = $_SESSION['student_id'];

$student_id = mysqli_real_escape_string($students_conn, $student_id);
$query = "SELECT * FROM `students` WHERE `STUDENT ID` = '$student_id'";
$result = mysqli_query($students_conn, $query);
$student = mysqli_fetch_assoc($result);
mysqli_close($students_conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INFOTESS</title>
    <link rel="stylesheet" href="student.css">
    <link rel="icon" type="image/png" href="./Images/favicon.png"/>
</head>
<body>

<div class="dsbrd">
    <div class="student-sidenav">

    <div class="infotess">
        <img src="./Images/favicon.png" alt="infotess-logo" >
        <h2>Hello <?= htmlspecialchars($student['FIRSTNAME']) ?>!</h2>
        <small>INFOTESS Member</small>
    </div>

    <ul>
        <li  class="sidenav-links"><a href="#">
          <form enctype="multipart/form-data" method="POST" class="upload-form">
  <label class="custom-file-upload">
    Choose File
    <input type="file" name="image" required>
  </label>
  <button type="submit" name="submit">Change Profile</button>
</form>
        </a></li>
        <li  class="sidenav-links"><a href="/files/INFOTESS CONSTITUTION FINAL" download>Department Constitution</a></li>
        <li  class="sidenav-links"><a href="index.php">Home Page</a></li>
        <li  class="sidenav-links"><a href="https://mis.cktutas.edu.gh/">Studnet Portal</a></li>
        <li  class="sidenav-links"><a href="#">Course Materials</a></li>
    </ul>
     <form action="logout.php" method="POST">
         <button class="login-btn" type="submit">Logout</button>
    </form>
    </div>

    <div class="dashboardmain">
    <h1 class="st">STUDENT DASHBORD</h1>
   
        <div class="stud-info">
            <img src="show_image.php" alt="Profile Image" style="max-width:200px; border-radius: 10px;" class="imgshift">
            <ul>
                <li><b>NAME:</b> <?= htmlspecialchars($student['LASTNAME'].' '. $student['FIRSTNAME'].' '. $student['MIDDLENAME']) ?></li>
                <hr>
                <li><b>ID:</b> <?= htmlspecialchars($student['STUDENT ID']) ?></li>
                <hr>
                <li><b>LEVEL:</b> <?= htmlspecialchars($student['LEVEL']) ?></li>
                <hr>
                <li><b>PROGRAMME:</b> <?= htmlspecialchars($student['PROGRAMME']) ?></li>
                <hr>
                <li><b>SCHOOL:</b> <?= htmlspecialchars($student['SCHOOL']) ?></li>
            </ul>
        </div>
     


        <div class="updts">
            <div class="recentActivities">
                <h4>Recent Activities</h4>
                <hr>
                <ul>
                    <li>Registered for "Website Development Competition"</li>
                    <hr>
                    <li>Attended "INFOTESS Welcome Event"</li>
                    <hr>
                    <li>Submitted a question in Q&A</li>
                    <hr>
                    <li>Downloaded "Course Materials for Level 200"</li>
                </ul>
            </div>

            <div class="announcement">
                <h4>Announcements</h4>
                <hr>
                <div class="annc1">New event: Football Match this Friday!</div>
                <div class="annc2">Eid Mubarak! Enjoy the celebrations.</div>
            </div>
        </div>
    </div>

</div>

</body>

    <footer>

    </footer>
</html>