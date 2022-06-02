<?php
session_start();
// new filename
$filename = 'pic_'.date('YmdHis') . '.jpeg';

$url = '';
if( move_uploaded_file($_FILES['webcam']['tmp_name'],'upload/'.$filename) ){
 $url = "upload/". $filename;
}

// Return image url
$_SESSION['pic']= $url;

?>

            <!-- $filename = $_FILES ["upload"] ["name"];
             $tempname = $_FILES ["upload"] ["tmp_name"];
             $folder = "student photo/".$filename;
             $dp = $folder; --> 