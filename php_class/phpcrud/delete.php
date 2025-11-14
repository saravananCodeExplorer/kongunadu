<?php
include "c.php";
if(isset($_GET['delid']))
{
	$id=$_GET['delid'];
   $sql = "DELETE FROM staf where id ='$id'";
   $result = mysqli_query($db,$sql);
   
   if($result){
     echo "<script>alert('are you sure')</script>";
	 header("location:read.php");
   }
   else
   {
   die(mysqli_error($db));
   }
}


?>