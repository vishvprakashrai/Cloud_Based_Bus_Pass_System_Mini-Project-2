
<?php  
     	$servername = "localhost";
		$username = "root";  
       	$password = "";  
       	$conn = mysqli_connect ($servername , $username , $password) or die("unable to connect to host");  
	$sql = mysqli_select_db ($conn ,'travel') or die("unable to connect to database");	
?>
