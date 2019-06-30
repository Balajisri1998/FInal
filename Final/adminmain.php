<?php 
session_start();
   
	if(isset($_SESSION['msg']))
  {
    $msg=$_SESSION['msg'];
    unset($_SESSION['msg']);
  }


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>WELCOME</title>
 	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1">
	<link href="img\favicon.ico" rel="shortcut icon" type="image/x-icon" />
	    <script src="js\jquery-3.4.1.min.js"></script>
	    <script src="js\bootstrap.min.js"></script> 
		<link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css\main.css"> 
    <script type="text/javascript">
      var msg="<?php echo $msg; ?>";
      alert(msg);
    </script>

		
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
		  <a href="index.php" class="navbar-brand" style="padding: 0px 0px;"><img src="img/logo.jpg" height="80px"></a>
		  <?php 
		  	 if(isset($_SESSION["username"]))
		  	 echo " <h3 class=\"navbar-brand\" style=\"padding: 0px 0px 0px 400px;clear: right;\">WELCOME ".$_SESSION["username"]."</h3>";
		     ?>
	
		</div>
		<div id="mynav" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
               <li><a href="index.php">Home</a></li>
               <li>
               		<a href="#lists"  data-toggle="collapse" style="color: #b7b7b7;">Articles</a>
               		<ul class="nav collapse" id="lists" >
               			<li><a href="travelupdate.php"><div class="col-sm-1"></div>Travel updates</a></li>
               			<li><a href="productupdate"><div class="col-sm-1"></div>Product updates</a></li>
               			<li><a href="technologyupdate"><div class="col-sm-1"></div>Technology updates</a></li>
               			<li><a href="events.php"><div class="col-sm-1"></div>Events</a></li>
               			<li><a href="achievements.php"><div class="col-sm-1"></div>Achievements</a></li>
               			<li><a href="testimonial"><div class="col-sm-1"></div>Testimonals</a></li>
               			
               		</ul>	

               </li>
              <li><a href="logout.php" >logout</a></li>
            </ul>
		</div>
	</div>
</nav>

<div class="container" id="myDiv">
  <div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 text-center">
    <a href="new.php"><button  type="button" class="btn btn-success btn-block" >ADD NEW ARTICLE</button></a>
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
  <div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 text-center">
    <a href="edit.php"><button type="button" class="btn btn-warning btn-block" >EDIT THE ARTICLE </button></a>
    </div> 
  </div>
  <br>
  <div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 text-center">
    <a href="edit.php"><button  type="button" class="btn btn-danger btn-block" >DELETE THE ARTICLE</button></a>
    </div> 
  </div>
  <br>
  <div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 text-center">
    <a href="index.php"><button  type="button" class="btn btn-info btn-block">VIEW PUBLISHED ARTICLES</button></a>
    </div> 
  </div><br>
   <div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 text-center">
    <a href="draft.php"><button  type="button" class="btn btn-info btn-block">VIEW DRAFT ARTICLES</button></a>
    </div> 
  </div>
</div><br>
 </body>
 </html>