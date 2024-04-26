<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign | Page ~</title>
    <link rel="stylesheet" href="css/index.css">

</head>
<body>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">Bschool</div>
            <div class="links">
                <a href="dos.php">Home</a>
                <a href="student.php">Students</a>
                <a href="about.html">About Us</a>
                <a href="contact.html">Contact</a>
                <form method="post">
                    <button name="site">Log Out</button>
                </form>              
            </div>
        </div>
        <h1 style="margin:30px;">Give Responsibilities To User</h1>
        <div class="middle">
            <table border="1" width="99%" cellpadding="0" cellspacing="0">
                <tr>
                    <td colspan="100%" style="color:white; height:30px"><a href="userlist.php">Back to user-list</a></td>
                </tr>
                <tr>
                    <th style="color:white; height:30px">No</th>
                    <th style="color:white; height:30px">First Name</th>
                    <th style="color:white; height:30px">Last Name</th>
                    <th style="color:white; height:30px">User name</th>
                    <th style="color:white; height:30px">Email</th>
                    <th style="color:white; height:30px">Password</th>
                    <th style="color:white; height:30px">Level</th>
                    <th colspan="6" style="color:white; height:30px">Make him/her</th>
                </tr>
                <?php
                require "config/connection.php";
                $x = 1;
                $query = "SELECT * FROM users";
                $result = mysqli_query($connect,$query);
                while($rows = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td><?php echo $x;?></td>
                    <td><?php echo $rows['firstname'];?></td>
                    <td><?php echo $rows['lastname'];?></td>
                    <td><?php echo $rows['username'];?></td>
                    <td><?php echo $rows['email'];?></td>
                    <td><?php echo $rows['password'];?></td>
                    <td><?php
                    $level = $rows['level'];
                    if($level == 1){
                        echo "Master";
                    }elseif($level == 2){
                        echo "D.O.S";
                    }elseif($level == 3){
                        echo "Teacher";
                    }elseif($level == 4){
                        echo "D.O.D";
                    }elseif($level == 5){
                        echo "Student";
                    }else{
                        echo "Not yet active";
                    }
                    ?></td>
                    <td><a href="makemaster.php?id=<?php echo $rows['id']?>" style="color:white;">Master</a></td>
                    <td><a href="makedos.php?id=<?php echo $rows['id']?>" style="color:white;">D.O.S</a></td>
                    <td><a href="maketeacher.php?id=<?php echo $rows['id']?>" style="color:white;">Teacher</a></td>
                    <td><a href="makedod.php?id=<?php echo $rows['id']?>" style="color:white;">D.O.D</a></td>
                    <td><a href="makestudent.php?id=<?php echo $rows['id']?>" style="color:white;">Student</a></td>
                    <td><a href="deactivate.php?id=<?php echo $rows['id']?>" style="color:white;">Deactivate</a></td>

                </tr>
                <?php 
                $x++ ;    
                }
                ?>
            </table>
        </div>
    </div>


</body>
</html>