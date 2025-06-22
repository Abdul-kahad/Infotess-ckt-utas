<?php
include('connectiondb.php');
$message = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $student_id = $_POST['student_id'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if ($password !== $cpassword) {
        $message = "Passwords do not match.";
    } else {
        // Check if student ID exists in students_db

        $student_id = mysqli_real_escape_string($students_conn, $student_id);
        $query = "SELECT `STUDENT ID` FROM `students` WHERE `STUDENT ID` = '$student_id'";
        $result = mysqli_query($students_conn, $query);

        if (mysqli_num_rows($result) === 1) {
            // Register in users_db
            

            $password_hash = password_hash($password, PASSWORD_BCRYPT);
            $student_id = mysqli_real_escape_string($users_conn, $student_id);
            $query2 = "INSERT INTO `users` (`id`, `password`) VALUES ('$student_id', '$password_hash')";
            if (mysqli_query($users_conn, $query2)) {
                $message = "Registration successful! <a href='login.php'>Login</a>";
            } else {
                $message = "Student ID already registered.";
            }
            mysqli_close($users_conn);
        } else {
            $message = "Invalid Student ID.";
        }
        mysqli_close($students_conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INFOTESS</title>
    <link rel="stylesheet" href="login.css">
    <link rel="icon" type="image/png" href="./Images/favicon.png"/>
</head>
<body class="login-body">
    <header>
       
    </header>

    <main>
        <div class="container signup-container" >
           <div class="signup-card">
                <form action="" method="POST">
                    <h1 style="text-align: center; padding-bottom: 10px;">Register</h1>
                    <hr>
                    <?php if ($message) echo "<p class='message'>$message</p>"; ?>
                    <label ></label>
                    <div>
                         <span>&#128100;</span>
                        <input type="number" name="student_id" placeholder="Enter Your Student ID" />
                    </div>
                    <div>
                         <span>&#128274;</span>
                        <input type="password" name="password" placeholder="Create Password"/>
                    </div>
                    <div>
                        <span>&#128274;</span>
                        <input type="password" name="cpassword" placeholder="Confirm Password"/>
                        
                    </div>
                    <button class="create-btn" name="submit">Create Account</button>
                </form>

                <small>Allready has an account? <a href="./login.php">Log in</a></small>
           </div>
        </div>
    </main>

    <footer>

    </footer>
</body>
</html>