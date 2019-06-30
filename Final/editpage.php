<?php

	session_start();
if(isset($_SESSION['category'])||isset($_SESSION['title'])){
   					unset($_SESSION['category']);
   					unset($_SESSION['title']);
   				}
   	        $title=$_SESSION['etitle'];
   			$tags=$_SESSION['etags'];
   			$content=$_SESSION['econtent'];
   			$authour=$_SESSION['eauthour'];
   			$status=$_SESSION['estatus'];
   			$datetime=$_SESSION['edatetime'];
   			$category=$_SESSION['ecategory'];
   			
   			unset($_SESSION['etitle'], $_SESSION['etags'], $_SESSION['econtent'], $_SESSION['eauthour'], $_SESSION['estatus'], $_SESSION['edatetime'],$_SESSION['ecategory']);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Do change in article</title>
	<meta charset="utf-8">
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
<div id="myDiv"></div>
     <div class="container" style="margin: 0 auto" >
  <div class="row">
  	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="background-color: #ffffb3;"> 
  	   <br> <form class="form-group" action="editmain.php" method="POST">
  		     Title of article<br><input type="text" name="title" class="form-control" style="border-width: 1px 1px 1px 2.5px;" id="title"><br><br>
  		     
  		    Tags<br><input type="text" name="tags" class="form-control" style="border-width: 1px 1px 1px 2.5px;" id="tags"><br><br>
  		     Content of Article<br><textarea class="form-control" name="content" rows="20" cols="95" id="content"></textarea>


  		     <!--Photos <br>   -->


  		     Authour <br><input id="authour" type="text" name="authour" class="form-control" style="border-width: 1px 1px 1px 2.5px;"><br><br>
  		     <button type="submit" name="save" class="btn btn-warning" value="title">save</button>
  	    </form>
  		    
  		     
  	    </form>
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
</div>  
<script type="text/javascript">
		var title="<?php echo $title; ?>";
		var tags="<?php echo $tags; ?>";
		var content="<?php echo $content; ?>";
		var authour="<?php echo $authour; ?>";
		var status="<?php echo $status; ?>";
		var datetime="<?php echo $datetime; ?>";

		document.getElementById("title").innerHTML=title;
		document.getElementById("authour").innerHTML=authour;
		document.getElementById("content").innerHTML=content;
		document.getElementById("tags").innerHTML=tags;
	</script>
</body>
</html>