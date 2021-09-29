<?php
include('dbconnection.php');
session_start();

if (strlen($_SESSION['login']) == 0) {
              header('location:login.php');
} else {


              if (isset($_GET['add_sub'])) {
                            $sub1 = $_GET['sub1'];
                            $sub2 = $_GET['sub2'];
                            $sub3 = $_GET['sub3'];
                            $sub4 = $_GET['sub4'];
                            $sub5 = $_GET['sub5'];
                            $sub6 = $_GET['sub6'];
                            $sub7 = $_GET['sub7'];

                            $sql = mysqli_query($con, "UPDATE `users` set sub1='$sub1',sub2='$sub2',sub3='$sub3',sub4='$sub4',sub5='$sub5',sub6='$sub6',sub7='$sub7' where email='" . $_SESSION['login'] . "'");

                            if ($sql) {
                                          echo "<script>alert('subjects are added succcessfully');</script>";
                            } else {
                                          echo
                                          "<script>alert('some problem occured');</script>";
                            }
              } else {
                            header('location:logout.php');
              }
}
