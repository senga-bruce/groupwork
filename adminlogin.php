<?php
session_start();
include "config/connection.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Login.php | Page 12</title>
    <link rel="stylesheet" href="css/signup.css" />
  </head>
  <body>
    <div class="container">
      <div class="signup__card">
        <form action="" method="post">
          <h1>Login Here !</h1>
          <input type="text" name="uname" placeholder="User Name" required />
          <input type="password" name="pword" placeholder="Password" required />
          <button type="submit" name="login">Login</button>
          <?php
        //   if (isset($_POST['login'])) {

            // $username = $_POST['uname'];
            // $password = $_POST['pword'];
            // $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
            // $result = mysqli_query($connect,$query);

            // if ($result == true) {
            //   header("location:home.php");

            // }
            
        //   }
          ?>
          <p>Don't have an account?<a href="signup.php">SignUp here</a></p>
          <p>Copyright&copy; BruceBlessing.com</p>
        </form>
    </div>
    <div class="error1">
      <p class="error">N.B: Only D.O.S can access it !</p>
    </div>
    </div>
  </body>
</html>
