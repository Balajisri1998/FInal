<?php 

if (isset($_SESSION['username'])&&isset($_SESSION['id']))
{
    unset($_SESSION['username']);
    unset($_SESSION['id']);
    session_destroy();
}
session_start();
   $adminid=$_POST["adminid"];
   $adminpassword=$_POST["adminpassword"];
   
   if($adminid=="Admin"&&$adminpassword=="Admin1234")
   {
   	
   		
   		$_SESSION['username']="Admin";
   		
   		

   		header('Location: adminmain.php');
   	
   }
   else 
      { 

         echo "INVALID CREDENTIALS<!DOCTYPE html>
<html>
<head>
   <title>Invalid</title>
   <link href=\"img\favicon.ico\" rel=\"shortcut icon\" type=\"image/x-icon\" />
</head>
<body><br>
   <a href=\"admin.php\">login</a>

</body>
</html>";
session_destroy();
   }
?>