<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signup | Page 2</title>
    <link rel="stylesheet" href="css/signup.css" />
  </head>
  <body>
    <div class="container">
      <div class="signup__card">
        <form action="" method="post">
          <h1>Sign Up</h1>
          <div class="name">
            <input
              type="text"
              name="fname"
              placeholder="First Name"
              class="fname"
              required
            />
            <input
              type="text"
              name="lname"
              placeholder="Last Name"
              class="lname"
              required
            />
          </div>
          <input type="text" name="uname" placeholder="User Name" required />
          <input type="email" name="email" placeholder="Email" required />
          <input type="password" name="pword" placeholder="Password" required />
          <input
            type="password"
            name="cword"
            placeholder="Confirm Password"
            required
          /><br />
          <div class="check">
            <input type="checkbox" name="check" class="checkbox" required />
            <p>I accept Terms of use & privacy policy</p>
          </div>
          <button type="submit" name="signup">Signup</button>
          <p>Already have an account?<a href="login.php">Login here</a></p>
          <?php
          require "config/connection.php";
          if (isset($_POST['signup'])) {

            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $uname = $_POST['uname'];
            $email = $_POST['email'];
            $password = $_POST['pword'];
            $confirm_password = $_POST['cword'];

            $sql = "SELECT * FROM users WHERE username='$uname' LIMIT 1";
            $result = mysqli_query($connect,$sql);

            if (mysqli_num_rows($result) > 0 ) {
              echo "Username Taken !";
              # code...
            }else {
              $query = "INSERT INTO users VALUES ('','$fname','$lname','$uname','$email','$password','0')";
              $result  = mysqli_query($connect,$query);

            echo "<script>alert('",$fname, " Added successfully Now you can click OK to login!'),location.replace('login.php')</script>";


            }
            # code...
          }
          ?>
          <p>Copyright&copy; Bruce.com</p>
        </form>
      </div>
    </div>
  </body>
</html>
