<?php

$selectquery = $row = $results = "";
include('dbconnection.php');
require_once __DIR__ . '/vendor/autoload.php';


session_start();
if (isset($_SESSION['login'])) {



  $selectquery = "SELECT *  FROM `users` where email='" . $_SESSION['login'] . "' ";
  $results = mysqli_query($con, $selectquery);
  if (mysqli_num_rows($results) > 0) {
  } else {
    echo "no details foiund";
  }






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

    <ul class="list-unstyled">
      <li class="active">
        <a href="myprofile.php"> <i class="icon-home"></i>profile </a>
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
        <a href="forget-passwd.php"> <i class="bi bi-arrow-clockwise"></i>Forget Password </a>
      </li>
      <li>

        <a href="login.php"> <i class="icon-logout"></i>Login page </a>
      </li>
      <li>

        <a href="logout.php"> <i class="icon-logout"></i>logout page </a>
      </li>
    </ul>
    <form action="" method="POST" name="profiledata">

      <table class="table table-striped table-lg">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th>email</th>
            <th>Contact No</th>
            <th>date of Birth</th>
            <th>course</th>
            <th>subject1</th>
            <th>subject2</th>
            <th>subject3</th>
            <th>subject4</th>
            <th>subject5</th>
            <th>subject6</th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($row = mysqli_fetch_assoc($results)) { ?>



            <tr>
              <th scope="row">1</th>
              <td><?php echo $row['fname'] ?></td>
              <td><?php echo $row['lname'] ?></td>
              <td><?php echo $row['username'] ?></td>
              <td><?php echo $row['email'] ?></td>
              <td><?php echo $row['contact_no'] ?></td>
              <td><?php echo $row['dob'] ?></td>
              <td><?php echo $row['course'] ?></td>
              <td><?php echo $row['sub2'] ?></td>
              <td><?php echo $row['sub2'] ?></td>
              <td><?php echo $row['sub3'] ?></td>
              <td><?php echo $row['sub4'] ?></td>
              <td><?php echo $row['sub5'] ?></td>
              <td><?php echo $row['sub6'] ?></td>
            </tr>
            <tr>

              <input type="submit" name="pdf" value="download info">

          <?php
            $fname = $row['fname'];
            $lname = $row['lname'];
            $username = $row['username'];
            $email = $row['email'];
            $contact = $row['contact_no'];
            $dob = $row['dob'];
            $course = $row['course'];
            $sub1 = $row['sub1'];
            $sub2 = $row['sub2'];
            $sub3 = $row['sub3'];
            $sub4 = $row['sub4'];
            $sub5 = $row['sub5'];
            $sub6 = $row['sub6'];
            $sub7 = $row['sub7'];

            if (isset($_POST['pdf'])) {
              $mpdf = new \Mpdf\Mpdf();
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
";
$mpdf->AddPage();
$mpdf->WriteHTML('sjgndfhbgsifnbsdlogvjnsdlscdsanfcsadgf');
              $filename = md5($fname);
              $mpdf->WriteHTML($body);
              $mpdf->Output('dd.pdf', 'D');
            }
          }
        } else {
          header('location:logout.php');
        }





          ?>


    </form>


    </tbody>
    </table>

  </body>

  </html>
