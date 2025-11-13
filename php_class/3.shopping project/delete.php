
  <!-- delete logic -->
 <!-- php code -->
  <?php include "connect.php";
  if(isset($_GET['delete']))
  {
    $delete_id=$_GET['delete'];
    $delete_qry = "delete from products where id = $delete_id";
    $result = mysqli_query($db,$delete_qry);

    if(!$result){
        die("error".mysqli_error);
    }
    else{
        header("location:view_products.php");
    }
   
  }
  ?>