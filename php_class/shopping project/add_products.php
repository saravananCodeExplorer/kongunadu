   <!-- include database -->
<?php 
include "connect.php";

if(isset($_POST['add_product'])) {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_FILES['product_image']['name'];
    $product_image_temp_name = $_FILES['product_image']['tmp_name'];
    $product_image_folder = 'images/'.$product_image;

    // Move the uploaded file to the designated folder
    if(move_uploaded_file($product_image_temp_name, $product_image_folder)) {
        $query = "INSERT INTO products(name, price, image) VALUES ('$product_name', '$product_price', '$product_image')";
        $result = mysqli_query($db, $query);

        if($result) {
         $display_message = "Product inserted successfully" ;

        } else {
            $dispaly_message ="There is some error in inserting products: " . mysqli_error($db);
        }
    } else {
         $dispaly_message = "Failed to upload image";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add products</title>

    <!-- css -->
     <link rel="stylesheet" href="css/style.css">

     <!-- jss -->
      <script src="js/script.js"></script>

      <!-- bootstrap js -->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

       <!-- boostrap css -->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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


 <!-- form section -->

  <div class="container">
    <!-- message display -->
     <?php
     if(isset($display_message)){
      echo " <div class='display_message'>
      <span>$display_message
      <i class='fas fa-times' onclick='this.parentElement.style.display = `none`';></i></span>
     </div>";
     }

     ?>
     <!-- <div class="display_message">
      <span></span>
      <i class='fas fa-times' onclick='this.parentElement.style.display = `none`';></i>
     </div> -->
    <!-- row start -->
    <div class="row">
       <div class="col-sm-3"></div>

       <div class="col-sm-6">
       <!-- Form Section -->
    <section class="form-section container mt-5">
        <h3 class="heading text-center mb-4">Add Products!</h3>
        <form method="post" enctype="multipart/form-data" class="bg-light p-4 rounded shadow">
            <!-- Input text field -->
            <div class="mb-3">
                <label for="productName" class="form-label">Product Name</label>
                <input type="text" name="product_name" id="productName" placeholder="Enter product name" class="form-control" required />
            </div>
            <!-- Input price field -->
            <div class="mb-3">
                <label for="productPrice" class="form-label">Product Price</label>
                <input type="number" min="0" name="product_price" id="productPrice" placeholder="Enter product price" class="form-control" required />
            </div>
            <!-- Input choose file field -->
            <div class="mb-3">
                <label for="productImage" class="form-label">Product Image</label>
                <input type="file" name="product_image" id="productImage" class="form-control" required accept="image/png,image/jpg,image/jpeg,image/svg,image/webp" />
            </div>
            <!-- Submit button -->
            <div class="d-grid">
                <button type="submit" name="add_product" class="btn btn-success">Add Product</button>
            </div>
        </form>
    </section>
</div>            

</div>
<div class="col-sm-3"></div>
    <!-- row end -->
  </div>

      <!--brand footer -->
      <?php include"brand.php"?>

      <!-- include footer -->
      <?php include"footer.php"?>  
</body>
</html>