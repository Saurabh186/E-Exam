<?php
include('include/connection.php');
session_start();
error_reporting(0);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Online Exam Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="logo/logo.png" type="image/icon type">

    <!-- <link rel="stylesheet" type="text/css" href="css/main_page.css"> -->

    <style type="text/css">
    body {
        padding: 0px 10px;
        background-image: url(bg.png);
        background-position: all;
        background-repeat: no-repeat;
        margin: 0;
        height: 90vh;
    }

    .head1 h1 {
        font-size: 55px;
        margin: 0;
        text-align: center;
        color: #fff;
        text-shadow: 2px 2px blue;
    }

    .head2 {
        font-size: 35px;
        color: blue;
        text-align: center;
        font-weight: bold;
        font-family:

    }

    form {
        width: 650px;
        height: auto;
        max-height: 520px;
        padding-top: 15px;
        border: none;
        border-top: 1px solid white;
        border-bottom: 1px solid white;
        border-left: 1px solid red;
        border-right: 1px solid red;
        background-color: rgba(0, 0, 0, .2);
        border-radius: 10px;
        margin: 0 auto;
    }

    form .form_tag {
        margin: 80px;
        margin-top: 25px;
        margin-left: 30%;
    }

    form .form_tag p {
        font-size: 18px;
        line-height: 0px;
        font-family: Microsoft YaHei UI Light;
        font-weight: bold;
    }

    form .form_tag input[type=text] {
        border-bottom: 1px solid red;
        border-top: none;
        border-left: none;
        border-right: none;
        padding: 8px 8px;
        background-color: transparent;
        outline: none;
        width: 70%;
        margin: 0;
        font-size: 16px;
        color: blue;

    }

    form input[type=submit] {
        display: inline-block;
        padding: 10px 20px;
        width: 280px;
        margin: 0 auto;
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

    form input[type=submit]:hover {
        background-color: #2E86C1;
    }

    form input[type=submit]:active {
        background-color: #3e8e41;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
    }




    #my_camera {
        width: 190px;
        height: auto;
        border: 2px solid #000;
        border-radius: 10px;
        margin: 0 auto;
        text-align: center;
        background-color: #000;
        padding: 2px 0 2px 0;
        margin-top: 2px;
        margin-bottom: 0;
        z-index: -1;
    }

    button {
        width: auto;
        height: 26px;
        margin-left: 44%;
        margin-top: 2px;
        outline: none;
        background-color: transparent;
        cursor: pointer;
        border: 4px solid #3498DB;
        border-radius: 20px;
        border-style: double;
        z-index: 10;
    }

    button:hover {
        border: none;
    }

    .fa-camera {
        font-size: 16px;
        padding-left: 30px;
        color: #3498DB;
        padding-right: 30px;
        margin-bottom: 2px;
    }

    .fa-camera:hover {
        color: green;
        transform: scale(1.3);
    }

    #results {

        position: fixed;
        float: right;
        margin-top: 2rem;
        z-index: 11;
}    
    </style>

</head>

<body>
    <?php
           if($_SESSION['status']) 
          	{
							 echo ' <script type="text/javascript"> alert("'.$_SESSION['status'].'") </script> ';
    				   unset($_SESSION['status']);
         		}
	?>

    <div class="head1">
        <h1>Welcome to Online Exam Portal </h1>
    </div>
    <div class="head2">Enter Your Details Here</div>
    <div>
        <div class="results" id="results"></div>

        <form method="POST" action="code.php" enctype="multipart/form-data">
            <div id="my_camera"></div>


            <button name="c" onClick="take_snapshot()"><i class="fa fa-camera" aria-hidden="true"></i></button>
            <!-- <input type=button value="Configure" onClick="configure()"> -->
            <!-- <input type=button value="Save Snapshot" > -->

            <div class="form_tag">
                <p>Student Name</p>
                <input type="text" name="name" placeholder="Enter Full Name" required>
                <p>Date Of Birth</p>
                <input type="text" name="dob" placeholder="DD-MM-YYYY" minlength="10" maxlength="10" required>
                <p>Roll No.</p>
                <input type="text" name="rollNo" maxlength="12" minlength="12" required>
                <br> <br>
                <input type="submit" onclick="saveSnap()" name="start" value="Start Exam">
            </div>
        </form>
    </div>

    <script type="text/javascript" src="js/webcam.min.js"></script>

    <!-- Code to handle taking the snapshot and displaying it locally -->
    <script language="JavaScript">
    // Configure a few settings and attach camera

    Webcam.set({
        width: 220,
        height: 160,
        image_format: 'jpeg',
        jpeg_quality: 90
    });
    Webcam.attach('#my_camera');


    // preload shutter audio clip
    var shutter = new Audio();
    shutter.autoplay = false;
    shutter.src = navigator.userAgent.match(/Firefox/) ? 'shutter.ogg' : 'shutter.mp3';

    function take_snapshot() {
        // play sound effect
        shutter.play();


        // take snapshot and get image data
        Webcam.snap(function(data_uri) {
            // display results in page
            document.getElementById('results').innerHTML =
                '<img id="imageprev" src="' + data_uri + '"/>';

        });
        // Webcam.reset();
    }

    function saveSnap() {
        // Get base64 value from <img id='imageprev'> source
        var base64image = document.getElementById("imageprev").src;

        Webcam.upload(base64image, 'upload.php', function(code, text) {
            // console.log('Save successfully'); 
        });

    }
    </script>

</body>
</html>