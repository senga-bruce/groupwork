<?php
require "config/connection.php";
$delete = $_GET['deleteid'];
$query = "DELETE FROM users WHERE id='$delete'";
$result = mysqli_query($connect,$query);
header("location:userlist.php");
?>