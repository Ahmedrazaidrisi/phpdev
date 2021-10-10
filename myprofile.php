<?php

include('dbconnection.php');
session_start();
require_once __DIR__ . '/vendor/autoload.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
              <meta charset="UTF-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <title>Document</title>
</head>

<body>
  <script>
  function validform() {
                                          const x = document.forms.profile-form.fname.value;
                                          const x = document.profile - form.fname.value;
                                          if (x = "") {
                                                        alert('firstname must be filled');
                                                        return false;
                                          }
                                          const y = document.forms.profile-form.lname.value;
                                          if (y = "") {
                                                        alert('last name must be filled');
                                                        return false;
                                          }
                                          const z = document.forms.profile-form.email.value;
                                          if (z = "") {
                                                        alert('Email must be filled');
                                                        return false;
                                          }
                                          const q = document.forms.profile-form.dob.value;
                                          if (q = "") {
                                                        alert('date of birth must be filled');
                                                        return false;
                                          }
                                          const e = document.forms.profile-form.contactno.value;
                                          if (e = "") {
                                                        alert('contact number must be filled');
                                                        return false;
                                          }
                            }
    </script>

              <form action="myprofilelogic.php" method="post" name=profile-form onsubmit="" enctype="multipart/form-data">
                            <ul class="list-unstyled">
                                          <li>
                                                        <a href="myprofile.php.html"> <i class="icon-home"></i>profile </a>
                                          </li>
                                          <li class="">
                                                        <a href="dashboard.php"> <i class="icon-grid"></i>dashboard </a>
                                          </li>
                                          <li>
                                                        <a href="add_course.php"> <i class="fa fa-bar-chart"></i> Add Course </a>
                                          </li>
                                          <li>
                                                        <a href="add_sub.php"> <i class="icon-padnote"></i>Add subjects </a>
                                          </li>
                                          <li>
                                                        <a href="changepasswd.php"> <i class="bi bi-arrow-clockwise"></i>Forget Password </a>
                                          </li>
                                          <li>

                                                        <a href="login.php"> <i class="icon-logout"></i>Login page </a>
                                          </li>
                                          <li>

                                                        <a href="logout.php"> <i class="icon-logout"></i>logout page </a>
                                          </li>
                            </ul>


                            <?php
                            $sql = mysqli_query($con, "SELECT * from `users` where email='" . $_SESSION['login'] . "'");
                            while ($num = mysqli_fetch_array($sql)) { ?>





                                          <input type="file" name="profilepic"><br>
                                          <input type="text" name="username" value="<?php echo htmlentities($num['username']); ?>" readonly><br>
                                          <input type="text" name="fname" value="<?php echo htmlentities($num['fname']); ?>"><br>
                                          <input type="text" name="lname" value="<?php echo htmlentities($num['lname']); ?>"><br>
                                          <input type="text" name="email" value="<?php echo htmlentities($num['email']); ?>"> <br>
                                          <input type="date " name="dob" value="<?php echo htmlentities($num['dob']) ?>"><br>
                                          <input type="text" name="contactno" value="<?php echo htmlentities($num['contact_no']) ?>"><br>
                                          <input type="course" name="course" value="<?php echo htmlentities($num['course']) ?>" readonly><br>
                                          <input type="text" name="sub1" value="<?php echo htmlentities($num['sub1']); ?>" readonly><br>
                                          <input type="text" name="sub3" value="<?php echo htmlentities($num['sub2']); ?>" readonly><br>
                                          <input type="text" name="sub4" value="<?php echo htmlentities($num['sub3']); ?>" readonly><br>
                                          <input type="text" name="sub5" value="<?php echo htmlentities($num['sub4']); ?>" readonly><br>
                                          <input type="text" name="sub6" value="<?php echo htmlentities($num['sub5']); ?>" readonly><br>
                                          <input type="text" name="sub2" value="<?php echo htmlentities($num['sub6']); ?>" readonly><br>
                                          <input type="text" name="sub7" value="<?php echo htmlentities($num['sub7']); ?>" readonly><br>



                            <?php } ?>

                            <input type="submit" value="Update" name="update"><br>
                            <input type="submit" name="dinfo" value="download info"><br>






              </form>
</body>

</html>
