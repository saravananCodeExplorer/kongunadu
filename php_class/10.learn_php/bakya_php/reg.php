<?php
$d=new mysqli("localhost","root","","phpfile");
if(!$d)
{
	die('error in database'.mysqli_error($d));
}
?>
<?php
$d=mysqli_connect("localhost","root","","phpfile");
if(isset($_POST['button']))
{
	$Name=$_POST['name'];
	$Username=$_POST['uname'];
	$Password=$_POST['pasword'];
	$Degree=$_POST['degree'];
	$Email=$_POST['email'];
	$City=$_POST['city'];
	$conn="insert into form(name,uname,pasword,degree,email,city)values
	('$Name','$Username','$Password','$Degree','$Email','$City')";
	$res=mysqli_query($d,$conn);
	if($res)
	{
		echo "register successfully";
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
text-align:center;
color:#8B008B;
}
form{
background-color:#00BFFF;
width:50%;
margin-left:300px;
margin-right:300px;
margin-top:50px;
border-radius:7px;
}
tr,td{
width:30px;
color:#B22222;
font-weight:bold;
}
input[type=button]
{
border-radius:10px;
font-weight:bold;
border:0px;
padding:6px 15px;
background-color:#ADFF2F
}
</style>
</head>
<body>
<form method="post">
<h2>Register</h2>
<center>
<table>
<tr>
<td>
<label>Name</label>
<input type="text" name="name"></td>
</tr>
<tr>
<td><label>UserName</label>
<input type="text" name="uname"></td>
</tr>
<tr>
<td><label>Password</label>
<input type="password" name="pasword"></td>
</tr>
<tr>
<td><label>Degree</label>
<input type="text" name="degree"></td>
</tr>
<tr>
<td><label>Email</label>
<input type="email" name="email"></td>
</tr>
<tr>
<td><label>City</label>
<input type="text" name="city"></td>
</tr>
<tr><td><br><br>
<center><input type="submit" name="button" value="Submit" style="color:#B22222"></center></td></tr>
</table>
</center>
</form>
</body>
</html>



