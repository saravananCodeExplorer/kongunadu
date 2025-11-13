<?php include "connect.php";
// update logic
if(isset($_POST['update_product'])){
  $update_product_id =$_POST['update_product_id'];
    $update_product_name =$_POST['update_product_name'];
      $update_product_price =$_POST['update_product_price'];
        $update_product_image =$_FILES['update_product_image']['name'];
        $update_product_image_tmp_name =$_FILES['update_product_image']['tmp_name'];
         $update_product_image_folder = 'images/'.$update_product_image;

        //  update query
           // Move the uploaded file to the designated folder
    
      $query = "update products set name='$update_product_name',price='$update_product_price',image='$update_product_image' where id = '$update_product_id'";
      $result = mysqli_query($db, $query);

      if($result) {

        move_uploaded_file($update_product_image_tmp_name,$update_product_image_folder);
        header('location:view_products.php');

      } else {
        $dispaly_message ="There is some error in updating products: " . mysqli_error($db);
      }
  } 
  


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
       <!-- css -->
       <link rel="stylesheet" href="css/style.css">

<!-- js -->
 <script src="js/script.js"></script>

 
 <!-- font-awsewome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />



</head>
<style>
.display_message{
    height:50px;
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
   
    <h1>Update products!</h1>
    <section class="edit_container container">
      <!-- php code -->
      <?php
     if(isset($display_message)){
      echo " <div class='display_message'>
      <span>$display_message
      <i class='fas fa-times' onclick='this.parentElement.style.display = `none`';></i></span>
     </div>";
     }

     ?>
       <?php 

       if(isset($_GET['edit'])){
        $edit_id=$_GET['edit'];
        // echo $edit_id;
        $edit_query="select * from products where id = $edit_id";
        $result = mysqli_query($db,$edit_query);

        if(mysqli_num_rows($result)>0){

          $row = mysqli_fetch_assoc($result);

          
        
        
        ?>
          
        <!-- form -->
        <form method="post" class ="update_product product_container_box" enctype="multipart/form-data">

            <img src="images/<?php echo $row['image']?>" alt="<?php echo $row ['name']?>">
            <input type="hidden" value="<?php echo $row['id']?>" name="update_product_id"/>
  <!-- Input text field -->
  <div data-mdb-input-init class="form mb-4">
    <input type="text" name="update_product_name" placeholder="Enter product Name" id="form2Example1" class="form-control" required value="<?php echo $row['name']?>" />
  </div>

  <!-- Input price field -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="number" min="0" name="update_product_price" placeholder="Enter product price" id="form2Example2" class="form-control" required value="<?php echo $row['price']?>"/>
  </div>

  <!-- Input choose file field -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="file" name="update_product_image" id="form2Example3" class="form-control" required accept="image/png,image/jpg,image/jpeg,image/svg,image/webp">
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox (if needed, currently empty) -->
    </div>
  </div>

  <!-- Submit button -->
  <input type="submit" name="update_product" class="btn btn-outline-success edit_btn" value="Update product" />
   <!-- resert button -->
   <input type="reset" name="reset_product" class="btn btn-outline-danger cancel_btn" id="close-edit" value="Cancel" />
</form>

            


<?php

        }
      
       }
   ?>

      


            </section>


















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      <!-- include header -->
      <?php include"footer.php"?> 
  </body>
</html>