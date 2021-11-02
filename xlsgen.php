<?php



if (isset($_POST['exxls'])) {

              //ecport to excel sheet $selectquery = "SELECT *  FROM `users`  ";


              $results = mysqli_query($con, $selectquery);
              if (mysqli_num_rows($results) > 0) {
              } else {
                            echo "no details foiund";
              }


              while ($row = mysqli_fetch_assoc($results)) {
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
                            $body2 = "
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
            
        
        ";
              }
              echo $body;

              header("Content-type: application/vnd.ms-excel; name='excel'");
              header("Content-Disposition: attachment; filename=$fname-excel.xls");
              header("Pragma: no-cache");
              header("Expires: 0");
}
