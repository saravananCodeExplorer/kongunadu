
<?php
if(isset($_POST['submit']))
{
	$salary=$_POST['salary'];
	$eb=$_POST['eb'];
	$medical=$_POST['medical'];
	$grocerry=$_POST['grocerry'];
	$rent=$_POST['rent'];
	$expanse = $eb+$medical+$grocerry+$rent;
	$saving=$salary-$expanse;
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
<form action="demo3.php" method="post">
<label>Salary</label><br>
<input type="text" name="salary"> <br>
<label>EB-Bill</label><br>
<input type="text" name="eb"><br>
<label>Rent</label><br>
<input type="text" name="rent"><br>
<label>Medical-Expanse</label><br>
<input type="text" name="medical"> <br>
<label>Grocerry</label><br>
<input type="text" name="grocerry"> <br>
<label>Saving</label><br>
<input type="text" name="saving" value= <?php echo $saving ?>> <br>
<button name="submit">submit</button>
</form>
</body>
</html>