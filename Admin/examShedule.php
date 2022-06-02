<?php
     include('include/header.php');

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

	<h2>Admin Panel for Online Exam Portal</h2>
	<div>
		<div class="option">
			<a href="index.php">Dashboard</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="question.php">Question</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="student.php">Student</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a class="active" href="examShedule.php">Exam Shedule</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="result.php">Results</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a id="logout"  href="adminLogout.php">Logout</a>
		</div>
	</div>

<button class="addnew" id="addnew" onclick="addnew()">Add Exam Shedule</button>
<button class="addnew" id="hides" onclick="hides()">Hide Exam Shedule</button>

	<div class="question_input" id="show">
		   <form method="POST" action="code.php" id="myForm" style="display: list-item; line-height:10px;text-decoration: none;">
		   	 <p>Branch<span class="star">*</span></p>
		   	<select name="branch">
		   		<option value="" disabled selected>Choose Branch</option>
		   		<option value="CSE">CSE</option>
		   		<option value="IT">IT</option>		   		
		   	</select>
		   	<p>Semester<span class="star">*</span></p>
		   	<select name="semester">
		   		<option value="" disabled selected>Choose Semester</option>
		   		<option value="1">1st Semester</option>
		   		<option value="2">2nd Semester</option>
		   		<option value="3">3rd Semester</option>
		   		<option value="4">4th Semester</option>
		   		<option value="5">5th Semester</option>		   		
		   		<option value="6">6th Semester</option>
		   		<option value="7">7th Semester</option>
		   		<option value="8">8th Semester</option>
		   	</select>
		   	<p>Subject<span class="star">*</span></p>
		   	<select name="subject">
		   		<option value="" disabled selected>Choose Subject</option>
		   		<option value="TOC">Theory of Computation</option>
		   		<option value="DBMS">Database Management System</option>
		   		<option value="CYBER SECURITY">CYBER SECURITY</option>
		   		<option value="INTERNET AND WEB TECHNOLOGY">Internet and Web Technology</option>
		   	</select>
		   	 <p>Exam Date<span class="star">*</span></p>
		   	 <input type="date" name="examDate" style="text-transform:uppercase" required>
		   	 <p>Time Start From<span class="star">*</span></p>
		   	 <input type="time" name="stime" required>
		   	  <p>End Start From<span class="star">*</span></p>
		   	 <input type="time" name="etime" required>
		   	
		   	 
		   	<br><br>
		   	<div class="sub_btn">
		   		<input id="s" type="submit" name="examShedule">&nbsp;&nbsp;&nbsp;
		   	    <input id="c" type="submit" value="Clear" onclick="reset()" >
		   	</div>
		   	 
		   </form>

 </div>
 <p style="color: red;font-weight:bold;margin-top: 3%;">Note: Time show : 24 Hours !</p>
<div id="question">
		    <table id="ques_diplay"  style="margin-top: 0%;">
	 			<tr>
	 				<th>S No.</th>
	 				<th>Branch</th>	 				
	 				<th>Semester</th>
	 				<th>Subject</th>
	 				<th>Date of Exam</th>
	 				<th>Staring Time</th>
	 				<th>Ending Time</th>
	 				<th>Delete</th>
	 					 				
	 			</tr>
 <?php


        $query = "SELECT * FROM `exam_schedule` ORDER BY `exam_schedule`.`date` ASC";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
 ?> 
	 			<tr>
	 				<td>
	 					<?php
	 				          static $count=1;
	 				          echo $count;
	 				          $count++; 
	 				    ?>	 				 	
	 				 </td>
	 				<td><?php echo $row["branch"]; ?></td>	 				
	 				<td><?php echo $row["semester"]; ?></td>
	 				<td><?php echo $row["subject"]; ?></td>
	 				<td><?php echo $row["date"]; ?></td>
	 				<td><?php echo $row["time_start"]; ?></td>
	 				<td><?php echo $row["time_end"]; ?></td>
	 				<td>
	 					<form method="POST" action="code.php">
	 						<input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
	 						<input type="submit" id="Deletebtn" name="examDelete" value="Delete !">
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

function hides(){
	document.getElementById("show").style.display = "none";
	document.getElementById("addnew").style.display = "block";
	document.getElementById("hides").style.display = "none";
}
</script>

</body>
</html>
