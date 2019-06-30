<?php 
	session_start();
  if(isset($_SESSION['category'])||isset($_SESSION['title'])){
            unset($_SESSION['category']);
            unset($_SESSION['title']);
          }
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Draft Articles</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1">
	<link href="img\favicon.ico" rel="shortcut icon" type="image/x-icon" />
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
		  <a href="index.php" class="navbar-brand" style="padding: 0px 0px;"><img src="img/logo.jpg" ></a>
		 <?php if(isset($_SESSION['username'])&&$_SESSION['username']=="Admin"){ echo "<a href=\"adminmain.php\" class=\"navbar-brand\" style=\"padding: 15px 0px 0px 500px;clear: right;\">ADMIN MAIN</a>"; } else {echo "<a href=\"admin.php\" class=\"navbar-brand\" style=\"padding: 15px 0px 0px 500px;clear: right;\">ADMIN</a>"; }?>
		</div>
		<div id="mynav" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
               <li><a href="index.php">Home</a></li>
               
               <?php 
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
  	<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"> </div>
  	<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"> <a href="dtravelupdate.php"> <img src="img\traup.jpg" title="Travel updates on Infiniti software solutions" height="250px"></a></div>
  	<div class="col-lg-1 col-md-1 col-sm-12 col-xs-1"></div>
  	<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"> <a href="dproductupdate.php"> <img src="img\proup.jpg" title="Product updates on Infiniti software solutions" height="250px"></a></div>

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
<br>
<div class="container" class="text-center" style="margin: 0 auto" id="myDiv">
  <div class="row">
  	<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"> </div>
  	<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"> <a href="dtechnologyupdate.php"> <img src="img\techup.jpg" title="Technology updates on Infiniti software solutions" height="250px"></a></div>
  	<div class="col-lg-1 col-md-1 col-sm-12 col-xs-1"></div>
  	<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"> <a href="devents.php"> <img src="img\events.jpg" title="Events on Infiniti software solutions" height="250px"></a></div>
 </div>
</div>  <br>

<div class="container" class="text-center" style="margin: 0 auto" id="myDiv">
  <div class="row">
  	<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"> </div>
  	<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"> <a href="dawards.php"> <img src="img\award.jpg" title="Awards on Infiniti software solutions" height="250px"></a></div>
  	<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
  	<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"> <a href="dtestimonial.php"> <img src="img\testimonial.jpg" title="Testimonals on Infiniti software solutions" height="250px"></a></div>
 </div>
</div><br> <br>

<div class="container" class="text-center" style="margin: 0 auto" id="myDiv">
  <div class="row">
    <div class="col-lg-4 col-md-4 "> </div>
    
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><a href="dachievements.php"> <img src="img\achieve.jpg" alt="Achievements" title="Achievements on Infiniti software solutions" height="250px"></a></div>
    
 </div>
</div><br>


</body>
</html>