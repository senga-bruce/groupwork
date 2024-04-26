<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a new student | Page 7</title>
    <link rel="stylesheet" href="css/insert.css">
</head>
<body>
    <fieldset>
        <form method="post">
            <h1>Update Student Info. Here !</h1>
          <?php
          require "config/connection.php";
          $update = $_GET['editid'];
          $query = "SELECT * FROM student WHERE id='$update'";
          $result = mysqli_query($connect,$query);
          while ($rows = mysqli_fetch_assoc($result)) {
          ?>
          <label for="">First Name</label>
          <input type="text" name="fname" value=<?php echo $rows['firstname']?>>
          <label for="">Last Name</label>
          <input type="text" name="lname" value=<?php echo $rows['lastname']?>>
          <label for="">Age</label>
          <input type="number" name="age" value=<?php echo $rows['age']?>>
          <label for="">Level</label>
          <input type="number" name="level" value=<?php echo $rows['level']?>>
          <label for="">Location</label>
          <input type="text" name="location" value=<?php echo $rows['location']?>>
          <?php
          }
          ?>
            <button name="update" type="submit">Update</button>
            <p><a href="studentlist.php">View all Students</a></p>
            <?php
            require "config/connection.php";
            if (isset($_POST['update'])) {

                $fname = strtoupper($_POST['fname']);
                $lname = $_POST['lname'];
                $age = $_POST['age'];
                $level = $_POST['level'];
                $location = $_POST['location'];

                $query = "UPDATE student SET 
                firstname='$fname',lastname='$lname',age='$age',level='$level',location='$location' WHERE 
                id='$update'";
                $result = mysqli_query($connect,$query);
                header("location:studentlist.php");

                # code...
            }
            ?>
        </form>
    </fieldset>
</body>
</html>
