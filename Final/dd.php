<?php
session_start();
$category=$_GET['category'];
$title=$_GET['title'];
switch($_GET['del']) {
	case 'Delete':
	{	
		
		
		
		$conn=mysqli_connect("localhost","root","","final");
  		 $query="DELETE FROM `$category` WHERE `title` = '$title'";
  		 $res=mysqli_query($conn,$query);
  		$num = mysqli_affected_rows($conn);
  		echo $num;
   		if($res)
   		{
   			$_SESSION['msg']="Successfully Deleted";
   				if(isset($_SESSION['category'])||isset($_SESSION['title'])){
   					unset($_SESSION['category']);
   					unset($_SESSION['title']);
   				}
   			header('location:adminmain.php');
   			
   		}
		break;
   }
 }
 ?>