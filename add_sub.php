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
                                          let x = document.forms["add_subject"]["sub1"].value;
                                          if (x == "") {
                                                        alert("subject 1 must be filled out");
                                                        return false;
                                          }
                                          let y = document.forms["add_subject"]["sub2"].value;
                                          if (y == "") {
                                                        alert("subject 2 must be filled out");
                                                        return false;
                                          }
                                          let z = document.forms["add_subject"]["sub3"].value;
                                          if (z == "") {
                                                        alert("subject 3 must be filled out");
                                                        return false;
                                          }
                                          let q = document.forms["add_subject"]["sub4"].value;
                                          if (q == "") {
                                                        alert("subject 4 must be filled out");
                                                        return false;
                                          }
                                          let k = document.forms["add_subject"]["sub5"].value;
                                          if (k == "") {
                                                        alert("subject 5 must be filled out");
                                                        return false;
                                          }
                                          let r = document.forms["add_subject"]["sub6"].value;
                                          if (r == "") {
                                                        alert("subject 6 must be filled out");
                                                        return false;
                                          }
                                          let t = document.forms["add_subject"]["sub7"].value;
                                          if (t == "") {
                                                        alert("subject 7 must be filled out");
                                                        return false;
                                          }
                            }
              </script>


              <form action="add_sublogic.php" name="add_subject" method="GET" onsubmit="return validform()">

                            <ul class="list-unstyled">
                                          <li>
                                                        <a href="myprofile.php"> <i class="icon-home"></i>profile </a>
                                          </li>
                                          <li class="">
                                                        <a href="dashboard.php"> <i class="icon-grid"></i>dashboard </a>
                                          </li>
                                          <li>
                                                        <a href="add_course.php"> <i class="fa fa-bar-chart"></i> Add Course </a>
                                          </li>
                                          <li class="active">
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
                            <input type="text" placeholder="subject 1" name="sub1">
                            <input type="text" placeholder="subject 2" name="sub2">
                            <input type="text" placeholder="subject 3" name="sub3">
                            <input type="text" placeholder="subject 4" name="sub4">
                            <input type="text" placeholder="subject 5" name="sub5">
                            <input type="text" placeholder="subject 6" name="sub6">
                            <input type="text" placeholder="subject 7" name="sub7">
                            <input type="submit" value="add subjects" name="add_sub">
              </form>
</body>

</html>