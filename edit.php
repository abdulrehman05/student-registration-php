<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Edit</title>
<style>
  body{
   
    justify-content: center;
    align-items: center;
    
    background-color: lightblue;
  }
  label{
	font-size: 25px;
	align-self: center;
	
  }
  input{
	text-align: center;
	height: 23px;
	width:30%;
	border-radius: 5px;
	background-color: rgba(220,220,220);
	font-size: 15px;
  }
  form{
	background-color: #4eb0de;
	width: 60%;
	height: 770px;
	margin-inline: 20%;
	margin-block: 30px;
	padding: 25px;
	align-items: center;
	justify-content: center;
	border: 3px solid blue;
  }
  .update{
	background-color: #93d9fa;
	height: 30px;
  }
  .update:hover{
	background-color: #cfefff;
	height: 30px;
  }
  </style>
</head>

<body>
<?php
include('db.php');

$id = $_GET['studentid'];
$studentname = $_GET['studentname'];
$studentcourse = $_GET['studentcourse'];
$studentsemester = $_GET['studentsemester'];
$studenttimings = $_GET['studenttimings'];
$studentdays = $_GET['studentdays'];
$studentbatch = $_GET['studentbatch'];
$facultyname = $_GET['facultyname'];

if(isset($_POST['updatebtn']))
{	
$uid = $_POST['id'];
$uname = $_POST['name'];
$ucourse = $_POST['course'];
$usemester = $_POST['semester'];
$utimings = $_POST['timings'];
$udays = $_POST['days'];
$ubatch = $_POST['batch'];
$ufaculty = $_POST['faculty'];


	$query = "update studenttb set studentname = '$uname', studentcourse = '$ucourse', studentsemester = '$usemester', studenttimings = '$utimings' , studentbatch = '$ubatch' , facultyname = '$ufaculty' WHERE studentid = '$uid'";	
	$run = mysqli_query($con,$query);
	
	if($run)
	{
		header("location: adminindex.php");
		
	}
	else
	{
		echo "Error!!";
	}
}

?>


<form method="post" action="edit.php">
<center>
<input type="hidden" name="id" value="<?php echo $id; ?>">

<label>Student Name</label>
<br><br>
<input type="text" name="name" required value="<?php echo $studentname?>">
<br><br>
<label>Course</label>
<br><br>
<input type="text" name="course" required value="<?php echo $studentcourse?>">
<br><br>
<label>Semester</label>
<br><br>
<input type="text" name="semester" required value="<?php echo $studentsemester?>">
<br><br>
<label>Timings</label>
<br><br>
<input type="text" name="timings" required value="<?php echo $studenttimings?>">
<br><br>
<label>days</label>
<br><br>
<input type="text" name="days" required value="<?php echo $studentdays?>">
<br><br>
<label>batch</label>
<br><br>
<input type="text" name="batch" required value="<?php echo $studentbatch?>">
<br><br>
<label>faculty</label>
<br><br>
<input type="text" name="faculty" required value="<?php echo $facultyname?>">
<br>
<br>
<input type="submit" class="update" name="updatebtn" value="Update">


			<br><br><a href='adminindex.php'> <h1>Data View:</h1></a>
</center>
</form>


</body>
</html>