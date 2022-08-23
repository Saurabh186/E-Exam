<?php
session_start();
include('../include/connection.php');
// error_reporting(0);
?>
 <?php 
                if (isset($_POST['questionSave'])) 
                {
                    //echo ' <script type="text/javascript"> alert("hello javascript") </script> ';
                        

                   
                    
                    $question = $_POST['question'];
                    $a = $_POST['a'];
                    $b = $_POST['b'];
                    $c = $_POST['c'];
                    $d = $_POST['d'];
                    $answer = $_POST['answer'];

                    $branch= $_POST['branch'];
                    $sem = $_POST['semester'];
                    $sub= $_POST['subject'];

                        //SQL Query

                        $query = "SELECT * FROM `mcq` WHERE question ='$question' AND answer='$answer'";
                        $query_run = mysqli_query($con,$query);

                        if(mysqli_num_rows($query_run)>0)
                        {
                            //user exist
                            /*echo ' <script type="text/javascript"> alert("Question Already Saved") </script> ';*/                           
                             $_SESSION['status']= "Question Already Saved";
                              header('Location: question.php');
                        }
                        else
                        {
                            $query = "INSERT INTO `mcq`(`id`, `branch`, `semester`, `subject`, `question`, `a`, `b`, `c`, `d`, `answer`) VALUES ('','$branch','$sem','$sub','$question','$a','$b','$c','$d','$answer')";
                            $query_run = mysqli_query($con,$query);
                            if($query_run)
                            {
                                //USer Registered                                
                                $_SESSION['question_saved']="Question- ".$qn.", is saved successfully";                           
                                header('Location: question.php');

                             } 
                            else
                            {
                                /*echo ' <script type="text/javascript"> alert("Something Went Wrong !") </script> ';*/
                                $_SESSION['status']= "Something Went Wrong !";
                                header('Location: question.php');
                            }
                        }

                } 


     if (isset($_POST['studentSave'])) 
                {
                    //echo ' <script type="text/javascript"> alert("hello javascript") </script> ';
                        

                   
                    $name = $_POST['name'];                 
                    $dob = $_POST['dob'];
                    $rollno = $_POST['rollno'];
                    $branch = $_POST['branch'];
                    $semester = $_POST['semester'];


                    $newDate = date("d-m-Y", strtotime($dob)); 
                    $name = strtoupper($name);
                    $rollno = strtoupper($rollno);
                   

                        //SQL Query

                        $query = "SELECT * FROM `students` WHERE name ='$name' AND dob='$newDate' AND rollno='$rollno'";
                        $query_run = mysqli_query($con,$query);

                        if(mysqli_num_rows($query_run)>0)
                        {
                            //user exist
                            /*echo ' <script type="text/javascript"> alert("Question Already Saved") </script> ';*/                           
                             $_SESSION['stu_status']= "Student Detail Already Saved";
                              header('Location: student.php');
                        }
                        else
                        {
                            $query = "INSERT INTO `students`(`name`, `dob`, `rollno`, `semester`, `branch`) VALUES ('$name','$newDate','$rollno','$semester','$branch')";
                            $query_run = mysqli_query($con,$query);
                            if($query_run)
                            {
                                //USer Registered                                
                                $_SESSION['stu_saved']=$name." is saved successfully";                           
                                header('Location: student.php');

                             } 
                            else
                            {
                                /*echo ' <script type="text/javascript"> alert("Something Went Wrong !") </script> ';*/
                                $_SESSION['stu_status']= "Something Went Wrong !";
                                header('Location: student.php');
                            }
                        }

                }    

                if(isset($_POST['examShedule']))
                {
                    $branch= $_POST['branch'];
                    $sem = $_POST['semester'];
                    $sub= $_POST['subject'];
                    $examDate = $_POST['examDate'];
                    $stime = $_POST['stime'];
                    $etime = $_POST['etime'];


                    $query = "INSERT INTO `exam_schedule`(`id`, `branch`, `semester`, `subject`, `date`, `time_start`, `time_end`) VALUES ('','$branch','$sem','$sub','$examDate', '$stime','$etime')";
                            $query_run = mysqli_query($con,$query);
                            if($query_run)
                            {
                                //USer Registered                                
                                $_SESSION['success']=$name." is saved successfully";                           
                                header('Location: examShedule.php');

                             } 
                            else
                            {
                                /*echo ' <script type="text/javascript"> alert("Something Went Wrong !") </script> ';*/
                                $_SESSION['status']= "Failed to save Details !";
                                header('Location: examShedule.php');
                            }


                }   


                if (isset($_POST['adminLogin'])) 
                {
                    $email = $_POST['email']; 
                    $password = $_POST['password']; 


                     //SQL Query

                        $query = "SELECT * FROM `admin` WHERE email ='$email' AND password='$password'";
                        $query_run = mysqli_query($con,$query);   

                        if(mysqli_num_rows($query_run)>0)
                        {
                            
                               
                                  //echo'   <script type="text/javascript"> console.log("3"); </script>';
                                  $row = mysqli_fetch_assoc($query_run);
                                  $_SESSION['adminName']= $row['name'];                                   
                                  header('Location: index.php'); 

                        }   
                        else{
                             $_SESSION['status']= "Email or password is Invaild!!!!!!";
                             header('Location: adminLogin.php');
                        }           
                             
                }


                

                if (isset($_POST['delete'])) 
                {
                    $id = $_POST['sid'];

                    $query = "DELETE  FROM `students` WHERE sid='$id'";
                     $query_run = mysqli_query($con,$query);   

                        if($query_run)
                        {
                            $_SESSION['del_status']= "Deleted successfully !";
                            header('Location: student.php');
                        }
                        else{
                            $_SESSION['del_status']= "Not Delete, some error occur";
                            header('Location: student.php');
                        }
                }

                if (isset($_POST['examDelete'])) 
                {
                    $id = $_POST['id'];

                    $query = "DELETE  FROM `exam_schedule` WHERE id='$id'";
                     $query_run = mysqli_query($con,$query);   

                        if($query_run)
                        {
                            $_SESSION['del_status']= "Deleted successfully !";
                            header('Location: examShedule.php');
                        }
                        else{
                            $_SESSION['del_status']= "Not Delete, some error occur";
                            header('Location: examShedule.php');
                        }
                }

                 if (isset($_POST['Qdelete'])) 
                {
                    $id = $_POST['id'];

                    $query = "DELETE  FROM `mcq` WHERE id='$id'";
                     $query_run = mysqli_query($con,$query);   

                        if($query_run)
                        {
                            $_SESSION['del_status']= "Deleted successfully !";
                            header('Location: question.php');
                        }
                        else{
                            $_SESSION['del_status']= "Not Delete, some error occur";
                            header('Location: question.php');
                        }
                }

                if (isset($_POST['uploadcsv']))
                {

                     $file = $_FILES["file"]["tmp_name"]; //excel file upload
                     $file_open = fopen($file,"r"); //code to open file

                        $count = 0;
                        while(($csv = fgetcsv($file_open, 1000, ",")) !== false)
                        {
                            $branch = $csv[0];
                            $semester = $csv[1];
                            $subject = $csv[2];
                            $question = $csv[3];
                            $a = $csv[4];
                            $b = $csv[5];
                            $c = $csv[6];
                            $d = $csv[7];
                            $answer = $csv[8];
                            
                            $count++;                     

                         if($count>1)
                          {  
                                                             
                                $query = "INSERT INTO `mcq`( `branch`, `semester`, `subject`, `question`, `a`, `b`, `c`, `d`, `answer`) VALUES ('$branch','$semester','$subject','$question','$a','$b','$c','$d','$answer')";

                                $query_run = mysqli_query($con ,$query);
                                
                               if(!isset($query_run))
                                 {
                                 echo "<script type=\"text/javascript\">
                                     alert(\"Invalid File:Please Upload CSV File.\");
                                     window.location = \"question.php\"
                                     </script>";    
                                 }
                                 else {
                                        echo "<script type=\"text/javascript\">
                                        alert(\"CSV File has been successfully Imported.\");
                                        window.location = \"question.php\"
                                    </script>";
                                    }
                                   
                          }    

                        }
                        echo "end".'<br>'; 
                        fclose($file_open);

                }

                if(isset($_POST['uploadstudent']))
                {
                    $file = $_FILES["file"]["tmp_name"]; //excel file upload
                     $file_open = fopen($file,"r"); //code to open file

                        $count = 0;
                        $date= "";
                        $word = "-";

                        while(($csv = fgetcsv($file_open, 1000, ",")) !== false)
                        {
                            $name1 = $csv[0];
                            $name = strtoupper($name1);
                            $dob1 = $csv[1];
                            
                            if(strpos($dob1, $word) !== false)
                            {
                                $dob=$dob1;
                            } 
                            else
                            {
                                
                                $date= $date.", ".$dob1.", ";
                                break;
                            }

                            $rollno1 = $csv[2];
                            $rollno = strtoupper($rollno1);
                            $semester = $csv[3];
                            $branch = $csv[4];
                                                    
                            $count++;                     

                         if($count>1)
                          {  
                                
                            
                                $query = "INSERT INTO `students`(`name`, `dob`, `rollno`, `semester`, `branch`) VALUES ('$name','$dob','$rollno','$semester','$branch')";

                                $query_run = mysqli_query($con,$query);
                                
                               if(!isset($query_run))
                                 {
                                 echo "<script type=\"text/javascript\">
                                     alert(\"Invalid File:Please Upload CSV File.\");
                                     window.location = \"student.php\"
                                     </script>";    
                                 }
                                 else {
                                        echo "<script type=\"text/javascript\">
                                        alert(\"CSV File has been successfully Imported.\");
                                        window.location = \"student.php\"
                                    </script>";
                                    }
                                 
                                 
                                   
                          }    

                        }
                        
                                     echo "<script type=\"text/javascript\">
                                     alert(\"Invalid DOB:DOB is not corret format, use(-) instead of (/). [".$date."]\");
                                     window.location = \"student.php\"
                                     </script>";  

                                                                      
                        fclose($file_open);

                }

         ?>