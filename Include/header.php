<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title>Online Exam Admin Panel</title>
	<link rel="icon" href="logo/logo.png" type="image/icon type">
	
	<style type="text/css">
		body{
	padding: 0px 10px;
	background-image: url(../bg.png);
	background-position: all;
	background-repeat: no-repeat;
	margin: 0;
	height: 90vh;
	}
	h2{
		text-align: center;
		text-decoration: underline;
		font-size: 48px;
		color: green;
	}
	.option{
		display: flex;
		justify-content: center;
	}
	.option a{
					text-decoration: none;
					color: white;
					font-size: 18px;
					padding: 15px 30px;
				    border: 2px solid white;
				    border-bottom-right-radius: 8px;
				    border-top-left-radius: 8px;
			}
	.option a:hover{
		background-color: #000;
		transition: 0.6s ease;
	}		
	.active{background-color: #000; 
		    color: red;}
	</style>
</head>
<body>