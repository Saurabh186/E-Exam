<?php
session_start();
error_reporting(0);
include('include/security.php');
include('../include/connection.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Online Exam Admin Panel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	 <meta charset="utf-8">
	 <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	 <link rel="icon" href="../logo/logo.png" type="image/icon type">
	
	<style type="text/css">
		body{
	padding: 0px 10px;
	/*background-image: url(../bg.png);*/
/*	background-position: all;
	background-repeat: no-repeat;*/
	background-color: skyblue;
	margin: 0;
	height: 90vh;
	}
	h2{
		text-align: center;
		text-decoration: underline;
		font-size: 48px;
		margin: 10px;
		margin-bottom: 20px;
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

	.question_input{display: none;}	 
	
	#hides{display: none;}   

    .question_input form{
    						margin: 0 auto;
    						width: 600px;
    						height: auto;      						  						

    	  }

    .question_input form p {color: black;font-weight: bold;margin-top: 1rem;margin-bottom: 0px;}
    .question_input form input[type=text],input[type=time],input[type=date],select{
    						     width: 100%;
    						     height: auto;
    						     padding: 4px;
    						     border: none;
    						     outline: none;
    						     color: blue;
    						     font-size: 16px;
    						     border-bottom: 1px solid green;
    						     background: transparent;
    }	 
  input[type=date]{height: 40px;}

    #list{
    	                         width: 102%;
    						     padding: 4px;
    						     border: none;
    						     outline: none;
    						     color: black;
    						     font-size: 14px;
    						     border-bottom: 1px solid green;
    						     background: transparent;
    } 
     #s {
	       display: inline-block;
           padding: 10px 20px;
           width: 40%;           
           font-size: 16px;
           cursor: pointer;
           text-align: center;
           text-decoration: none;
           outline: none;
           color: #fff;
           background-color: #3498DB;
           border: none;
           border-radius: 15px;
           box-shadow: 0 4px #999;
         }
         .sub_btn{display: flex;justify-content: center;}
#s:hover {background-color: #2E86C1;}
#s:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}  
 #c {
	       display: inline-block;
           padding: 10px 20px;
           width: 40%;           
           font-size: 16px;
           cursor: pointer;
           text-align: center;
           text-decoration: none;
           outline: none;
           color: #fff;
           background-color: #FF7F50;
           border: none;
           border-radius: 15px;
           box-shadow: 0 4px #999;
         }
  #Deletebtn,.Deletebtn{
  				padding: 10px 12px 12px 3px;
           width: 70%;           
           font-size: 16px;
           cursor: pointer;
           text-align: center;
           text-decoration: none;
           outline: none;
           color: #fff;
           background-color: red;
           border: none;
           border-radius: 10px;
           box-shadow: 0 4px #999;
  }  
  #logout:hover{background-color: red;transition: 0.4s ease;} 
     .sub_btn{display: flex;justify-content: center;}
#c:hover {background-color: #FF7150;}
#c:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}  
.star{color: red;}
.addnew{
		 float: right;
		 color: #fff;
		 position: fixed;
		 padding: 6px 6px;
		 border:none;
		 outline: none;
		 background-color:#FF7F50; 
	}

	.headbox{
				display: flex;
				justify-content: center;
				margin-left: 30px;
				margin-top: 80px;
	}
	.box1,.box2,.box3{
		border: 1px solid black;
		padding: 15px 15px;
		
		margin-left: 30px;
	}

	.headbox p{
		font-weight: bold;
		font-size: 18px;
		text-align: center;
		color: green;
	}
	.headbox h3{
		font-weight: bold;
		font-size: 18px;
		text-align: center;
		color: grey;
	}
#ques_diplay {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-top: 3%;
}

#ques_diplay td, #ques_diplay th {
  border: 1px solid #000;
  padding: 8px;
  text-align: center;
}

#ques_diplay tr:nth-child(even){background-color: #f2f2f2;}

#ques_diplay tr:hover {background-color: #ddd;}

#ques_diplay th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
  text-align: center;
}
	

.captureImg{
		width: 160px;
		height: auto; 
		border-radius: 4px;
}	

.leftText{
	   text-align: left !important;
    padding-left: 1em !important;
}


	</style>


</head>
<body>