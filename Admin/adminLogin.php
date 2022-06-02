<?php
  session_start();
  error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Login</title>

	<style type="text/css">
		body  
{  
    margin: 0;  
    padding: 0;  
    background-color: #fff;  
    font-family: 'Arial';  
}  
.login{  
        width: 382px;  
        overflow: hidden;  
        margin: auto;  
        margin: 20 0 0 450px;  
        padding: 80px;  
        background:yellowgreen;  
        border-radius: 15px ;  
          
}  
h2{  
    text-align: center;  
    color: #277582;  
    padding: 20px;  
}  
label{  
    color: #000;  
    font-size: 22px;
    font-family: sans-serif; 
 }  

#Uname{  
    width: 100%;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
}  
#Pass{  
    width: 100%;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
      
}  
#log{  
    width: 200px;  
    height: 30px;  
    margin-left: 25%;  
    border: none;  
    border-radius: 17px;  
    padding-left: 7px;  
    color: black;    
}  
span{  
    color: white;  
    font-size: 17px;  
}  
 
	</style>
</head>
<body>

    <?php
            $status = $_SESSION['status'];
            if($_SESSION['status'])
            {
                echo ' <script type="text/javascript"> alert("'.$status.'") </script> ';
            }
            unset($_SESSION['status']);

    ?>        
			    <h2>Admin Login</h2><br>    
    <div class="login">    
        <form id="login" method="POST" action="code.php">    
                <label>Your Email  </label>    
                <input type="text" name="email" id="Uname" placeholder="john@mitindore.co.in ">    
                <br><br>    
                <label>Password </label>    
                <input type="Password" name="password" id="Pass" placeholder="Password">    
                <br><br>    
                <input type="submit" name="adminLogin" id="log" value="LogIn Here">       
                <br><br>              
        </form>     
</div>


</body>
</html>