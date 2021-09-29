<?php
include('dbconnection.php');

session_start();


if (isset($_POST['submit'])) {
            $username=$_POST["username"];
            $fname=$_POST["fname"];
            $lname=$_POST["lname"];
            $email=$_POST["email"];
            $contactno=$_POST["contactno"];
            $dob=$_POST["dob"];
            $password=$_POST["password"];
            $cpassword=$_POST["cpassword"];

            



$sql=mysqli_query($con,"SELECT * FROM `users` where email='$email'");
$num=mysqli_num_rows($sql);
if ($num>0) {
             echo "<script>alert('email already exist try with other email');</script>";
}else{
              $msg=mysqli_query($con,"INSERT INTO `users`(`username`,`fname`,`lname`,`email`,`contact_no`,`dob`,`passwd`,`cpasswd`) values('$username','$fname','$lname','$email','$contactno','$dob','$password','$cpassword')");
             
                           echo "<script>alert('registered successfully');</script>";
                           header('location:login.php');
              
}
}

?>