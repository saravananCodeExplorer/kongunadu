<?php 
include 'c.php';

if(isset($_POST['submit']))
{
	$name =$_POST['name'];
	$age =$_POST['age']; //name attrubutes
	$address =$_POST['address'];
	$salary =$_POST['salary'];
	$qry ="insert into staf (name,age,address,salary)
	       values('$name','$age','$address','$salary')";
    $result = mysqli_query($db,$qry);
	if($result){
		// echo"Register successfully";
		header("location:read.php");
		
	}
	else{
		die('error'.mysqli_error($db));
		
	}
}
?>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    
<title>create page</title>
</head>
<body>
<h1><center>Create user form</center></h1>
<div class="container my-5">
<form method="post">
<div class="form-group">
<label>NAME:</label>
<input type="text" name="name" placeholder="enter your name" class="form-control">
</div>
<div class="form-group">
<label>AGE:</label>
<input type="number" name="age" placeholder="enter your age" class="form-control">
</div>
<div class="form-group">
<label>ADDRESS:</label>
<input type="text" name="address" placeholder="enter your address" class="form-control">
</div>
<div class="form-group">
<label>SALARY:</label>
<input type="number" name="salary" placeholder="enter your number" class="form-control">
</div>
   <button class="btn btn-info" type="submit" name="submit">REGISTER</button>
	<button class="btn btn-danger" type="reset">RESET</button>

</form>

</div>
</body>
</html>