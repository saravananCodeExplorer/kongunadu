<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>SaroShopping</title>
</head>
<body>
    <!-- header start -->
    <header class="header">
        <div class="header_body">
            <a href="index.php" class="logo">Saro_Shopping!</a>
            <nav class="navbar">
            <a href="index.php";>HOME</a>
                <a href="signup.php">SIGNUP</a>
                 <a href="view_customer.php"style= "display:none";>View_customer</a>
                <a href="admin.php">ADMIN</a>
                <a href="shop_products.php" style= "display:none";>Shop It</a>
                <a href="index.php"  style= "display:none";>Add_Products</a>
                <a href="view_products.php"style= "display:none";>View_Products</a>
                <a href="shop_products.php" style= "display:none";>Shop_It</a>
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

</body>
</html>
