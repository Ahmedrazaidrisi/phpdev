<?php
include('dbconnection.php');
session_start();
if (isset($_SESSION['login'])) {
              $add_course = $_POST['add_course'];
              $sql = mysqli_query($con, "UPDATE `users` set `course`='$add_course' where `email`='" . $_SESSION['login'] . "' ");
              $num = mysqli_num_rows($sql);
              if ($num > 0) {
                            echo "<script>alert('you r already in a course');</script>";
              } else {
                            echo "<script>alert('course added successfully');</script>";
                            echo print_r($_SESSION);
              }
} else {
              echo "<script>alert('please login');</script>";
              header('location:logout.php');
}
