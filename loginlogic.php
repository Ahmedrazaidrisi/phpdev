<?php
include('login.php');
include('dbconnection.php');
session_start();

if (isset($_REQUEST['login'])) {


              $username = $_REQUEST['username'];

              $password = $_REQUEST['password'];


              $sql = mysqli_query($con, "SELECT id FROM `users` where email='$username' and passwd='$password'");
              $num = mysqli_fetch_array($sql);
              if ($num > 0) {
                            $_SESSION['login'] = $username;
                            print_r($_SESSION);
                            header('location:dashboard.php');
              } else {
                            echo "<script>alert(invalid details');</script>";
              }
}
