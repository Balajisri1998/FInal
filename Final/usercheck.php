<?php 

if (isset($_SESSION['username'])&&isset($_SESSION['id']))
{
    unset($_SESSION['username']);
    unset($_SESSION['id']);
    session_destroy();
}

session_start();
   $userid=$_POST["userid"];
   $userpassword=$_POST["userpassword"];
   $conn=mysqli_connect("localhost","root","","final");
   $query="SELECT * FROM user WHERE mailid='$userid' AND userpassword='$userpassword'";
   $res=mysqli_query($conn,$query);
   if(mysqli_num_rows($res)>0)
   {
   	$fin=mysqli_fetch_assoc($res);
   		
   		$_SESSION['username']=$fin["username"];
   		
   		

   		header('Location: index.php');
   	
   }
   else 
      { 
         echo "INVALID CREDENTIALS"."<!DOCTYPE html>
<html>
<head>
   <title>Invalid</title>
   <link href=\"img\favicon.ico\" rel=\"shortcut icon\" type=\"image/x-icon\" />
</head>
<body><br>
   <a href=\"user.php\">login</a>
</body>
</html>";


      }
?>
