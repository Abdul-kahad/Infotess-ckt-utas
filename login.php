<?php
include('connectiondb.php');
session_start();
$message = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $student_id = $_POST['student_id'];
    $password = $_POST['password'];

   

    $student_id = mysqli_real_escape_string($users_conn, $student_id);
    $query = "SELECT `id`,  `password` FROM `users` WHERE `id` = '$student_id'";
    $result = mysqli_query($users_conn, $query);

    if (mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password, $user['password'])) {
            $_SESSION['student_id'] = $user['id'];
            header("Location: student.php");
            exit();
        } else {
            $message = "Invalid student ID or password.";
        }
    } else {
        $message = "Invalid student ID or password.";
    }
    mysqli_close($users_conn);
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
                    <h1 style="text-align: center; padding-bottom: 10px;">Log In</h1>
                    <hr>
                     <?php if ($message) echo "<p class='message'>$message</p>"; ?>
                    <div>
                        <span>&#128100;</span>
                        <input type="number" placeholder="Enter Your Student ID" name="student_id">
                    </div>
                    <div>
                        <span >&#128274;</span>
                        <input type="password" placeholder="Enter Your Password" name="password">
                    </div>
                    <button class="create-btn" name="submit">Login</button>
                </form>
                <small>Forgot Password?<a href=""></a></small>
                <small>Don't have an account? <a href="./signup.php">Register now</a></small>
           </div>
        </div>
    </main>

    <footer>

    </footer>
</body>
</html>