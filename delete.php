<?php
require "config/connection.php";
$delete = $_GET['deleteid'];
$query = "DELETE FROM student WHERE id='$delete'";
$result = mysqli_query($connect,$query);
header("location:studentlist.php");
?>