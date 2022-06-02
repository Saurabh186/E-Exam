<?php
     include('include/header.php');    
  ?>

	<h2>Admin Panel for Online Exam Portal</h2>
	<div>
		<div class="option">
			<a href="index.php">Dashboard</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="question.php">Question</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="student.php">Student</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="examShedule.php">Exam Shedule</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a class="active" href="result.php">Results</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a id="logout"  href="adminLogout.php">Logout</a>
		</div>
	</div>


	<div class="container-fluid">
		

	 <table id="ques_diplay" >
	 			<tr>
	 				<th>S No</th>
	 				<th>Capture Img</th>
	 				<th class="leftText">Student</th>
	 				<th>Subject</th>
	 				<th>Date of Exam</th>
	 				<th>Total Question</th>
	 				<th>Question Attempt</th>
	 				<th>Correct Answers</th>
	 				<th>Result</th>
	 					 				
 <?php

        $query = "SELECT * FROM `students` RIGHT JOIN `result` ON students.sid = result.sid;";
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
	 				<td>	 					
	 					<img class="captureImg" src="../<?php echo $row['captureImg']; ?>">	 						
	 				</td>
	 				<td class="leftText"><?php echo $row["name"]; ?></td>
	 				<td><?php echo $row["subject"]; ?></td>
	 				<td><?php echo $row["date"]; ?></td>
	 				<td><?php echo $row["total_question"]; ?></td>
	 				<td><?php echo $row["total_ques_attempt"]; ?></td>
	 				<td><?php echo $row["correct_answer"]; ?></td>
	 				<td>
	 					<?php 

	 							if($row["correct_answer"] > 3){
	 								echo '<b style="color:green">PASS</b>';
	 							}
	 							else{
	 								echo '<b style="color:red">FAIL</b>';
	 							}
	 					 ?>	 						
	 				</td>	 					 				
	 			</tr>
	 			<?php
	 				 }
	 			  }
	 			?>
	 </table>
</div>
	
</body>
</html>
