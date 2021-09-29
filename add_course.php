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
                                          let x = document.forms["addcourse"]["add_course"].value;
                                          if (x == "") {
                                                        alert("please add course");
                                                        return false;
                                          }
                            }
              </script>
              <form action="add_courselogic.php" name="addcourse" onsubmit="return validform()" method="POST">

                            <ul class="list-unstyled">
                                          <li>
                                                        <a href="myprofile.php"> <i class="icon-home"></i>profile </a>
                                          </li>
                                          <li class="">
                                                        <a href="dashboard.php"> <i class="icon-grid"></i>Dashboard </a>
                                          </li>
                                          <li class="active">
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
                            <input type="text " name="add_course" placeholder="add course">
                            <input type="submit" value="add course">
              </form>
</body>

</html>