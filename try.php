<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php
// Asia/Kolkata is for INDIA
date_default_timezone_set('Asia/Kolkata');
$t = date_create("2022-04-15 17:46:50");
// showing current date and time of INDIA;
// echo date( 'd M Y | h:i', time ());
echo date_format($t,"d M Y | H:i");

$a = "10:00:00";
$b = "22:00:00";
$currentTime = "06:14:33";

// date("d M Y | H:i:s", time ())

if($a <= $b && $b >= $a)
{
	echo "it works";
}

?>
  
<button onclick="clearr()">clear</button>
  <script type="text/javascript">
  	
  	localStorage.setItem("name", "nirved");

  	function clearr(){
  		localStorage.clear();
  	}

  </script>


</body>
</html>