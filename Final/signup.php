<!DOCTYPE html>
<html>
<head>
	<title>USER REGISTRATION</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1">
	<link href="img\favicon.ico" rel="shortcut icon" type="image/x-icon" />
	    <script src="js\jquery-3.4.1.min.js"></script>
	    <script src="js\bootstrap.min.js"></script> 
		<link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css\main.css"> 
<style type="text/css">
    body{
        background: rgba(219,219,219,1);
background: -moz-linear-gradient(top, rgba(219,219,219,1) 0%, rgba(219,219,219,1) 1%, rgba(226,226,226,1) 47%, rgba(254,254,254,1) 100%);
background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(219,219,219,1)), color-stop(1%, rgba(219,219,219,1)), color-stop(47%, rgba(226,226,226,1)), color-stop(100%, rgba(254,254,254,1)));
background: -webkit-linear-gradient(top, rgba(219,219,219,1) 0%, rgba(219,219,219,1) 1%, rgba(226,226,226,1) 47%, rgba(254,254,254,1) 100%);
background: -o-linear-gradient(top, rgba(219,219,219,1) 0%, rgba(219,219,219,1) 1%, rgba(226,226,226,1) 47%, rgba(254,254,254,1) 100%);
background: -ms-linear-gradient(top, rgba(219,219,219,1) 0%, rgba(219,219,219,1) 1%, rgba(226,226,226,1) 47%, rgba(254,254,254,1) 100%);
background: linear-gradient(to bottom, rgba(219,219,219,1) 0%, rgba(219,219,219,1) 1%, rgba(226,226,226,1) 47%, rgba(254,254,254,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#dbdbdb', endColorstr='#fefefe', GradientType=0 );
    	 background-repeat: no-repeat;

    }
    
</style>


</head>
<body>



<nav class="navbar navbar-inverse navbar-fixed-top ">
		<div class="container-fluid">
		<div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		  </button>
		  <a href="index.php" class="navbar-brand" style="padding: 0px 0px;"><img src="img/logo.jpg"></a>
		  
		</div>
		<div id="mynav" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
               <li><a href="index.php">Home</a></li>
               
            </ul>
		</div>
		</div>
</nav><br><br><br><br><br><br><br>

<h1 style="text-align: center;" id="nav1">USER REGISTRATION</h1>
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


<div class="container" class="text-center" style="margin: 0 auto">
  <div class="row">
    <div class="col-md-3 col-sm-3 col-xs-3 col-lg-3"> </div>
    <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6" style="background: #e6e6e6;text-align: left;padding-left: 15px;border-radius: 10px 10px 10px 10px; -moz-border-radius: 10px 10px 10px 10px; -webkit-border-radius: 10px 10px 10px 10px; border: 0px solid #000000;">
    	<form action="signupuser.php" method="POST">
    		NAME<br>
    		<input type="text" name="username" placeholder=" Enter NAME" style="border-radius: 4px 4px 4px 4px;border-width: 0PX 0PX 0PX 4PX;"><br><br>
    		MAIL ID<br>
    		<input type="text" name="usermailid" placeholder=" Enter MAIL ID"  style="border-radius: 4px 4px 4px 4px;border-width: 0PX 0PX 0PX 4PX;"><br><br>
    		Password<br>
    		<input type="Password" name="userpassword" placeholder=" Enter PASSWORD" style="border-radius: 4px 4px 4px 4px;border-width: 0PX 0PX 0PX 4PX;"></input><br><br>
    		<input type="submit" value="signup"style="border-radius: 4px 4px 4px 4px;"><br><br>

        </form>	 </div>
    <div class="col-md-3 col-sm-3 col-xs-3 col-lg-3"> </div>
	
  </div>
</div>    


</body>
</html>

