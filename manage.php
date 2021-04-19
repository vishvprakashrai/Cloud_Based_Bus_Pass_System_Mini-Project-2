<?php
    include("connection.php");
    if(isset($_POST['pass_id'])){
        $id = $_POST['pass_id'];
        $password = $_POST['password'];
        $result = mysqli_query("select * from pass where id = '$id'");
		$row = mysqli_fetch_array($result);
        if($row['password']!=$password)
        {
            header("Location: manage2.php");
            
        }
        $body="initial";
    } else {
        $id="";
        $body="none";
    }
?>

<html>
    <head>
        
            <title>Cloud Based Bus Pass System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

        
        <style>
            .pass_body{
                display: <?php echo $body; ?>;
            }
            
     
