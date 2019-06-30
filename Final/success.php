<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Successfully added</title>
</head>
<body>
	<?php

		if(isset($_SESSION['msg']))
  {
    echo "<h1 class=\"text-success\">".$_SESSION['msg']."</h1>";
    
    unset($_SESSION['msg']);
  }

	  ?>

</body>
</html>