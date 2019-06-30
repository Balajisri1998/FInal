<?php
session_start();
		$title= $_POST['title'];
		$category= $_POST['category'];
		$tags= $_POST['tags'];
		$content= $_POST['content'];
		$authour= $_POST['authour'];

switch($_REQUEST['publish']) {
	case 'publish':
	{	
		$conn=mysqli_connect("localhost","root","","final");
  		 $query="INSERT INTO `$category` (`title`, `tags`, `content`, `datetime`, `authour`, `status`) VALUES ('$title', '$tags', '$content', CURRENT_TIMESTAMP, '$authour', '1');";
  		 $res=mysqli_query($conn,$query);
  		$num = mysqli_affected_rows($conn);
  		
   		if($num>0)
   		{
   			$_SESSION['msg']="Successfully published";
   			header('location:adminmain.php');
   		}
		break;
   }
	
	case 'draft':
	{
		$conn=mysqli_connect("localhost","root","","final");
  		 $query="INSERT INTO `$category` (`title`, `tags`, `content`, `datetime`, `authour`, `status`) VALUES ('$title', '$tags', '$content', CURRENT_TIMESTAMP, '$authour', '0');";
  		 $res=mysqli_query($conn,$query);
  		$num = mysqli_affected_rows($conn);
  		echo $num;
   		if($num>0)
   		{
   			$_SESSION['msg']="Saved";
   			header('location:adminmain.php');
   		}
		break;
    }
}

 ?>