<?php
 include('include/security.php');
 include('include/connection.php');
 
 //error_reporting(0);

// $start=$_SESSION['time_start'];
// $end=$_SESSION['time_end'];
// $startTime= strtotime($start) - strtotime('00:00:00');
// $endTime= strtotime($end) - strtotime('00:00:00');
// echo($startTime . "<br>");
// echo($endTime . "<br>");
// $cTime = date("h:i:s");
// $currentTime = strtotime($cTime) - strtotime('00:00:00');
// echo $cTime."<br>";
// echo $currentTime."<br>";

//   if(($currentTime<=$endTime) && ($currentTime>=$startTime))
//   {
//     session_destroy();
//     unset($_SESSION['name']);
//   }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Onine Exam Portal</title>
  <link rel="icon" href="logo/logo.png" type="image/icon type">	<style type="text/css">
		body{

	       width: 98.5%;		
	       background-image: url(bg.png);
	       background-position: all;
	       background-repeat: no-repeat;
	       margin: 0;
	       height: 90vh;
         font-family: 'Lato', sans-serif;
         background: #2f2f2f;
         cursor: default;
         user-select: none;
         -webkit-user-select: none;
		}

.all{
	display: flex;
  height: 76vh;
  overflow: auto;

}
/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: yellow; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: slategrey; 
  border-radius: 20%;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}

.mainContent{
  display: inline-block;
  width: 100%;

}

	.question{
		float: left;
		padding: 10px 10px;
		/*border: 1px solid #000*/;
		width: 91%;
		height: 100%;
	}
	.view{
		float: right;
    width: 23%;
    margin-left: 15px;
		padding: 10px 10px;
    margin-top:2%;
		border: 4px solid whitesmoke;
		background-color: grey;
	}	
	.head{
		padding: 10px 10px;
		top: 0;
		text-align: center;
		width: 100%;
		height: auto;

	}
.qcontainer span{display: flex;}
.qcontainer input[type=radio]{
	width: 100px;
}

.quest{color: red;
	    font-weight: 16px;
	    font-weight: bold;}
/*-----------check Box css code------------*/

h2 {
  font-size: 3rem;
  font-weight: bold;
  margin: 0 0 3rem;
}

.bulgy-radios {
  width: 98%;
  margin-left: 20px;
  background: #fff;
  padding: 3rem 0 3rem 5rem;
  border-radius: 1rem;  
  margin-top: 10px;  
  }
.bulgy-radios span {
  display: list-item;
  padding-top: 10px;
  list-style: none;
} 

  /* Labels for checked inputs */
input:checked + label {
  color: green;
  font-weight: bold;
}

/* Radio element, when checked */
/*input[type="radio"]:checked {
  box-shadow: 0 0 0 3px orange;
}*/

.view p {color: Yellow; text-align: center;font-size: 22px;}

.qbtn a{
  text-decoration: none;
  color: white;
  font-weight: bold;
  position: sticky;
  display: inline-block;
  padding: 1rem 4rem 1rem 4rem;
}
.qbtn a:hover{color: blue;cursor: pointer;}
.submit_btn{
  padding: 10px 10px;
  margin-bottom: 3rem;
  
}

form input[type=submit]{
    padding: 10px 10px;
    width: 180px;
    color: #fff;
    background-color: green;
    border: none;
    border-radius: 6px;
    font-size: 20px;
    height: 40px;
    float: right;
    margin-right: 60px;    
}
#hide{display: none;}

</style>

</head>
<body>
 
	<div class="head">
      <h1 style="color: #fff;text-align: center;"><?php echo $_SESSION['subject']; ?></h1>
      <span style="text-align: center;font-size: 42px;"> &#9203;</span>
 </div>

<div class="mainContent">

   <div class="view">
    <p>All Question</p><br>
    <span class="qbtn">
      <?php
            for($i=1;$i<=10;$i++)
            {
              echo '<a id="q" href="#'.$i.'">Q - '.$i.' </a>';
            }
      ?>
      
    </span>
     
  </div> 


<div class="all">
	<div class="question">
		<div class="qcontainer">
 <form method="POST" action="result.php">  
<?php

        $subject = $_SESSION['subject']; 
        $query = "SELECT * FROM `mcq` WHERE subject = '$subject' LIMIT 10";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
        ?> 
		
				<div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
		  <p class="quest" id="<?php 
          static $count=1;
           echo $count;
           $count++; 
    ?>">
        Question :
         <?php
           
           echo $count-1;
          
          ?>          
      </p>
  <h3 id="bulgy-radios-label"><?php echo $row["question"]; ?></h3>
  <span>
    <input type="radio" name="q<?php echo $count-1; ?>" id="a<?php echo $count-1; ?>" value="<?php echo $row["a"]; ?>" />    
    <label for="a<?php echo $count-1; ?>"> a) <?php echo $row["a"]; ?> </label>
  </span>
  <span>
    <input type="radio" name="q<?php echo $count-1; ?>" id="b<?php echo $count-1; ?>" value="<?php echo $row["b"]; ?>" />    
    <label for="b<?php echo $count-1; ?>"> b) <?php echo $row["b"]; ?> </label>
 </span>
 <span>
    <input type="radio" name="q<?php echo $count-1; ?>" id="c<?php echo $count-1; ?>" value="<?php echo $row["c"]; ?>" />    
    <label for="c<?php echo $count-1; ?>"> c) <?php echo $row["c"]; ?> </label>
</span>
<span>
    <input type="radio" name="q<?php echo $count-1; ?>" id="d<?php echo $count-1; ?>" value="<?php echo $row["d"]; ?>" />    
    <label for="d<?php echo $count-1; ?>"> d) <?php echo $row["d"]; ?> </label>  
</span>  
  <input type="text" id="hide" name="ans<?php echo $count-1; ?>" value="<?php echo $row["answer"]; ?>" />
  </div>


<?php
  }
}
?>
<br><br>
<div class="submit_btn">
  <input  type="submit" name="save_answer" value="Submit Answer">
</div>
   
</form> 				    
		</div>
	</div>

</div>

</div>


<script language=JavaScript>
<!--
var message="Hosiyari nhi beta...! ";
///////////////////////////////////
function clickIE4(){
if (event.button==2){
alert(message);
return false;
}
}
function clickNS4(e){
if (document.layers||document.getElementById&&!document.all){
if (e.which==2||e.which==3){
alert(message);
return false;
}
}
}
if (document.layers){
document.captureEvents(Event.MOUSEDOWN);
document.onmousedown=clickNS4;
}
else if (document.all&&!document.getElementById){
document.onmousedown=clickIE4;
}
document.oncontextmenu=new Function("alert(message);return false")
// ->
</script>
</body>
</html>

<!-- 

<?php
// $start=$_SESSION['time_start'];
// $end=$_SESSION['time_end'];
// $startTime= strtotime($start) - strtotime('00:00:00');
// $endTime= strtotime($end) - strtotime('00:00:00');
// echo($startTime . "<br>");
// echo($endTime . "<br>");
// $cTime = date("h:i:s");
// $currentTime = strtotime($cTime) - strtotime('00:00:00');
// echo $cTime."<br>";
// echo $currentTime."<br>";
//   if(($currentTime<=$endTime) && ($currentTime>=$startTime))
//   {
//     session_destroy();
//     unset($_SESSION['name']);
//   }
    
?>

 -->