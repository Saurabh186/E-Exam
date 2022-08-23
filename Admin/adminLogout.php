<?php
    include('include/security.php');
    session_destroy();
    echo '<script type="text/javascript">localStorage.clear();</script>';
    unset($_SESSION['adminName']);
    echo "<center><h2>Your are going to Logout...</h2></center>";
   // header('Location: adminLogin.php');
    header( "Refresh:1; url=adminLogin.php", true, 303);
?>
