<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List | Page 8</title>
    <link rel="stylesheet" href="css/studentlist.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
        <div class="header">
            <div class="logo">Bschool</div>
            <div class="links">
                <a href="index.php">Home</a>
                <a href="student.php">Students</a>
                <a href="about.html">About Us</a>
                <a href="contact.html">Contact</a>
                <form method="post">
                    <button name="site">Log Out</button>
                </form>
                
            </div>
        </div>
    <h1>Student List</h1>
    <table border="1" cellspacing="0" cellpadding="0">
        <tr>
            <th colspan="12" class="add"><a href="insert.php" style="color:white;">Add new student</a></th>
        </tr>
        <tr>
            <th>No</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Level</th>
            <th>Location</th>
            <th colspan="4">Options</th>
        </tr>
        <?php
        require "config/connection.php";
        $query = "SELECT * FROM student";
        $result = mysqli_query($connect,$query);
        $x = 1;

        while ($rows = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?php echo $x?></td>
            <td><?php echo $rows['firstname']?></td>
            <td><?php echo $rows['lastname']?></td>
            <td><?php echo $rows['age']," ";?>Years Old</td>
            <td>Level<?php echo " ", $rows['level']?></td>
            <td><?php echo $rows['location'];?></td>
            <td><a href="addmarks.php?id=<?php echo $rows['id']?>" style="color:white;">Add marks</a></td>
            <td><a href="edit.php?editid=<?php echo $rows['id']?>" style="color:white;">Edit</a></td>
            <td><a href="delete.php?deleteid=<?php echo $rows['id']?>" style="color:white;">Delete</a></td>
        </tr>
        <?php
        $x++;
        }
        ?>
    </table>
</body>
</html>