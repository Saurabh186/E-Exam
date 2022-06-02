<?php
    session_start();


	if(!$_SESSION['adminName'])
	{
		$_SESSION['status']="Admin Section Login is Required !";
		header('Location: adminLogin.php');
	}

?>