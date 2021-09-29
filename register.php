<!DOCTYPE html>
<html lang="en">

<head>
              <meta charset="UTF-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <title>Register Form</title>
</head>

<body>
              <script type="text/javascript">
                            function validform() {

                                          let x = document.forms["register_form"]["username"].value;
                                          if (x == "") {
                                                        alert("userName must be filled out");
                                                        return false;
                                          }
                                          let y = document.forms["register_form"]["fname"].value;
                                          if (y == "") {
                                                        alert("firstname must be filled out");
                                                        return false;
                                          }
                                          let z = document.forms["register_form"]["lname"].value;
                                          if (z == "") {
                                                        alert("lastname must be filled out");
                                                        return false;
                                          }

                                          let a = document.forms["register_form"]["email"].value;
                                          if (a == "") {
                                                        alert("email must be filled out");
                                                        return false;
                                          }
                                          let B = document.forms["register_form"]["contactno"].value;
                                          if (B == "") {
                                                        alert("contact number must be filled out");
                                                        return false;
                                          }
                                          let c = document.forms["register_form"]["password"].value;
                                          if (c == "") {
                                                        alert("password must be filled out");
                                                        return false;
                                          }
                                          let d = document.forms["register_form"]["cpassword"].value;
                                          if (d == "") {
                                                        alert("confirm password");
                                                        return false;
                                          }






                                          var firstpassword = document.register_form.password.value;
                                          var secondpassword = document.register_form.cpassword.value;

                                          if (firstpassword == secondpassword) {
                                                        return true;
                                          } else {
                                                        alert("password must be same!");
                                                        return false;
                                          }


                            }
              </script>
              <form action="registerlogic.php" method="POST" name="register_form" onsubmit="return validform()">
                            <input type="text" name="username" placeholder="username"><br>
                            <input type="text " name="fname" placeholder="first name"><br>
                            <input type="text " name="lname" placeholder="last name"><br>
                            <input type="email" name="email" placeholder="Email"><br>
                            <input type="number" name="contactno" placeholder="contact number">
                            <br>
                            <label for="dob">Date of Birth</label>
                            <input type="date" name="dob"><br>
                            <input type="password" name="password" placeholder="password"><br>

                            <input type="password" name="cpassword" placeholder="confirm password"><br>
                            <input type="submit" name="submit" value="register"><br>
              </form>
</body>

</html>