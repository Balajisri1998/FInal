<?php

	session_start();
if(isset($_SESSION['category'])||isset($_SESSION['title'])){
   					unset($_SESSION['category']);
   					unset($_SESSION['title']);
   				}
	$_SESSION['category']=$_REQUEST['category'];
	$category=$_SESSION['category'];
	

	if($category=="select category")
	{
		header('location:edit.php');
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<meta charset="utf-8">
  <link href="img\favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<meta name="viewport" content="width=device-width , initial-scale=1">
	
	 <script src="js\jquery-3.4.1.min.js"></script>
	    <script src="js\bootstrap.min.js"></script> 
		<link rel="stylesheet" type="text/css" href="css\bootstrap.min.css"> 
</head>
<body>
	

	<nav id="wid" class="navbar navbar-inverse navbar-fixed-top ">
	  <div class="container-fluid">
		<div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		  </button>
		  <a href="index.php" class="navbar-brand" style="padding: 0px 0px;"><img src="img/logo.jpg" height="70px"></a>
		  
		</div>
		<div id="mynav" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
               <li><a href="index.php">Home</a></li>
               
               <li><a href="#">contact</a></li>
               <li><a href="#">about</a></li><?php 
                if (isset($_SESSION['username']))
                {
                	echo "<li><a href=\"logout.php\">Hello ".$_SESSION['username']."<br>logout</a></li>";
                }		
                else
                {
                	echo "<li><a href=\"user.php\">login</a></li>";
                }
               ?>
            </ul>
		</div>
	   </div>
     </nav>
     <div id="myDiv" class="text text-md text-default text-center">SELECT TITLE </div>
     <div class="container" class="text-center" style="margin: 0 auto">
  <div class="row">
  	<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
 <div class="col-md-10 col-sm-10 col-xs-10 col-lg-10 text-center" style="background: #e6e6e6;text-align: left;padding-left: 15px;border-radius: 10px 10px 10px 10px; -moz-border-radius: 10px 10px 10px 10px; -webkit-border-radius: 10px 10px 10px 10px; border: 0px solid #000000;">
 	<form action="editmain.php" method=POST>
 		<select name="gettitle" class="form-control" >
 			
 		<?php
 			
 			$conn=mysqli_connect("localhost","root","","final");
  		 	$query="SELECT * FROM `$category`";
  		 	$res=mysqli_query($conn,$query);
  			$num = mysqli_num_rows($res);
  			if($num>0)
  			{

  				while($fin=mysqli_fetch_assoc($res))
  				{
  					echo "<option value='".$fin["title"]."'>".$fin["title"]."</option>";
  				}

  			}
   		

 		  ?>

 		</select><br><br>
 		<button type="submit" name="title" value="Edit" class="btn btn-warning btn-xs disabled">Edit</button>
 		<button type="submit" name="title" value="Delete" class="btn btn-danger btn-xs">Delete</button>
 	</form>	

 </div>
 <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
  </div>
   </div>

<script>
	$(function(){
setInterval(oneSecondFunction, 100);
});

function oneSecondFunction() {
   var l=$("nav").height();
   var len= parseInt(l);
   var len=len+25;
   var le=len.valueOf();
   document.getElementById("myDiv").style.marginTop =len.valueOf()+"px" ;
}


</script>
 </body>
</html>