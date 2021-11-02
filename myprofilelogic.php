<?php
include('dbconnection.php');
session_start();


require_once __DIR__ . '/vendor/autoload.php';

if (isset($_SESSION['login'])) {

              if (isset($_REQUEST['update'])) {
                            $fname = $_REQUEST['fname'];
                            $lname = $_REQUEST['lname'];
                            $email = $_REQUEST['email'];
                            $dob = $_REQUEST['dob'];
                            $contact = $_REQUEST['contactno'];
                            $photo = $_REQUEST['profilepic']; //array


                            $target_dir = "photos/";
                            $target_file = $target_dir . basename($_FILES["profilepic"]["name"]);
                            $uploadOk = 1;
                            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                            // Check if image file is a actual image or fake image

                            $check = getimagesize($_FILES["profilepic"]["tmp_name"]);
                            if ($check !== false) {
                                          echo "File is an image - " . $check["mime"] . ".";
                                          $uploadOk = 1;
                            } else {
                                          echo "<script>alert('File is not an image.');</script>";
                                          $uploadOk = 0;
                            }

                            // Check file size
                            if (
                                          $_FILES["profilepic"]["size"] > 500000
                            ) {
                                          echo "<script>alert('Sorry, your file is too large.');</script>";
                                          $uploadOk = 0;
                            }

                            // Allow certain file formats
                            if (
                                          $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                            ) {
                                          echo "<script>alert('Sorry, only JPG, JPEG, PNG files are allowed.');</script>";
                                          $uploadOk = 0;
                            }
                            // Check if $uploadOk is set to 0 by an error
                            if ($uploadOk == 0) {
                                          echo "<script>alert('Sorry, your file was not uploaded.');</script>"; // if everything is ok, try to upload file
                            } else {
                                          if (move_uploaded_file($_FILES["profilepic"]["tmp_name"], $target_file)) {
                                                        echo "The file " . htmlspecialchars(basename($_FILES["profilepic"]["name"])) . " has been uploaded.";
                                          } else {
                                                        echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
                                          }
                                          //othet method to store the file in server
                                          //move_uploaded_file($_FILES["photo"]["tmp_name"],"studentphoto/".$_FILES["photo"]["name"]);
                            }
                            $sql = mysqli_query($con, "UPDATE `users` set fname='$fname', lname='$lname', email='$email', dob='$dob', contact_no='$contact',photos='$target_file' where email='" . $_SESSION['login'] . "'");
                            //mysqli_affected_rows()
                            if ($sql > 0) {
                                          echo "<script>alert('profile updated successfully');</script>";
                            } else {
                                          echo "<script>alert('errory');</script>";
                            }
              }

              if (isset($_REQUEST['dinfo'])) {

                            $sql1 = mysqli_query($con, "SELECT * FROM `users` where email='" . $_SESSION['login'] . "'");
                            while ($rows = mysqli_fetch_Array($sql1)) {

                                          $fname = $rows['fname'];
                                          $lname = $rows['lname'];
                                          $username = $rows['username'];
                                          $email = $rows['email'];
                                          $contact = $rows['contact_no'];
                                          $dob = $rows['dob'];
                                          $course = $rows['course'];
                                          $sub1 = $rows['sub1'];
                                          $sub2 = $rows['sub2'];
                                          $sub3 = $rows['sub3'];
                                          $sub4 = $rows['sub4'];
                                          $sub5 = $rows['sub5'];
                                          $sub6 = $rows['sub6'];
                                          $sub7 = $rows['sub7'];
                                          $profile_pic = $row['photos'];

                                          $body = "<h1>your details</h1>
                                          <strong>first name:</strong>$fname <br>
                                          <strong>last name:</strong>$lname <br>
                                          <strong>username:</strong>$username <br>
                                          <strong>email:</strong>$email <br>
                                          <strong>contact-no:</strong>$contact <br>
                                          <strong>date of birth:</strong>$dob <br>
                                          <strong>course </strong>$course <br>
                                          <h2>your subjects</h2> <br>
                                          <strong>subject 1:</strong>$sub1 <br>
                                          <strong>subject 2:</strong>$sub2 <br>
                                          <strong>subject 3:</strong>$sub3 <br>
                                          <strong>subject 4:</strong>$sub4 <br>
                                          <strong>subject 5:</strong>$sub5 <br>
                                          <strong>subject 6:</strong>$sub6 <br>
                                          <strong>subject 7:</strong>$sub7 <br>
                                          <strong>profilepic:</strong>$profile_pic "; //<img src=>

                                          $mpdf = new \Mpdf\Mpdf(); // outsoide of while
                                          $mpdf->WriteHTML($body);
                                          $mpdf->Output('details.pdf', 'D');
                            } // output
              }
} else {
              header('location:logout.php');
}
