<?php 
include "dbconnect.php";
$id=$_GET['editid'];
$qry="select * from subform where id=$id";
$result=mysqli_query($con,$qry);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$username=$row['username'];
$password=$row['pasword'];
$course=$row['course'];
$contactno=$row['contactno'];
$city=$row['city'];
    if(isset($_POST['button']))
    {
		$name=$_POST['name'];
        $username = $_POST['uname'];
		$password=$_POST['pass'];
		$course=$_POST['course'];
        $contactno = $_POST['contact'];
        $city = $_POST['city'];

        $query = "update subform set id=$id,name='$name',username='$username',pasword='$password',
		course='$course',contactno='$contactno',city='$city' where id=$id";
        $result = mysqli_query($con,$query);
        if($result)
        {
            header("location:view.php");
        }
        else
        {
            echo ' Please Check Your Query ';
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
<h2> <center>update form </center></h2>
<div>
<form method="post">
<label for="fname">Name</label><br>
<input type="text" name="name" value=<?php echo $name?>><br>
<label>Username</label><br>
<input type="text" name="uname" value=<?php echo $username?>><br>
<label>Password</label><br>
<input type="password" name="pass" value=<?php echo $password?>><br>
<label>Course</label><br>
<input type="text" name="course" value=<?php echo $course?>><br>
<label>ContactNo</label><br>
<input type="text" name="contact" value=<?php echo $contactno?>><br>
<label>City</label><br>
<input type="text" name="city" value=<?php echo $city?>><br><br><br>
<input type="submit" name="button">
<input type="reset" name="Reset">
</form>
</div>
</body>
</html>