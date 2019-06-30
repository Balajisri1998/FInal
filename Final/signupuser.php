<!DOCTYPE html>
<html>
<head>
	<title>Success
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1">
	<link href="img\favicon.ico" rel="shortcut icon" type="image/x-icon" />
	    <script src="js\jquery-3.4.1.min.js"></script>
	    <script src="js\bootstrap.min.js"></script> 
		<link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css\main.css">
</head>
<body>
<div class="container">
  <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-3 col-lg-3 text-center "> </div>
          <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6 text-center "><?php 

   $name=$_POST["username"];
   $mailid=$_POST["usermailid"];
   $password=$_POST["userpassword"];
   $conn=mysqli_connect("localhost","root","","final");
   $query="INSERT INTO user (username, mailid, userpassword) VALUES ('$name','$mailid','$password')";
   $res=mysqli_query($conn,$query);
   $num = mysqli_affected_rows($conn);
   if($num>0)
   {
   		echo "Successfully registered :-) <br><a href=\"user.php\"><button type=\"button\" class=\"btn btn-success btn-large\" >Signin </button></a>";
   	
   }
   else
   {
   	  echo "Mail ID must be unique :-( <br><a href=\"signup.php\"><button type=\"button\" class=\"btn btn-warning btn-large\" >Signup again </button></a>";
   }

?> </div>
          <div class="col-md-3 col-sm-3 col-xs-3 col-lg-3 text-center "> </div>
  </div>
</div>


</body>
</html>
