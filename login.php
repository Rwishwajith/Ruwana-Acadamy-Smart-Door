<?php
	$Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('UIDContainer.php',$Write);
?>

<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
		<script src="jquery.min.js"></script>
		<script src="https://www.gstatic.com/firebasejs/7.17.1/firebase-app.js"></script>
		<script src="https://www.gstatic.com/firebasejs/7.17.1/firebase-auth.js"></script>
		<script src="https://www.gstatic.com/firebasejs/7.17.1/firebase-database.js"></script>
		<script src="https://www.gstatic.com/firebasejs/7.17.1/firebase-storage.js"></script>
		<script src="https://www.gstatic.com/firebasejs/7.17.1/firebase-analytics.js"></script>
		<script>
			$(document).ready(function(){
				 $("#getUID").load("UIDContainer.php");
				setInterval(function() {
					$("#getUID").load("UIDContainer.php");
				}, 500);
			});
		</script>
		
		<style>
		html {
			font-family: Arial;
			display: inline-block;
			margin: 0px auto;
		}
		
		textarea {
			resize: none;
		}

		ul.topnav {
			list-style-type: none;
			margin: auto;
			padding: 0;
			overflow: hidden;
			background-color: #02075d;
			width: 100%;
		}

		ul.topnav li {float: left;}

		ul.topnav li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		ul.topnav li a:hover:not(.active) {background-color: #d4af37;}

		ul.topnav li a.active {background-color: #333;}

		ul.topnav li.right {float: right;}

		@media screen and (max-width: 600px) {
			ul.topnav li.right, 
			ul.topnav li {float: none;}
		}
		</style>
		
		<title>Registration</title>
	</head>
	
	<body>

		<h2 align="center">Ruwana Acadamy Management System By Team SkyBlue</h2>
		<ul class="topnav">
		<li> <img src="sky gold LOGO 2 png.png" alt="" style="width:100px; height:50px;"></li>
			<li><a href="home.php">Home</a></li>
			<li><a href="user data.php">Student Data</a></li>
			<li><a class="active" href="registration.php">Registration</a></li>
			<li><a href="read tag.php">Read Tag ID</a></li>
			<li><a href="userdetails.php">Student Details</a></li>
			<li><a href="payment.php">Payment Information</a></li>
			<li><a href="payment.php">Attendance</a></li>
			
		</ul>


	</body>
<script>
	 var firebaseConfig = {
    apiKey: "AIzaSyDkoQOcnGi1xVtf-vNDGf-ceYW31_iC0JU",
    authDomain: "ruwana-academy.firebaseapp.com",
    databaseURL: "https://ruwana-academy.firebaseio.com",
    projectId: "ruwana-academy",
    storageBucket: "ruwana-academy.appspot.com",
    messagingSenderId: "121261082835",
    appId: "1:121261082835:web:ebba2043b1762cac03ac26",
    measurementId: "G-WQEPJCKJJK"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>
<script src="connect.js"></script>
</html>