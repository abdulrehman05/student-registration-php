<?php
include('db.php');
session_start();    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
.box1{
height: 300px;
width: 60%;
margin-inline: 15%;
margin-block: 200px;
background-color: #65a9c9;
border-radius: 50px;
padding: 5%;
border: 3px solid blue;
}
body{   
   justify-content: center;
   align-items: center;   
   background-color: lightblue;
 }
 label{
    margin-top: -30px;
    color: #e6f7ff;
    font-size: 20px;
 }
 h1{color: #e6f7ff;}
 input[type="text"]{
    width: 200px;
    height: 30px;
    border-radius: 5px;
    margin-top: -30px;
 }
 input[type="password"]{
    width: 200px;
    height: 30px;
    border-radius: 5px;
 }

    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
<div class="box1">
<form action="" method="post">
<center><h1>Admin Login</h1></center>
<br><br><br>
<center>
<label class="dd">USERNAME</label>
<br><br>
<input class="dd" type="text" name="username">
<br><br>
<label class="dd" >PASSWORD</label>
<br><br>
<input class="dd" type="password" name="password">
<br><br>
<input class="dd" type="submit" name="login" value="login">
</form>
</center>
<?php
if (isset($_POST['login']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$query = "select * from logintb where username = '$username'
	and
	password = '$password'";
	
	$run = mysqli_query($con,$query);
	$totalrows = mysqli_num_rows($run);
	
	if($totalrows == 1)
	{
		    $_SESSION['username'] = $username;
        header('location:adminindex.php');
        echo"login successfully";
    }
	
	else
	{
		echo'<h2 style="color:red"> USERNAME OR PASSWORD IS INCORRECT</h2>';	
	}
}
?>    

</body>
</html>