<?php

	session_start();
		$category=$_SESSION['category'];
		$_SESSION['title']= $_POST['gettitle'];

		  $title=$_SESSION['title'];  
		  
		

switch($_POST['title']) {
	case 'Delete':
	{	
		
		
		
		$conn=mysqli_connect("localhost","root","","final");
  		 $query="DELETE FROM `$category` WHERE `title` = '$title'";
  		 $res=mysqli_query($conn,$query);
  		$num = mysqli_affected_rows($conn);
  		echo $num;
   		if($num>0)
   		{
   			$_SESSION['msg']="Successfully Deleted";
   				if(isset($_SESSION['category'])||isset($_SESSION['title'])){
   					unset($_SESSION['category']);
   					unset($_SESSION['title']);
   				}
   			header('location:adminmain.php');
   			
   		}
		break;
   }
   case 'Edit':
	{	
		
		$conn=mysqli_connect("localhost","root","","final");
  		 $query="SELECT * FROM `$category` WHERE `title`='$title'";
  		 $res=mysqli_query($conn,$query);
  		$num = mysqli_num_rows($res);
  		echo $num;
   		if($num>0)
   		{
   			while($fin=mysqli_fetch_assoc($conn,$res)){
   			$_SESSION['etitle']=$fin["title"];
   			$_SESSION['etags']=$fin["tags"];
   			$_SESSION['econtent']=$fin["content"];
   			$_SESSION['eauthour']=$fin["authour"];
   			$_SESSION['estatus']=$fin["status"];
   			$_SESSION['edatetime']=$fin["datetime"];
   			
   		    }
   		    $_SESSION['ecategory']=$_SESSION['category'];
   			
   			if(isset($_SESSION['category'])||isset($_SESSION['title'])){
   					unset($_SESSION['category']);
   					unset($_SESSION['title']);
   				}
   			header('location:editpage.php');
   		}
		break;
   }
   
}
	
?>