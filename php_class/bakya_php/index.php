<?php
include ("dbconnect.php");

if(isset($_POST['button']))
{
	$name=$_POST['name'];
	$username=$_POST['uname'];
	$password=$_POST['pass'];
	$course=$_POST['course'];
	$contactno=$_POST['contact'];
	$city=$_POST['city'];
	$sql="insert into subform(name,uname,password,course,contact,city)values
	('$name','$username','$password','$course','$contactno','$city')";
	$result=mysqli_query($con,$sql);
	if($result)
	{
		//header("location:view.php");
		echo "register";
	}
	else
	{
		echo mysqli_error($d);
	}

}
?>
<html>
<head>
<style>
h2{
	color:#00008B;
}
input[type=text],password
{
	
	border radius:20px;
}
form{
	margin-left:300px;
	margin-top:50px;
	
}
label
{
	color:blue:
	font-weight:bold;
}
</style>
</head>
<body>
<h2> <center>Submit form </center></h2>
<div>
<form method="post">
<label for="fname">Name</label><br>
<input type="text" name="name"><br>
<label>Username</label><br>
<input type="text" name="uname"><br>
<label>Password</label><br>
<input type="password" name="pass"><br>
<label>Course</label><br>
<input type="text" name="course"><br>
<label>ContactNo</label><br>
<input type="text" name="contact"><br>
<label>City</label><br>
<input type="text" name="city"><br><br><br>
<input type="submit" name="button">
<input type="reset" name="Reset">
</form>
</div>
</body>
</html>
