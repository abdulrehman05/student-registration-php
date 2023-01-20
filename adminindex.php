<?php
include('db.php');
session_start();    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  body{
    display: grid;
    justify-content: center;
    align-items: center;
    height: 50vh;
    background-color: lightblue;
  }
  thead tr{
    background-color: #a9cedb
  }
  tbody tr:nth-child(odd) {
    background-color: #aee2f5
  }
  tbody tr:nth-child(even) {
    background-color: #e6feff
  }
  tbody tr:nth-child(odd):hover {
    background-color: #caeffc
  }
  tbody tr:nth-child(even):hover {
    background-color: #f5ffff
  }
  .registerbutton{
    font-size: 30px;
    margin-inline: 10%;
    text-decoration: none;
    color:#e3f6ff;
    border:3px solid transparent;
    transition: .3s;
  }
  .registerbutton:hover{
    color: #aee2f5;
    text-decoration: none;
    border:3px solid black;
  }
  .rgdiv{
    background-color: #78a9c2;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .adminwlc{
    
    width: 50%;
    font-size: 42px;
    color: blue;
    margin-bottom: -100px;
  }
  tr td a:hover{
    color: red;
  }
  table{
    border: 3px solid black;
  }
  </style>
</head>
<body>
  <center>
<?php

if(isset($_SESSION['username']))
{
	echo'<p class="adminwlc">Welcome '.$_SESSION['username'].'</p>';
}
else
{
	header('location:index.php');
}

?></center>
  
<a href='Registration.php' class="registerbutton"><div class="rgdiv">Register</div></a>




<?php

include('db.php');

$query = "select * from studenttb";
$row = mysqli_query($con,$query);
$totalrow = mysqli_num_rows($row);

if ($totalrow != 0)
	{

?>

    <div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Course</th>
      <th scope="col">Semester</th>
      <th scope="col">Timings</th>
      <th scope="col">Days</th>
      <th scope="col">Batch</th>
      <th scope="col">Faculty</th>
      <th scope="col"> </th>
      <th scope="col"> </th>
    </tr>
  </thead>
  <tbody>
    

  
<?php
		
		while($data = mysqli_fetch_assoc($row))
		{
      
			echo "<tr>
      <td scope='col'>". $data["studentid"]."</td>
      <td scope='col'>". $data["studentname"]."</td>
      <td scope='col'>". $data["studentcourse"]."</td>
      <td scope='col'>". $data["studentsemester"]."</td>
      <td scope='col'>". $data["studenttimings"]."</td>
      <td scope='col'>". $data["studentdays"]."</td>
      <td scope='col'>". $data["studentbatch"]."</td>
      <td scope='col'>". $data["facultyname"]."</td>
      <td><a href='edit.php?studentid=$data[studentid]&studentname=$data[studentname]&studentcourse=$data[studentcourse]&studentsemester=$data[studentsemester]&studenttimings=$data[studenttimings]&studentdays=$data[studentdays]&studentbatch=$data[studentbatch]&facultyname=$data[facultyname]'>Edit</a></td>
      <td><a href='delete.php?studentid=$data[studentid]&studentname=$data[studentname]&studentcourse=$data[studentcourse]&studentsemester=$data[studentsemester]&studenttimings=$data[studenttimings]&studentdays=$data[studentdays]&studentbatch=$data[studentbatch]&facultyname=$data[facultyname]'>Delete</a></td>

    </tr>

    
      ";

			}
		}
		else
		{
			echo"No Records Found";
			}
?> 

</tbody>
</table>
</div>
</body>
</html>