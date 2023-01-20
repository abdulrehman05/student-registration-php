<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Insert</title>
</head>

<body>

<?php
    include('db.php');
    if(isset($_POST['submitbtn']))
    {
        $n = $_POST['name'];
        $c = $_POST['course'];
        $s = $_POST['semester'];
        $t = $_POST['timing'];
        $d = $_POST['days'];
        $b = $_POST['batch'];
        $f = $_POST['faculty'];
        



        $query = "INSERT INTO studenttb(studentname,studentcourse,studentsemester,studenttimings,studentdays,studentbatch,facultyname)
        values
        ('$n','$c','$s','$t','$d','$b','$f')";

        $run = mysqli_query($con,$query);

        if($run)
        {
            echo"<h1>Data Inserted</h1>";
            echo"<br>";
            echo"<a href='adminindex.php'><h1>Back to data</h1></a>";
        }
        else
        {
            echo"Not Established";
        }
    }
    ?>

</body>
</html>