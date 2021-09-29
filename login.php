<!DOCTYPE html>
<html lang="en">

<head>
              <meta charset="UTF-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <title>login PAge</title>
</head>

<body>

              <script text="text/javascript">
                            function validform() {
                                          let x = document.forms["login_form"]["username"].value;
                                          if (x == "") {
                                                        alert("userName must be filled out");
                                                        return false;
                                          }



                                          let y = document.forms["login_form"]["password]"].value;
                                          if (y == "") {
                                                        alert("password must be filled out");
                                                        return false;
                                          }



                            }
              </script>
              <form action="loginlogic.php" method="post" name="login_form" onsubmit="return validform()">
                            <input type="text" name="username" placeholder="enter username or email">
                            <input type="password" name="password" placeholder="password">
                            <input type="submit" name="login" value="login">
              </form><br>
              <p>dont have an account <a href="register.php">Register here</a></p>
</body>

</html>