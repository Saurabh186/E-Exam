<?php
     include('include/header.php');
?>

 <?php

            $question_saved = $_SESSION['question_saved'];
            if($_SESSION['question_saved'])
            {
                echo ' <script type="text/javascript"> alert("'.$question_saved.'") </script> ';
            }
            unset($_SESSION['question_saved']);


            $status = $_SESSION['status'];
            if($_SESSION['status'])
            {
                echo ' <script type="text/javascript"> alert("'.$status.'") </script> ';
            }
            unset($_SESSION['status']);

            $status2 = $_SESSION['del_status'];
            if($_SESSION['del_status'])
            {
                echo ' <script type="text/javascript"> alert("'.$status2.'") </script> ';
            }
            unset($_SESSION['del_status']);
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

	<h2>Admin Panel for Online Exam Portal</h2>
	<div>
		<div class="option">
			<a href="index.php">Dashboard</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a class="active" href="question.php">Question</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="student.php">Student</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="examShedule.php">Exam Shedule</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="result.php">Results</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a id="logout"  href="adminLogout.php">Logout</a>
		</div>
	</div>
<button class="addnew" id="addnew" onclick="addnew()">Add Questions</button>
<button class="addnew" id="hides" onclick="hides()">Hide Add Questions</button>


	<div class="question_input" id="show">

		   <form  method="POST" action="code.php" id="myForm" style="display: list-item; line-height:10px;text-decoration: none;">
		   	<p>Branch<span class="star">*</span></p>
		   	<select id="branch" name="branch">
		   		<option value="" disabled selected>Choose Branch</option>
		   		<option value="CSE">CSE</option>
		   		<option value="IT">IT</option>		   		
		   	</select>
		   	<p>Semester<span class="star">*</span></p>
		   	<select id="sem" name="semester">
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
		   	<select id="sub" name="subject">
		   		<option value="" disabled selected>Choose Subject</option>
		   		<option value="TOC">Theory of Computation</option>
		   		<option value="DBMS">Database Management System</option>
		   		<option value="CYBER SECURITY">CYBER SECURITY</option>
		   		<option value="INTERNET AND WEB TECHNOLOGY">Internet and Web Technology</option>
		   	</select>
		   	 
		   	 <p>Question<span class="star">*</span></p>
		   	 <input type="text" name="question" required>
		   	 <p>option A<span class="star">*</span></p>
		   	 <input type="text" name="a" required>
		   	 <p>option B<span class="star">*</span></p>
		   	 <input type="text" name="b" required>
		   	 <p>option C<span class="star">*</span></p>
		   	 <input type="text" name="c" required>
		   	 <p>option D<span class="star">*</span></p>
		   	 <input type="text" name="d" required>
		   	 <p>Answer<span class="star">*</span></p>
		   	 <input type="text" name="answer" required>
		   	<br><br>
		   	<div class="sub_btn">
		   		<input id="s" onclick="getselect()" type="submit" name="questionSave">&nbsp;&nbsp;&nbsp;
		   	    <input id="c" type="submit" value="Clear" onclick="resett()" >
		   	</div>
		   	 
		   </form>

		  <hr>
		  <div class="link">
		   <a  href="Doc/Sample_Questions.pdf" download>Click here to Download Sample PDF</a><br>
		   <a style="color:blue;" href="Doc/Sample_Question_upload.csv" download>Click here to Download Sample Excel CSV File</a>
		</div>

		   <div class="upload-form">
		   	
		   			<form action="code.php" method="POST" enctype="multipart/form-data" >
		   			    <p>Upload CSV File: </p>		
		         		<input type="file" name="file" required />
		         		<input type="submit" class="button button2" name="uploadcsv" value="Upload" >
	        		</form>
		   </div>
	</div>

<div >
	 <table id="ques_diplay" >
	 			<tr>
	 				<th>Branch</th>
	 				<th>Sem</th>
	 				<th>Subject</th>
	 				<th>Question</th>
	 				<th>Option A</th>
	 				<th>Option B</th>
	 				<th>Option C</th>
	 				<th>Option D</th>
	 				<th>Answer</th>
	 				<th>Delete</th>
	 			</tr>
 <?php


        $query = "SELECT * FROM `mcq` ORDER BY `branch` ASC , `semester`  DESC ,`subject` ASC";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
 ?> 
	 			<tr>
	 				<td><?php echo $row["branch"]; ?></td>
	 				<td><?php echo $row["semester"]; ?></td>
	 				<td><?php echo $row["subject"]; ?></td>
	 				<td><?php echo $row["question"]; ?></td>
	 				<td><?php echo $row["a"]; ?></td>
	 				<td><?php echo $row["b"]; ?></td>
	 				<td><?php echo $row["c"]; ?></td>
	 				<td><?php echo $row["d"]; ?></td>
	 				<td style="font-weight: bold;color: blue;"><?php echo $row["answer"]; ?></td>
	 				<td>
	 					<form method="POST" action="code.php">
	 						<input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
	 						<input type="submit" id="Deletebtn" name="Qdelete" value=" Delete   ">
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
	
	function resett() {
   document.getElementById("myForm").reset();   
  // localStorage.clear();
}

function addnew(){
	document.getElementById("show").style.display = "block";
	document.getElementById("hides").style.display = "block";
	document.getElementById("addnew").style.display = "none";
	document.getElementById("sem").value = localStorage.getItem("Semester");
	document.getElementById("branch").value = localStorage.getItem("branch");
	document.getElementById("sub").value = localStorage.getItem("sub");

}
function hides()
{
	document.getElementById("show").style.display = "none";
	document.getElementById("addnew").style.display = "block";
	document.getElementById("hides").style.display = "none";
}

function getselect(){
  var sem = document.getElementById('sem').value;
  localStorage.setItem("Semester", sem);

  var branch = document.getElementById('branch').value;
  localStorage.setItem("branch", branch);

  var sub = document.getElementById('sub').value;
  localStorage.setItem("sub", sub);
}


</script>



</body>
</html>
