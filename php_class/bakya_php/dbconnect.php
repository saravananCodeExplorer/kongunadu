<?php
$con=new mysqli("localhost","root","","phpcrud");
if(!$con)
{
	die('error in database'.mysqli_error($con));
}

?>
