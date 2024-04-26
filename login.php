<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | Page 3</title>
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
          require "config/connection.php";
          if (isset($_POST['login'])) {

            $username = $_POST['uname'];
            $password = $_POST['pword'];
            $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
            $result = mysqli_query($connect,$query);

            if (mysqli_num_rows($result) > 0 ) {
              while($rows = mysqli_fetch_assoc($result)){
                $level = $rows['level'];
                if($level == 1){
                  header("location:headmaster.php");
                }elseif($level == 2){
                  header("location:dos.php");
                }elseif($level == 3){
                  header("location:staff.php");
                }elseif($level == 4){
                  header("location:displine.php");
                }elseif($level == 5){
                  header("location:studentacc.php");
                }else{
                  header("location:default.php");
                }
              }
        
            }
          }
          ?>
          <p>Don't have an account?<a href="signup.php">SignUp here</a></p>
          <p>Copyright&copy; Bruce.com</p>
        </form>
      </div>
    </div>
  </body>
</html>
