<?php
     include('include/header.php');    
  
      $query = "SELECT * FROM `students`";
      $query_run = mysqli_query($con,$query);
      $ATStd = mysqli_num_rows($query_run);

      $query1 = "SELECT DISTINCT subject FROM `mcq`";
      $query_run = mysqli_query($con,$query1);
      $ATSub = mysqli_num_rows($query_run);

      $query2 = "SELECT id FROM `mcq`";
      $query_run = mysqli_query($con,$query2);
      $ATques = mysqli_num_rows($query_run);
     
      $query4 = "SELECT * FROM `students` WHERE branch='CSE'";
      $query_run = mysqli_query($con,$query4);
      $TStdCS = mysqli_num_rows($query_run);

      $query5 = "SELECT DISTINCT subject FROM `mcq` WHERE branch='CSE'";
      $query_run = mysqli_query($con,$query5);
      $TSubCS = mysqli_num_rows($query_run);

      $query6 = "SELECT id FROM `mcq` WHERE branch='CSE'";
      $query_run = mysqli_query($con,$query6);
      $TquesCS = mysqli_num_rows($query_run);

      $query7 = "SELECT * FROM `students` WHERE branch='IT'";
      $query_run = mysqli_query($con,$query7);
      $TStdET = mysqli_num_rows($query_run);

      $query8 = "SELECT DISTINCT subject FROM `mcq` WHERE branch='IT'";
      $query_run = mysqli_query($con,$query8);
      $TSubET = mysqli_num_rows($query_run);

      $query9 = "SELECT id FROM `mcq` WHERE branch='IT'";
      $query_run = mysqli_query($con,$query9);
      $TquesET = mysqli_num_rows($query_run);

?>
	<h2>Admin Panel for Online Exam Portal</h2>
	<div>
		<div class="option">
			<a class="active" href="index.php">Dashboard</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="question.php">Question</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="student.php">Student</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="examShedule.php">Exam Shedule</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="result.php">Results</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a id="logout"  href="adminLogout.php">Logout</a>
		</div>
	</div>
	<div class="headbox">
			<div class="box1">
				<p>All Branch</p>
				<h3>Total Students : <?php echo $ATStd ?> </h3>
				<h3>Total Subjects : <?php echo $ATSub ?> </h3>
				<h3>Total Question : <?php echo $ATques ?> </h3>
			</div>	
			<div class="box2">
				<p>CSE Branch</p>
				<h3>Total Students : <?php echo $TStdCS ?> </h3>
				<h3>Total Subjects : <?php echo $TSubCS ?> </h3>
				<h3>Total Question : <?php echo $TquesCS ?> </h3>
			</div>	
			<div class="box3">
				<p>IT Branch</p>
				<h3>Total Students : <?php echo $TStdET ?> </h3>
				<h3>Total Subjects : <?php echo $TSubET ?> </h3>
				<h3>Total Question : <?php echo $TquesET ?> </h3>
			</div>	
	</div>

</body>
</html>
