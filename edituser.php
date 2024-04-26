<?php
session_start();
include "config/connection.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update user | Page 10</title>
    <link rel="stylesheet" href="css/signup.css" />
  </head>
  <body>
    <div class="container">
      <div class="signup__card">
          <form action="" method="post">
            <h1>Update User Here !</h1>
            <?php
            require "config/connection.php";
            $update = $_GET['editid'];
            $query = "SELECT * FROM users WHERE id='$update'";
            $result  = mysqli_query($connect,$query);
            while ($rows = mysqli_fetch_assoc($result)) {
            ?>
          <input type="text" name="uname" placeholder="User Name" value=<?php echo $rows['username']?>      
          required />
          <input type="password" name="pword" placeholder="Password" value=<?php echo $rows['password']?>   
          required />
            <?php
            }
            ?>
          <button type="submit" name="update">Update</button>
          <?php
          if (isset($_POST['update'])) {

            $username = $_POST['uname'];
            $password = $_POST['pword'];
            $query = "UPDATE users SET username='$username' , password='$passowrd' WHERE id='$update'";
            $result = mysqli_query($connect,$query);

            if ($result == true) {
              header("location:userlist.php");
              # code...
            }
            
          }
          ?>
          <p>Don't have an account?<a href="signup.php">SignUp here</a></p>
          <p>Copyright&copy; BruceBlessing.com</p>
        </form>
      </div>
    </div>
  </body>
</html>
