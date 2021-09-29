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


                            if (isset($_REQUEST['dinfo'])) {
                                          $mpdf = new \Mpdf\Mpdf();
                                          $body = "<h1>helllo there</h1>";
                                          $mpdf->WriteHTML($body);
                                          $mpdf->Output('details.pdf', 'D');
                            }


                            $sql = mysqli_query($con, "UPDATE `users` set fname='$fname', lname='$lname',email='$email',dob='$dob',contact_no='$contact' where email='" . $_SESSION['login'] . "'");
                            $num = mysqli_fetch_array($sql);
                            if ($num) {
                                          echo  "<script>alert('profile updated successfully');</script>";
                            } else {
                                          //header('location:logout.php');
                            }
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
              }
} else {
              header('location:logout.php');
}
