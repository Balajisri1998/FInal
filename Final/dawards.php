<?php

	session_start();
	$table="awards";
	$_SESSION['category']=$table;
	$conn=mysqli_connect("localhost","root","","final");
  		 $query="SELECT * FROM `$table` WHERE `status`='0'";
  		 $res=mysqli_query($conn,$query);
  		 $num=mysqli_num_rows($res);
  		 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Travel updates</title>
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
<div id="myDiv" class="text text-danger text-md">**NOTE : Click on the title to view the BLOG</div>

<div id="myDiv"></div>
<div class="container text-left">
	<div class="row">
		
			<?php
			$i=0;
				if ($num>0) {
			
			
				while ($fin=mysqli_fetch_assoc($res)) {
					
						echo "<form action=\"JavaScript:viewfn(".$i.")\"<div class=\"text text-center\" class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\"><button class=\"btn btn-primary\" type=\"submit\" value=\"".$fin['title']."\" name=\"title\">\n".$fin['title']."</button>
						<h2 id=\"id".$i."\" title=\"".$fin['title']."\"></h2>
						<p>".$fin['tags']."</p>
						<h4 class=\"text text-center\">Authour : ".$fin['authour']."</h4>
						<p class=\"text text-center\">".$fin['datetime']."</p>
						<hr></div></form>";
						$i++;
					}
						}
						else{ echo "OOPS!! NO DATA FOUND";}

			?> 

		
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

function viewfn(x){
	var n=parseInt(x);
	
	console.log(n);
	var category="<?php echo $table;?>";
	var temp=document.getElementById("id"+n);
	console.log(temp);
	var title=temp.getAttribute("title");
	console.log(title);
	var url="http://localhost/Final/ddata.php?category="+category+"&title="+title;
	<?php $_SESSION['url']="<script>document.write(url);</script>"; ?>
	console.log(url);
	window.location.replace(url);

}


</script>

</body>
</html>