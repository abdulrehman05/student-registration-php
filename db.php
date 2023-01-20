<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>DB</title>
</head>

<body>

<?php

$con = mysqli_connect('localhost','root','','studentdb');
	
	 if($con)
		{
			// echo"connection established !!"; 
		}
			
	else
		{
			echo"connection failed!!!";		
		}

?>

</body>
</html>