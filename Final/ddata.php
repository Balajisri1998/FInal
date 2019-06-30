<?php

	session_start();
	$title=$_GET['title'];
	
	$category=$_GET['category'];
	$conn=mysqli_connect("localhost","root","","final");
  		 $query="SELECT * FROM `$category` WHERE `title`='$title'";
  		 $res=mysqli_query($conn,$query);
  		 $num=mysqli_num_rows($res);
  		 $fin=mysqli_fetch_assoc($res);
  		 $purl="http://localhost/Final/dtp.php?category=".$category."&title=".$title ; 
  		  $durl="http://localhost/Final/dd.php?category=".$category."&title=".$title."&del=Delete" ; 
		 
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<meta charset="utf-8">
	<link href="img\favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<meta name="viewport" content="width=device-width , initial-scale=1">

	<meta property="og:url"           content="https://localhost/view.php" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="<?php echo $title; ?>" />
    <meta property="og:image"         content="https://localhost/img/logo.jpg" />
	
	 <script src="js\jquery-3.4.1.min.js"></script>
	    <script src="js\bootstrap.min.js"></script> 
		<link rel="stylesheet" type="text/css" href="css\bootstrap.min.css"> 
		<style type="text/css">
			p{
				font-family: Georgia, serif;
font-size: 40px;
letter-spacing: -3.6px;
word-spacing: 3.2px;
color: #039127;
font-weight: normal;
text-decoration: none;
font-style: normal;
font-variant: normal;
text-transform: none;
			}
		</style>
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
<div id="myDiv"></div>
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

			<div class="container ">
				<div class="row ">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 well">
						<p ><?php echo $fin['title']; ?></p>
						<h6 >&nbsp&nbsp&nbsp<?php echo $fin['authour']; ?>--<?php echo $fin['datetime']; ?></h6><br><br>
						<pre  ><?php echo $fin['content']; ?></pre>
						<a href="<?php echo $purl; ?>"><button type="button" name="title" value="Edit" class="btn btn-success btn-xs ">Publish</button></a>
 						<a href="<?php echo $durl; ?>"><button type="button" name="Delete" value="Delete" class="btn btn-danger btn-xs ">Delete</button></a>
					</div>
				</div>
				
				
				
				
				

			


</body>
</html>