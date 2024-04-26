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
            <h1>Student regestriration !</h1>
            <label for="">First Name</label>
            <input type="text" name="fname">
            <label for="">Last Name</label>
            <input type="text" name="lname">
            <label for="">Age</label>
            <input type="number" name="age">
            <label for="">Level</label>
            <input type="number" name="level">
            <label for="">Location</label>
            <input type="text" name="location">
            <button name="insert" type="submit">Add</button>
            <p><a href="studentlist.php">View all Students</a></p>
            <?php
            require "config/connection.php";
            if (isset($_POST['insert'])) {

                $fname = strtoupper($_POST['fname']);
                $lname = $_POST['lname'];
                $age = $_POST['age'];
                $level = $_POST['level'];
                $location = $_POST['location'];

                $query = "INSERT INTO student VAlUES('','$fname','$lname','$age','$level','$location')";
                $result = mysqli_query($connect,$query);
                // echo "<script>alert(",$fname ," added')</script>";
                echo "<script>alert('",$fname," ",$lname," Added successfully !')</script>";

                # code...
            }
            ?>
        </form>
    </fieldset>
</body>
</html>