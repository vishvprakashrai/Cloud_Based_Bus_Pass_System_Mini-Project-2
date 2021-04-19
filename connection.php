
<?php  
     	$servername = "34.203.204.238";
	$username = "root";  
       	$password = "root";  
       	$conn = mysqli_connect ($servername , $username , $password) or die("unable to connect to host");  
	$sql = mysqli_select_db ('travel',$conn) or die("unable to connect to database");	
?>
