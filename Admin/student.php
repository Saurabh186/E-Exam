
<?php
     include('include/header.php');
?>
<script>
function showUser(str) {
	//var str = document.getElementById('sid').value;
  if (str == "") {
    document.getElementById("studentRecord").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("studentRecord").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","ajax.php?q="+str,true);
    xmlhttp.send();
  }
}
function updateStudent(sid) {
	//var str = document.getElementById('sid').value;
  if (sid == "") {
    document.getElementById("studentRecord").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("studentRecord").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","ajax.php?q="+sid,true);
    xmlhttp.send();
  }
}
</script>
 <?php

            $status = $_SESSION['stu_status'];
            if($_SESSION['stu_status'])
            {
                echo ' <script type="text/javascript"> alert("'.$status.'") </script> ';
            }
            unset($_SESSION['stu_status']);

            $status2 = $_SESSION['del_status'];
            if($_SESSION['del_status'])
            {
                echo ' <script type="text/javascript"> alert("'.$status2.'") </script> ';
            }
            unset($_SESSION['del_status']);

            $stu_saved = $_SESSION['stu_saved'];
            if($_SESSION['stu_saved'])
            {
                echo ' <script type="text/javascript"> alert("'.$stu_saved.'") </script> ';
            }
            unset($_SESSION['stu_saved']);
    ?>
        <style type="text/css">
    	.upload-form {
    		width: 100%;
    		padding: 40px 20px 40px 20px;

    	}

    	.upload-form form {
    		display: flex;
    	}
    	.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 8px 16px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 8px;
  margin: 0px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}

.upload-form form input[type=file]::file-selector-button {
  border: 2px solid #008CBA;
  padding: .2em .4em;
  border-radius: .2em;
  background-color:  white;
  transition: 1s;
  font-size: 16px;
  margin-top: 3px;
  cursor: pointer;
}

.upload-form form input[type=file]::file-selector-button:hover {
  background-color: #008CBA;
  border: 2px solid #008CBA;
}
hr{margin-top: 4rem;
     margin-bottom: 2rem;
     width: 70%;
 }

 .link{padding: 12px 0;
  
  text-align: center;}

 .link a{
 	color:red; text-decoration: none;line-height: 20px;
 }



    	.upload-form form p{margin-right: 2rem;}

    </style>

  
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Student Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div id="studentRecord"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

	<h2>Admin Panel for Online Exam Portal</h2>
	<div>
		<div class="option">
			<a href="index.php">Dashboard</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="question.php">Question</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a class="active" href="student.php">Student</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="examShedule.php">Exam Shedule</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="result.php">Results</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a id="logout"  href="adminLogout.php">Logout</a>
		</div>
	</div>
<button class="addnew" id="addnew" onclick="addnew()">Add New Student</button>
<button class="addnew" id="hides" onclick="hides()">Hide Options</button>
	<div class="question_input" id="show">
		   <form method="POST" action="code.php" id="myForm" style="display:block; list-item; line-height:10px;text-decoration: none;">
		   	 <p>Student Name<span class="star">*</span></p>
		   	 <input type="text" name="name" style="text-transform:uppercase" required>
		   	 <p>DOB<span class="star">*</span></p>
		   	 <input type="date" name="dob" placeholder="DD-MM-YYYY" maxlength="10" minlength="10" required>
		   	 <p>Roll No.<span class="star">*</span></p>
		   	 <input type="text" name="rollno" style="text-transform:uppercase" maxlength="12" minlength="12" required>
		   	 <p>Branch<span class="star">*</span></p>
		   	 <select name="branch" id="list" required>
		   	 	        <option value="" disabled selected>Choose Branch</option>
		   	 	        <option value="CSE">CSE</option>
		   	 			<option value="IT">IT</option>
		   	 </select>
		   	 <p>Semester<span class="star">*</span></p>
		   	 <select name="semester" id="list" required>
		   	 	        <option value="" disabled selected>Choose Semester</option>		   	 	       
		   	 			<option value="1">1st Semester</option>
		   	 			<option value="2">2nd Semester</option>
		   	 			<option value="3">3rd Semester</option>
                        <option value="4">4th Semester</option>
                        <option value="5">5th Semester</option>
                        <option value="6">6th Semester</option>
                        <option value="6">7th Semester</option>
                        <option value="6">8th Semester</option>
		   	 </select>
		   	 
		   	<br><br>
		   	<div class="sub_btn">
		   		<input id="s" type="submit" name="studentSave">&nbsp;&nbsp;&nbsp;
		   	    <input id="c" type="submit" value="Clear" onclick="reset()" >
		   	</div>
		   	 
		   </form>

		    <hr>
		  <div class="link">
		   <a  href="Doc/Sample_Student.pdf" download>Click here to Download Sample PDF</a><br>
		   <a style="color:blue;" href="Doc/Sample_Students_upload.csv" download>Click here to Download Sample Excel CSV File</a>
		</div>

		   <div class="upload-form">
		   	
		   			<form action="code.php" method="POST" enctype="multipart/form-data" >
		   			    <p>Upload CSV File: </p>		
		         		<input type="file" name="file" required />
		         		<input type="submit" class="button button2" name="uploadstudent" value="Upload" >
	        		</form>
		   </div>

 </div>
<div id="question">
		    <table id="ques_diplay" >
	 			<tr>
	 				<th>S No.</th>
	 				<th>Student Name</th>
	 				<th>DOB</th>
	 				<th>Roll No</th>
	 				<th>Semester</th>
	 				<th>Branch</th>
	 				<th>Delete</th>
	 				<th>Update</th>
	 				
	 			</tr>
 <?php


        $query = "SELECT * FROM `students` ORDER BY `students`.`sid` ASC";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
 ?> 
	 			<tr>
	 				<td><?php
	 				 static $count=1;
	 				 echo $count;
	 				 $count++;
	 				?></td>
	 				<td><?php echo $row["name"]; ?></td>
	 				<td><?php echo $row["dob"]; ?></td>
	 				<td><?php echo $row["rollno"]; ?></td>
	 				<td><?php echo $row["semester"]. " Sem"; ?></td>
	 				<td><?php echo $row["branch"]; ?></td>
	 				<td>
	 					<form method="POST" action="code.php">
	 						<input type="hidden" name="sid" value="<?php echo $row["sid"]; ?>">
	 						<input type="submit" id="Deletebtn" name="delete" value="Delete !">
	 					</form>
	 						
	 				</td>
	 				<td>
	 					<form >
	 						<input type="button" 
	 						       onclick="showUser(this.id)" 
	 						       id="<?php echo $row["sid"]; ?>" 
	 						       class="Deletebtn"
	 						       style="background-color:green;" 
	 						       value="Update" 
	 						       data-toggle="modal" 
	 						       data-target="#exampleModalCenter">
	 					</form>
	 				</td>
	 				
	 			</tr>
	 			<?php
	 				 }
	 			  }
	 			?>
	 </table>
</div>

	



<script type="text/javascript">
	
	
	function reset() {
  document.getElementById("myForm").reset();
}

function addnew(){
	document.getElementById("show").style.display = "block";
	document.getElementById("hides").style.display = "block";
	document.getElementById("addnew").style.display = "none";

}
function hides()
{
	document.getElementById("show").style.display = "none";
	document.getElementById("addnew").style.display = "block";
	document.getElementById("hides").style.display = "none";
}



</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>
