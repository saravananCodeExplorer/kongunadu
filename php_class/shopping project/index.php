<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>saro_shopping</title>
         <!-- css -->
     <link rel="stylesheet" href="css/style.css">

     <!-- jss -->
      <script src="js/script.js"></script>

      
      <!-- font-awsewome -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
       <!-- header start -->
       <header class="header">
        <div class="header_body">
            <a href="index.php" class="logo">Saro_Shopping!</a>
            <nav class="navbar">
                <a href="signup.php">SIGNUP</a>
                 <a href="view_customer.php";>View_customer</a>
                <a href="admin.php">ADMIN</a>
                <a href="add_products.php" >Add_Products</a>
                <a href="view_products.php">View_Products</a>
                <a href="shop_products.php">Shop_It</a>
            </nav>
            <!-- select query -->
            <?php include "connect.php";
            $select_product = mysqli_query($db, "SELECT * FROM cart") or die('query failed');
            $row_count = mysqli_num_rows($select_product);
            ?>
            <!-- shopping cart icon -->
            <a href="cart.php" class="cart"><i class="fas fa-shopping-cart"></i><span><sup><?php echo $row_count; ?></sup></span></a>
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>
    </header>
    <!-- header end -->
     <script>
    document.getElementById('menu-btn').addEventListener('click', function() {
        document.querySelector('.header_body').classList.toggle('active');
    });
</script>

<!-- marquee -->
<?php include"marquee.php"?>
<!--  -->

<!-- slider -->
<?php include"slider.php"?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      <!--brand footer -->
      <?php include"brand.php"?>
    <!-- footer -->
  <?php include"footer.php"?>
</body>
</html> 