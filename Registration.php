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
    justify-content: center;
    align-items: center;
    
    background-color: lightblue;
    width: 100%;
  }
  label{
	font-size: 30px;
	align-self: center;
	
  }
  input:hover{
    background-color: rgba(220,220,220);
  }
  .submit{
    margin-top: 20px;
    height: 50px;
    width: 150px;
    background-color: #65a9c9;
    border-radius: 5px;
    color: white ;
  }
  .submit:hover{
    background-color: #6093ab;
  }
  
  .formthi{
  background-color: #4eb0de;
  margin-top: 50px;
  width: 80%;
  margin-inline: 10%;
  padding-block: 50px;
  border: 3px solid blue;
  }
  
  </style>
</head>
<body>



<center>
  <div class="formthi">
<form method="post" action="insert.php">
    <label>Name</label>
    <br>
    <input type="text" name="name" required>
    <br>
    <label>Course</label>
    <br>
    <select id="course" name="course">
    <option value="DSE">DSE</option>
    <option value="DSE">CPIF</option>
    <option value="DSE">HDSE</option>
    <option value="DSE">ADSE</option>
  </select>
  <br>
    <label>Semester</label>
    <br>
    <select id="semester" name="semester">
    <option value="1st">1st</option>
    <option value="2nd">2nd</option>
    <option value="3rd">3rd</option>
    <option value="4tg">4th</option>
  </select>
   <br>
    <label>Timing</label>
    <br>
    <select id="timing" name="timing">
    <option value="9-11">9-11</option>
    <option value="11-1">11-1</option>
    <option value="1-3">1-3</option>
    <option value="3-5">3-5</option>
    <option value="5-7">5-7</option>
    <option value="7-9">7-9</option>
    
  </select>
    <br>
    <label>Days</label>
        <br>
        <input type="radio" value="Mon-Wed-Fri" name="days" required>Mon-Wed-Fri
        <input type="radio" value="Tue-Thurs-Sat" name="days" required>Tue-Thurs-Sat
    <br>
    <label>Batch Name</label>
        <br>
        <input type="text" name="batch" required>
    <br>
    <label>Faculty Name</label>
        <br>
        <input type="text" name="faculty" required>
    <br>

<input class="submit" type="submit" name="submitbtn" value="Insert">

<br><br><a href='adminindex.php'><h1>Data View:</h1></a>
    

</form>
</div>
    </center>

</div>
</body>
</html>