<?php 
$connect = mysqli_connect("localhost","root","")or die(mysqli_error());

mysqli_select_db($connect,"admin_school")or die (mysqli_error());
?>