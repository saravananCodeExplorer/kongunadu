<?php
include "c.php"
?>

<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>create page</title>
</head>

<body>
<div class="container">
<button class="btn btn-success my-5" ><a href="create.php" class="text-light text-decoration-none">Creat Profile</a></button>
<table class="table table-dark table-striped">
<tr>
<thead>
<th>id</th>
<th>name</th>
<th>age</th>
<th>address</th>
<th>salary</th>
<th>properties</th>
</thead>
</tr>

<tbody>
<?php
$qry = "SELECT * FROM staf";
$result = mysqli_query($db,$qry);
if($result){
	while($row = mysqli_fetch_assoc($result))
	{
		$id = $row['id'];  //id field name
		$name = $row['name'];
		$age =$row['age'];
		$address=$row['address'];
		$salary =$row['salary'];
		
		echo '<tr>
		<th>'.$id.'</th>
		<th>'.$name.'</th>
		<th>'.$age.'</th>
		<th>'.$address.'</th>
		<th>'.$salary.'</th>
		
		<td>
		<button class ="btn btn-success"><a href="update.php? upid='.$id.'" class="text-white text-decoration-none"  >Update</a></button>
		<button class ="btn btn-primary" ><a href="delete.php? delid='.$id.'" class="text-white text-decoration-none" >Delete</a>
		</button>
			
			 </td>
			 <tr>';
	}
			
	}
	?>
</tbody>
</table>
</div>
</body>
</html>