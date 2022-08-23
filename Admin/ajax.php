<?php
include('../include/connection.php');
?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$sql="SELECT * FROM `students` WHERE sid = '$q'";
$result = mysqli_query($con,$sql);


while($row = mysqli_fetch_array($result)) {

?>
 <form>
 	<div class="form-group">
    	<label for="exampleInputEmail1">Student Name</label>
    	<input type="text" class="form-control" name="name" placeholder="Student Name" value="<?php echo $row['name']; ?>" >  
    </div>
    <div class="form-group">
    	<label for="exampleInputEmail1">DOB</label>
    	<input type="text" class="form-control" name="dob" value="<?php echo $row['dob']; ?>" >  
    </div>
 	 <div class="form-group">
    	<label for="exampleInputEmail1">Roll No.</label>
    	<input type="text" class="form-control" name="rollno" minlength="12" maxlength="12" value="<?php echo $row['rollno']; ?>" > 
    </div>
    <div class="form-group">
    	<label for="exampleInputEmail1">Branch</label>
    	<input type="text" class="form-control" name="branch" value="<?php echo $row['branch']; ?>" > 
    </div>
    <div class="form-group">
    	<label for="exampleInputEmail1">Semester</label>
    	<input type="number" class="form-control" name="sem"  min="1" max="8" value="<?php echo $row['semester']; ?>" > 
    </div>
 	
 </form>

   
<?php 
  
}

mysqli_close($con);
?>
</body>
</html>