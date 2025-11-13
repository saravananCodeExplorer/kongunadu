<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
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
      body {
    font-family: Arial, sans-serif;
    background-color: #3333;
    margin: 0;
    padding: 0;
}
  </style>
  <body>
<script>
  function gotoadd() {
    let admin_name = document.getElementById("uname").value;
    let admin_pwd = document.getElementById("upwd").value;

    if (admin_name === "username" && admin_pwd === "password") {
      location.href = "add_products.php";
    } 
    else if(admin_name === "username1" && admin_pwd === "password1"){
      location.href = "view_products.php";
    }
    else if(admin_name === "username2" && admin_pwd === "password2"){
      location.href = "view_customer.php";
    }
    else if(admin_name === "username3" && admin_pwd === "password3"){
      location.href = "shop_products.php";
    }
    else if(admin_name === "username3" && admin_pwd === "password3"){
      location.href = "shop_products.php";
    }
    else if(admin_name === "username4" && admin_pwd === "password4"){
      location.href = "cart.php";
    }
    else {
      console.log("Invalid username or password");
    }
  }




// </script>




    
  

    <h1 class="text-center">admin!</h1>
    <section class="vh-90 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Please enter your login and password!</p>

              <div data-mdb-input-init class="form-outline form-white mb-4">
                <input type="text" id="uname"  class="form-control form-control-lg" name="uname" required />
                <label class="form-label" >Username</label>
              </div>

              <div data-mdb-input-init class="form-outline form-white mb-4">
                <input type="password" id="upwd" class="form-control form-control-lg" name="upwd" required />
                <label class="form-label" for="typePasswordX">Password</label>
</div>

              <button  class="btn btn-outline-light btn-lg px-5" type="submit" name="login" onclick = "gotoadd()" ondblclick="gotoview()">Login</button>

              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
       <!-- include footer -->
       <?php include"footer.php"?>  
  </body>
</html>