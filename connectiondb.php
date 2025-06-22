<?php

      $DB_HOST = 'localhost';
      $DB_USER = 'root';
      $DB_PASS = '';
      $DB_NAME_LOGIN = 'login_db';
      $DB_NAME_EMAILS = 'emails';
      $DB_NAME_DB1 = 'db1';


      $con = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME_LOGIN);
      $news_conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME_EMAILS);
      $users_conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME_LOGIN);
      $students_conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME_DB1);

      if ($con === false || $news_conn=== false || $users_conn === false || $students_conn === false) {
         die("Connection Error: " . mysqli_connect_error());
      }



   //   $con = mysqli_connect('localhost', 'root', '','login_db');

   //   $news_conn = mysqli_connect('localhost', 'root', '', 'emails');

   //    $users_conn = mysqli_connect('localhost', 'root', '', 'login_db');

   //    $students_conn = mysqli_connect('localhost', 'root', '', 'db1');


   //   if($con==false){
   //      die("Connection Error:". mysqli_connect_erro());
   //   }
?>