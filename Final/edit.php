<?php session_start(); 
       if(isset($_SESSION['category'])||isset($_SESSION['title'])){unset($_SESSION['category']);unset($_SESSION['title']);}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit article</title>
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
<div class="container" class="text-center" style="margin: 0 auto" id="myDiv">
  <div class="row">
  	<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
 <div class="col-md-10 col-sm-10 col-xs-10 col-lg-10 text-center" style="background: #e6e6e6;text-align: left;padding-left: 15px;border-radius: 10px 10px 10px 10px; -moz-border-radius: 10px 10px 10px 10px; -webkit-border-radius: 10px 10px 10px 10px; border: 0px solid #000000;">
 	<form action="edit1.php" method=POST>
<select name="category" class="form-control" >
  		     	<option value="select category">select category</option>
  				<option value="travel update">travel update</option>
  				<option value="product update">product update</option>
  				<option value="technology update">technology update</option>
  				<option value="events">events</option>
  				<option value="awards">awards</option>
  				<option value="achievements">achievements</option>
  				<option value="testimonial">testimonial</option>
			 </select>
			 <input class="btn btn-primary align-right" type="submit"  style="float: right;" value="select" /></form>

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
