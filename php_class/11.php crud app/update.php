	 <?php
include 'c.php';
$id = $_GET['upid'];
// $qry = $_GET['upid'];
$qry = "SELECT * FROM staf where id='$id' ";
$result = mysqli_query($db,$qry);

if($row = mysqli_fetch_assoc($result)){
	$name =$row['name'];//input box name
	$age =$row['age'];
	$address =$row['address'];
	$salary =$row['salary'];
	
	
	if(isset($_POST['update']))
	{
		$name =$_POST['name'];
		$age=$_POST['age'];
		$address =$_POST['address'];
		$salary=$_POST['salary'];
		
		$quary = "UPDATE staf set id ='$id',name='$name',age = '$age',address = '$address', salary ='$salary' where id =' $id'" ;
		
		$result = mysqli_query($db,$quary);
		
		if($result){
			echo"updated successfully";
			header ('location:read.php');
		}
		else{
			die(mysqli_error($db));
		}
	
	}
	
}

?>

<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    
<title>crud3</title>
</head>
<body>
<h1 class="text-center"> UPDATE form </title></h1>
<div class="container my-5">
<form method="post">
<div class="form-group">
<label>NAME:</label>
<input type="text" name="name" placeholder="enter your name" class="form-control"  value=<?php echo $name;?>>
</div>
<div class="form-group">
<label>AGE:</label>
<input type="number" name="age" placeholder="enter your age" class="form-control" value=<?php echo $age;?>>
</div>
<div class="form-group">
<label>ADDRESS:</label>
<input type="text" name="address" placeholder="enter your address" class="form-control" value=<?php echo $address;?>>
</div>

<div class="form-group">
<label>SALARY:</label>
<input type="text" name="salary" placeholder="enter your salary" class="form-control" value=<?php echo $salary;?>>
</div>


		
	<button class="btn btn-info" type="submit" name="update" color="white">UPDATE</button>
	<button class="btn btn-danger" type="reset" name= "cancel"><a href="read.php" class="text-white text-decoration-none"  > CANCEL</a></button>
</form>
</div>
</body>
</html>
