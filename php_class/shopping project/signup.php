   <!-- include database -->
<?php 
include "connect.php";

if(isset($_POST['submit'])) {
    $customer_name = $_POST['cname'];
    $customer_email = $_POST['cemail'];
     $customer_pwd = $_POST['cpswd'];
      $customer_repwd = $_POST['crepswd'];
       $customer_number = $_POST['cnumber'];
  

    // Move the uploaded file to the designated folder

         if($customer_pwd !== $customer_repwd) {
        $display_message = "Passwords do not match!";
         }
         else{
    
        $query = "INSERT INTO customer( name, email, pwd,repwd,number) VALUES (' $customer_name',' $customer_email',' $customer_pwd',' $customer_repwd', '$customer_number')";
        $result = mysqli_query($db, $query);

        if($result) {
         $display_message = "signup successfully" ;
          header("Location: shop_products.php");
         

        } else {
            $dispaly_message ="There is some error in inserting products: " . mysqli_error($db);
        }
}
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>signup</title>
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
  body {
    font-family: Arial, sans-serif;
    background-color: #3333;
    margin: 0;
    padding: 0;
}
  </style>
  <body>
   <!-- message display -->
     <?php
     if(isset($display_message)){
      echo " <div class='display_message'>
      <span>$display_message
      <i class='fas fa-times' onclick='this.parentElement.style.display = `none`';></i></span>
     </div>";
     }

     ?>
      
    <h1 class="text-center">signup!</h1>
    <section class=" bg-grey"
  style="background-image: url('');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>
              <form action="signup.php" method="post">

<div class="mb-3">
  <label for="uname" class="form-label">Name:</label>
  <input type="text" class="form-control" id="uname" placeholder="Enter name" name="cname" required>
</div>

<div class="mb-3">
  <label for="email" class="form-label">Email:</label>
  <input type="email" class="form-control" id="email" placeholder="Enter email" name="cemail" required>
</div>

<div class="mb-3">
  <label for="pwd" class="form-label">Password:</label>
  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="cpswd" required>
</div>

<div class="mb-3">
  <label for="repwd" class="form-label">Confirm Password:</label>
  <input type="password" class="form-control" id="repwd" placeholder="Confirm password" name="crepswd" required>
</div>

<div class="mb-3">
  <label for="number" class="form-label">Phone Number:</label>
  <input type="text" class="form-control" id="number" placeholder="Enter phone number" name="cnumber" required>
</div>

<button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 
      <!-- include footer -->
      <?php include"footer.php"?>  
  </body>

</html>
    