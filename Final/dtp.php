<?php
session_start();
	$title=$_GET['title'];
	$table=$_GET['category'];
	$conn=mysqli_connect("localhost","root","","final");
  		 $query="UPDATE `$table` SET `status` = '1' WHERE `$table`.`title` = '$title'";
  		 $res=mysqli_query($conn,$query);
  		 
  		 if ($res) {
  		 	$_SESSION['msg']="Successfully published";
  		 	header('location:adminmain.php');
  		 }

?>
