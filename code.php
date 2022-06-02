<?php
 include('include/connection.php');
 session_start();
error_reporting(0);




if (isset($_POST['start'])) 
{


        $dp = $_SESSION['pic'];
        $name =  $_POST['name'];
        $rollno = $_POST['rollNo'];
        $dob = $_POST['dob'];
                          

            $query = "SELECT * FROM `students` WHERE name ='$name' AND rollno='$rollno' AND dob='$dob' ";
            $query_run = mysqli_query($con,$query);

                if(mysqli_num_rows($query_run)>0)
                {    

                        echo '<script type="text/javascript"> console.log("1"); </script>';

                        $row = mysqli_fetch_assoc($query_run);

                        $semester = $row['semester']; 
                        $branch = $row['branch']; 
                        $sid = $row['sid'];

                        $query = "UPDATE `students` SET `dp`='$dp' WHERE rollno = '$rollno' ";
                        $query_run = mysqli_query($con,$query);

                        if($query_run)
                        {           
                                //unset($_SESSION['pic']);      

                                 $date = date("Y-m-d");                          

                                // Asia/Kolkata is for INDIA
                                date_default_timezone_set('Asia/Kolkata');                               

                                // showing current date and time of INDIA;
                                $currentTime =  date( 'H:i:s', time ());
                               
                                $query = "SELECT * FROM `exam_schedule` 
                                          WHERE `date` ='$date' AND `semester` = '$semester' AND `branch` = '$branch' ";
                                $query_run = mysqli_query($con,$query);

                                if(mysqli_num_rows($query_run) > 0)
                                {
                                  echo'   <script type="text/javascript"> console.log("2"); </script>';

                                  $row = mysqli_fetch_assoc($query_run);
                                  
                                  $st = $row['time_start']; 
                                  echo '<script type="text/javascript"> alert("'.$st.'"); </script>';
                                  $et = $row['time_end'];
                                  echo '<script type="text/javascript"> alert("'.$et.'"); </script>';

                                       if(($st <= $currentTime) && ($et >= $currentTime))
                                         {
                                          echo '<script type="text/javascript"> console.log("3"); </script>';
                                             $_SESSION['subject']= $row['subject']; 
                                             $_SESSION['date']= $date;
                                             $_SESSION['name']= $name;
                                             $_SESSION['sid']= $sid;
                                             $_SESSION['rollno']= $rollno; 
                                             $_SESSION['branch']= $row['branch'];
                                             $_SESSION['subject']= $row['subject'];    
                                              
                                             header('Location: start_exam.php');
                                         } 
                                      else
                                         { 
                                             echo '<script type="text/javascript"> console.log("4s"); </script>';
                                        
                                              $_SESSION['status']= "Ether you are hurry or late to login !";
                                              echo $st." and ". $et . " and " . $currentTime;
                                         }  
                                  }
                             else {
                                              echo '<script type="text/javascript"> console.log("3s"); </script>';
                                              $_SESSION['status']= "Today is not your Exam !";
                                              header('Location: index.php'); 
                                   } 
                        } 

                       
                        }
                else{
                        echo '<script type="text/javascript"> console.log("1s"); </script>';
                        $_SESSION['status']= "Data Not Found in our Records !";
                        header('Location: index.php'); 

                    }   
    }

else
    {
        echo "NO PROCESS........";
        header("Refresh: 5; url=index.php");
    }


?>