<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Delete</title>
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
  *{color:#cfefff; }
  input[type="submit"]{
	color: black;
	height: 35px;
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

if(isset($_POST['deletebtn']))
{	
$uid = $_POST['id'];
$uname = $_POST['name'];
$ucourse = $_POST['course'];
$usemester = $_POST['semester'];
$utimings = $_POST['timings'];
$udays = $_POST['days'];
$ubatch = $_POST['batch'];
$ufaculty = $_POST['faculty'];


	$query = "DELETE FROM studenttb WHERE studentid = '$uid'";	
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


<form method="post" action="delete.php">

<input type="hidden" name="id" value="<?php echo $id; ?>">

<label>Student Name: <?php echo $studentname?></label>
<br>
<br>
<label>Course: <?php echo $studentcourse?></label>
<br>

<br>
<label>Semester: <?php echo $studentsemester?></label>
<br>
<br>
<label>Timings: <?php echo $studenttimings?></label>
<br>
<br>
<label>days: <?php echo $studentdays?></label>
<br>
<br>
<label>batch: <?php echo $studentbatch?></label>
<br>
<br>
<label>faculty: <?php echo $facultyname?></label>
<br>
<br>
<br>
<input type="submit" name="deletebtn" value="Delete">


			<br><br><a href='adminindex.php'> <h1>View Data:</h1></a>
</form>


</body>
</html>