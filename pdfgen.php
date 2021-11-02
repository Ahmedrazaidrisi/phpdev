<?php


require_once __DIR__ . '/vendor/autoload.php';
include('dbconnection.php');

if (isset($_POST['pdf'])) {



              $selectquery = "SELECT *  FROM `users`  ";


              $results = mysqli_query($con, $selectquery);
              if (mysqli_num_rows($results) > 0) {
              } else {
                            echo "no details foiund";
              }



              $mpdf = new \Mpdf\Mpdf();

              while ($row = $results->fetch_assoc()) {


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
                            $body2 = "
              <h1> your data in tabular format</h1>

<style>
table, th, td {
  border:1px solid black;
}
</style>
 <table >
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
          <tr>
           
              <th> 1</th>
              <td> $fname </td>
              <td> $lname </td>
              <td> $username </td>
              <td> $email </td>
              <td> $contact </td>
              <td> $dob </td>
              <td> $course </td>
              <td> $sub2 </td>
              <td> $sub2 </td>
              <td> $sub3 </td>
              <td> $sub4 </td>
              <td> $sub5 </td>
              <td> $sub6 </td>
            </tr>
            

        </table>
";
              }

              $fileName = " $fname-ht.pdf";
              $mpdf->WriteHTML($body);
              $mpdf->AddPage();
              $mpdf->WriteHTML($body2);
              $mpdf->Output($fileName, "D");
}
