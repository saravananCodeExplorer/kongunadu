
<?php
if(isset($_GET['submit']))
{
	$name=$_GET['name'];
	$contact=$_GET['contact'];
	$city=$_GET['city'];
	
echo "name:$name" ."<br>".
 "contact:$contact"."<br>".
 "city:$city" ;

}
?>


<html>
<style>
form
{
	height:500px;
	width:500px;
}
label

{
	margin:20px;
}
	input[type="text"]
	{
		margin:10px;
	}

</style>

<body>
<form action="demo2.php" method="get">
<label>name</label><br>
<input type="text" name="name"><br>
<label>contact</label><br>
<input type="text" name="contact"><br>
<label>city</label><br>
<input type="text" name="city"> <br>
<button name="submit">submit</button>
</form>
</body>
</html>