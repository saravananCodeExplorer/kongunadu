<?php include "connect.php";
// update qry
if(isset($_POST['update_product_quantity'])){
    $update_value=$_POST['update_quantity'];
    // echo $update_value;
    $update_id=$_POST['update_quantity_id'];
    // echo $update_id;  
    //query
    $update_quantity_query=mysqli_query($db,"update cart set quantity=$update_value where id=$update_id");
    // echo"updated successfully";  
    if(  $update_quantity_query){
        header('location:cart.php');
    }

}


// remove partucular cart row php code
if(isset($_GET['remove'])){
    $remove_id = $_GET['remove'];
    // echo $remove_id;
    mysqli_query($db,"Delete from cart where id = $remove_id");
    header("location:cart.php");
}

// remove all products
if(isset($_GET['delete_all'])){
    $remove_id = $_GET['delete_all'];
    // echo $remove_id;
    mysqli_query($db,"Delete from cart ");
    header("location:cart.php");
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cart</title>
 <!-- css -->
     <link rel="stylesheet" href="css/style.css">

     <!-- jss -->
      <script src="js/script.js"></script>

     

       <!-- boostrap css -->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

      <!-- font-awsewome -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <style>
    th,tr{
        text-align:center
    }
    
    .empty_text{
        margin-top:20px;
        height:50px;
        background-color:black;
        color:white;
        font-size:32px;
        font-weight:bold;
        display: flex;
        flex-direction:column;
        justify-content:center;
        text-align:center;
    }

  </style>
  <body>
    
     <!-- include header -->
      <?php include"header.php"?> 



    <div class="container">
        <section class="shopping_cart">
            <h1 class="heading text-center my-2">My cart</h1>
<table class="table table-striped hover">
    <?php
      $select_cart_products = mysqli_query($db, "SELECT * FROM `cart`"); 
     
      $num=1;
      $grand_total=0;
       if(mysqli_num_rows($select_cart_products)>0){
        echo
        "    <thead >
        <tr>
            <th>SI No</th>
            <th>Product Name</th>
            <th>Product Image</th>
            <th>Product Price</th>
            <th>Product Quantity</th>
            <th>Total Price</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>";
   
    while($fetch_cart_products = mysqli_fetch_assoc( $select_cart_products)){
        
        
        ?>
         <tr>
            <td><?php echo $num ?></td>
            <td><?php echo $fetch_cart_products['name']?></td>
            <td><img src="images/<?php echo $fetch_cart_products['image']?>" alt="<?php echo $fetch_cart_products['name']?>" style="height:300px;width:300px;"></td>
            <td>$<?php echo $fetch_cart_products['price']?>/-</td>
            <td>
                <!-- quantity setting -->
                <form action="" method="post">
                    <input type="hidden" value="<?php echo $fetch_cart_products['id']?>" 
                    name="update_quantity_id">
                <div class="quantity_box">
                    <input type="number" min="1" class="update" style="width:100px; height:40px;"
                    value="<?php echo $fetch_cart_products['quantity']?>"
                    name="update_quantity"/>
               
                    <input type ="submit" class="btn btn-outline-dark" value="update" min="1"
                     style="width:100px; height:40px;"
                     name="update_product_quantity">

                </div>
                </form>
            </td>
            <td>$<?php echo $subtotal=number_format( $fetch_cart_products['price']*$fetch_cart_products['quantity'])?>/-</td>
            <td>
                <a href="cart.php?remove=<?php echo $fetch_cart_products['id']?>"
                onclick="return confirm('Are you sure you want to delete this item')">
                    <i class="fas fa-trash"></i>
                </a>
            </td>
        </tr>


        <?php
        $grand_total=$grand_total+($fetch_cart_products['price']*$fetch_cart_products['quantity']);
        $num++;
    }

}
        else
        {
            echo "<div class='empty_text'>Cart is empty!</div>";

        }
    ?>

    <!-- Table rows will go here -->

    </tbody>
    </table>
    <!-- php code -->
    <!-- bottom area -->
    <?php
    if($grand_total>0){
        echo"
        <div class='table_bottom d-flex justify-content-around align-items-center'>
    <a href='shop_products.php' class='bottom_btn'>Continue shopping</a>
    <h3 class='bottom_btn fs-5 my-2'>Grand total:$<span>$grand_total/-</span></h3>                                                                                                     <?php echo $grand_total?></span></h3>
    <a href='checkout.php'class='bottom_btn' >Proceed to checkout</a>

</div>";
    ?>




 <!-- </div> -->
 <a href="cart.php?delete_all" class="delete_all_btn  text-center"><br>
    <i class="fa fa-trash"></i>
    Delete all
 </a>
 <?php

}else{
    echo "";
}
?>
        </section>
    </div>







     <!-- bootstrap js -->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

   <!-- include brand -->
   <?php include"brand.php"?> 
     <!-- include footer -->
      <?php include"footer.php"?> 

    </body>

</html>