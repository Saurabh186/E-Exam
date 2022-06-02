<?php
include('include/connection.php');
include('include/security.php');

 error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
	<link rel="icon" href="logo/logo.png" type="image/icon type">
	<style type="text/css">
		*{
			padding: 40px 40px;
			background-color: #000;
			margin: 0 auto;
			color: #fff;
			text-align: center;
		 }
		 #Wrong{color: red;}
		 #right{color: green; font-weight: bold;font-size: 50px;}
	</style>
</head>
<body>

	<?php

	    if(isset($_POST['save_answer']))
	    {
	    	echo '<script type="text/javascript"> console.log("enter 1"); </script>';
           $not = 0;
           $correct = 0;
           $total_q = 10;  //number of question
#----------------------------------------------------------
	      if(isset($_POST['q1']))
	      {
	      	  $ans = $_POST['ans1'];
	      	  $ques = $_POST['q1'];
	      	 if($ques === $ans)
	      	 {
	      	 	$correct++;
	      	 }
	      	 
	      }
	      else { $not++; }
#-----------------------------------------------------------
	      #----------------------------------------------------------
	      if(isset($_POST['q2']))
	      {
	      	  $ans = $_POST['ans2'];
	      	  $ques = $_POST['q2'];
	      	 if($ques === $ans)
	      	 {
	      	 	$correct++;
	      	 }
	      	 
	      }
	      else { $not++; }
#-----------------------------------------------------------
	      #----------------------------------------------------------
	      if(isset($_POST['q3']))
	      {
	      	  $ans = $_POST['ans3'];
	      	  $ques = $_POST['q3'];
	      	 if($ques === $ans)
	      	 {
	      	 	$correct++;
	      	 }
	      	 
	      }
	      else { $not++; }
#-----------------------------------------------------------
	      #----------------------------------------------------------
	      if(isset($_POST['q4']))
	      {
	      	  $ans = $_POST['ans4'];
	      	  $ques = $_POST['q4'];
	      	 if($ques === $ans)
	      	 {
	      	 	$correct++;
	      	 }
	      	 
	      }
	      else { $not++; }
#-----------------------------------------------------------
	      #----------------------------------------------------------
	      if(isset($_POST['q5']))
	      {
	      	  $ans = $_POST['ans5'];
	      	  $ques = $_POST['q5'];
	      	 if($ques === $ans)
	      	 {
	      	 	$correct++;
	      	 }
	      	 
	      }
	      else { $not++; }
#-----------------------------------------------------------
	      #----------------------------------------------------------
	      if(isset($_POST['q6']))
	      {
	      	  $ans = $_POST['ans6'];
	      	  $ques = $_POST['q6'];
	      	 if($ques === $ans)
	      	 {
	      	 	$correct++;
	      	 }
	      	 
	      }
	      else { $not++; }
#-----------------------------------------------------------
	      #----------------------------------------------------------
	      if(isset($_POST['q7']))
	      {
	      	  $ans = $_POST['ans7'];
	      	  $ques = $_POST['q7'];
	      	 if($ques === $ans)
	      	 {
	      	 	$correct++;
	      	 }
	      	 
	      }
	      else { $not++; }
#-----------------------------------------------------------
	      #----------------------------------------------------------
	      if(isset($_POST['q8']))
	      {
	      	  $ans = $_POST['ans8'];
	      	  $ques = $_POST['q8'];
	      	 if($ques === $ans)
	      	 {
	      	 	$correct++;
	      	 }
	      	 
	      }
	      else { $not++; }
#-----------------------------------------------------------
	      #----------------------------------------------------------
	      if(isset($_POST['q9']))
	      {
	      	  $ans = $_POST['ans9'];
	      	  $ques = $_POST['q9'];
	      	 if($ques === $ans)
	      	 {
	      	 	$correct++;
	      	 }
	      	 
	      }
	      else { $not++; }
#-----------------------------------------------------------
	      #----------------------------------------------------------
	      if(isset($_POST['q10']))
	      {
	      	  $ans = $_POST['ans10'];
	      	  $ques = $_POST['q10'];
	      	 if($ques === $ans)
	      	 {
	      	 	$correct++;
	      	 }
	      	 
	      }
	      else { $not++; }
// #-----------------------------------------------------------
// 	      #----------------------------------------------------------
// 	      if(isset($_POST['q11']))
// 	      {
// 	      	  $ans = $_POST['ans11'];
// 	      	  $ques = $_POST['q11'];
// 	      	 if($ques === $ans)
// 	      	 {
// 	      	 	$correct++;
// 	      	 }
	      	 
// 	      }
// 	      else { $not++; }
// #-----------------------------------------------------------
// 	      #----------------------------------------------------------
// 	      if(isset($_POST['q12']))
// 	      {
// 	      	  $ans = $_POST['ans12'];
// 	      	  $ques = $_POST['q12'];
// 	      	 if($ques === $ans)
// 	      	 {
// 	      	 	$correct++;
// 	      	 }
	      	 
// 	      }
// 	      else { $not++; }
// #-----------------------------------------------------------
// 	      #----------------------------------------------------------
// 	      if(isset($_POST['q13']))
// 	      {
// 	      	  $ans = $_POST['ans13'];
// 	      	  $ques = $_POST['q13'];
// 	      	 if($ques === $ans)
// 	      	 {
// 	      	 	$correct++;
// 	      	 }
	      	 
// 	      }
// 	      else { $not++; }
// #-----------------------------------------------------------
// 	      #----------------------------------------------------------
// 	      if(isset($_POST['q14']))
// 	      {
// 	      	  $ans = $_POST['ans14'];
// 	      	  $ques = $_POST['q14'];
// 	      	 if($ques === $ans)
// 	      	 {
// 	      	 	$correct++;
// 	      	 }
	      	 
// 	      }
// 	      else { $not++; }
// #-----------------------------------------------------------
// 	      #----------------------------------------------------------
// 	      if(isset($_POST['q15']))
// 	      {
// 	      	  $ans = $_POST['ans15'];
// 	      	  $ques = $_POST['q15'];
// 	      	 if($ques === $ans)
// 	      	 {
// 	      	 	$correct++;
// 	      	 }
	      	 
// 	      }
// 	      else { $not++; }
// #-----------------------------------------------------------
// 	      #----------------------------------------------------------
// 	      if(isset($_POST['q16']))
// 	      {
// 	      	  $ans = $_POST['ans16'];
// 	      	  $ques = $_POST['q16'];
// 	      	 if($ques === $ans)
// 	      	 {
// 	      	 	$correct++;
// 	      	 }
	      	 
// 	      }
// 	      else { $not++; }
// #-----------------------------------------------------------
// 	      #----------------------------------------------------------
// 	      if(isset($_POST['q17']))
// 	      {
// 	      	  $ans = $_POST['ans17'];
// 	      	  $ques = $_POST['q17'];
// 	      	 if($ques === $ans)
// 	      	 {
// 	      	 	$correct++;
// 	      	 }
	      	 
// 	      }
// 	      else { $not++; }
// #-----------------------------------------------------------
// 	      #----------------------------------------------------------
// 	      if(isset($_POST['q18']))
// 	      {
// 	      	  $ans = $_POST['ans18'];
// 	      	  $ques = $_POST['q18'];
// 	      	 if($ques === $ans)
// 	      	 {
// 	      	 	$correct++;
// 	      	 }
	      	 
// 	      }
// 	      else { $not++; }
// #-----------------------------------------------------------
// #----------------------------------------------------------
// 	      if(isset($_POST['q19']))
// 	      {
// 	      	  $ans = $_POST['ans19'];
// 	      	  $ques = $_POST['q19'];
// 	      	 if($ques === $ans)
// 	      	 {
// 	      	 	$correct++;
// 	      	 }
	      	 
// 	      }
// 	      else { $not++; }
// #-----------------------------------------------------------
// #----------------------------------------------------------
// 	      if(isset($_POST['q20']))
// 	      {
// 	      	  $ans = $_POST['ans20'];
// 	      	  $ques = $_POST['q20'];
// 	      	 if($ques === $ans)
// 	      	 {
// 	      	 	$correct++;
// 	      	 }
	      	 
// 	      }
// 	      else { $not++; }
// #-----------------------------------------------------------
// #----------------------------------------------------------
// 	      if(isset($_POST['q21']))
// 	      {
// 	      	  $ans = $_POST['ans21'];
// 	      	  $ques = $_POST['q21'];
// 	      	 if($ques === $ans)
// 	      	 {
// 	      	 	$correct++;
// 	      	 }
	      	 
// 	      }
// 	      else { $not++; }
// #-----------------------------------------------------------
// #----------------------------------------------------------
// 	      if(isset($_POST['q22']))
// 	      {
// 	      	  $ans = $_POST['ans22'];
// 	      	  $ques = $_POST['q22'];
// 	      	 if($ques === $ans)
// 	      	 {
// 	      	 	$correct++;
// 	      	 }
	      	 
// 	      }
// 	      else { $not++; }
// #-----------------------------------------------------------
// #----------------------------------------------------------
// 	      if(isset($_POST['q23']))
// 	      {
// 	      	  $ans = $_POST['ans23'];
// 	      	  $ques = $_POST['q23'];
// 	      	 if($ques === $ans)
// 	      	 {
// 	      	 	$correct++;
// 	      	 }
	      	 
// 	      }
// 	      else { $not++; }
// #-----------------------------------------------------------
// #----------------------------------------------------------
// 	      if(isset($_POST['q24']))
// 	      {
// 	      	  $ans = $_POST['ans24'];
// 	      	  $ques = $_POST['q24'];
// 	      	 if($ques === $ans)
// 	      	 {
// 	      	 	$correct++;
// 	      	 }
	      	 
// 	      }
// 	      else { $not++; }
// #-----------------------------------------------------------
// #----------------------------------------------------------
// 	      if(isset($_POST['q25']))
// 	      {
// 	      	  $ans = $_POST['ans25'];
// 	      	  $ques = $_POST['q25'];
// 	      	 if($ques === $ans)
// 	      	 {
// 	      	 	$correct++;
// 	      	 }
	      	 
// 	      }
// 	      else { $not++; }
// #-----------------------------------------------------------
// #----------------------------------------------------------
// 	      if(isset($_POST['q26']))
// 	      {
// 	      	  $ans = $_POST['ans26'];
// 	      	  $ques = $_POST['q26'];
// 	      	 if($ques === $ans)
// 	      	 {
// 	      	 	$correct++;
// 	      	 }
	      	 
// 	      }
// 	      else { $not++; }
// #-----------------------------------------------------------
// #----------------------------------------------------------
// 	      if(isset($_POST['q27']))
// 	      {
// 	      	  $ans = $_POST['ans27'];
// 	      	  $ques = $_POST['q27'];
// 	      	 if($ques === $ans)
// 	      	 {
// 	      	 	$correct++;
// 	      	 }
	      	 
// 	      }
// 	      else { $not++; }
// #-----------------------------------------------------------
// #----------------------------------------------------------
// 	      if(isset($_POST['q28']))
// 	      {
// 	      	  $ans = $_POST['ans28'];
// 	      	  $ques = $_POST['q28'];
// 	      	 if($ques === $ans)
// 	      	 {
// 	      	 	$correct++;
// 	      	 }
	      	 
// 	      }
// 	      else { $not++; }
// #-----------------------------------------------------------
// #----------------------------------------------------------
// 	      if(isset($_POST['q29']))
// 	      {
// 	      	  $ans = $_POST['ans29'];
// 	      	  $ques = $_POST['q29'];
// 	      	 if($ques === $ans)
// 	      	 {
// 	      	 	$correct++;
// 	      	 }
	      	 
// 	      }
// 	      else { $not++; }
// #-----------------------------------------------------------
// #----------------------------------------------------------
// 	      if(isset($_POST['q30']))
// 	      {
// 	      	  $ans = $_POST['ans30'];
// 	      	  $ques = $_POST['q30'];
// 	      	 if($ques === $ans)
// 	      	 {
// 	      	 	$correct++;
// 	      	 }
	      	 
// 	      }
// 	      else { $not++; }
// #-----------------------------------------------------------
          
          $total_attempt = $total_q - $not;
          $total_wrong = $total_q - $correct;

	      	echo '<h1>Total Question Attempt = '.$total_attempt.' / 10 question </h1>';
	      	echo '<h1 id="right">Total Correct Answer = '.$correct.' / 10 question</h1>';
	      	echo '<h1 id="Wrong">Total Wrong Answer = '.$total_wrong.'</h1>';

	      	  $date   = $_SESSION['date']; 
            $rollno = $_SESSION['rollno'];
            $sid    = $_SESSION['sid'];
            $subject = $_SESSION['subject'];
            $captureImg = $_SESSION['pic'];
	      	
             $query = "INSERT INTO `result`( `sid`,`captureImg`,`subject`, `total_question`, `total_ques_attempt`, `correct_answer`, `date`) VALUES ('$sid','$captureImg','$subject','$total_q','$total_attempt','$correct','$date')";
                               
             $query_run = mysqli_query($con,$query);
             if($query_run)
              {

                  echo '<script type="text/javascript">alert("Exam Submited Succuessfully");</script>';
	      	       
	      	         session_destroy();					
					         // unset($_SESSION['name']);
					
					  			 header("Refresh: 10; url=index.php");
			 			  }
			    else{
			  					 echo '<script type="text/javascript">alert("Error in saving result !");</script>';
			        }		

	    }

	?>

</body>
</html>