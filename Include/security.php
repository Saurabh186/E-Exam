<?php
    session_start();


	if(!$_SESSION['name'])
	{
		$_SESSION['status']="You must have to login to enter on exam !";
		header('Location: index.php');
	}

?>