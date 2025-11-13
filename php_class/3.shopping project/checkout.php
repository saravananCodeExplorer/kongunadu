<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Checkout</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .checkout-container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .form-control {
            height: 45px;
        }

        .payment-btn {
            background-color: #28a745;
            color: white;
            font-size: 18px;
            font-weight: bold;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s ease;
        }

        .payment-btn:hover {
            background-color: #218838;
        }

        .order-summary {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<!-- Include Header -->
<?php include "header.php"; ?>

<div class="container">
    <div class="checkout-container">
        <h2 class="text-center mb-4">Secure Checkout</h2>

        <form action="process_payment.php" method="POST">
            <!-- Billing Details -->
            <div class="mb-3">
                <label for="fullName" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="fullName" name="fullName" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Billing Address</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>

            <!-- Payment Details -->
            <h4 class="mt-4">Payment Details</h4>
            <div class="mb-3">
                <label for="cardNumber" class="form-label">Card Number</label>
                <input type="text" class="form-control" id="cardNumber" name="cardNumber" placeholder="1234 5678 9012 3456" required>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="expiryDate" class="form-label">Expiry Date</label>
                    <input type="text" class="form-control" id="expiryDate" name="expiryDate" placeholder="MM/YY" required>
                </div>
                <div class="col-md-6">
                    <label for="cvv" class="form-label">CVV</label>
                    <input type="text" class="form-control" id="cvv" name="cvv" placeholder="123" required>
                </div>
            </div>

            <!-- Order Summary -->
            <h4 class="mt-4">Order Summary</h4>
            <div class="order-summary">
                <p>Product: <strong>Smart Shopping Item</strong></p>
                <p>Price: <strong>$49.99</strong></p>
                <p>Shipping: <strong>Free</strong></p>
                <h5>Total: <strong>$49.99</strong></h5>
            </div>

            <!-- Payment Button -->
            <button type="submit" class="payment-btn mt-4">Pay Now</button>
        </form>
    </div>
</div>

<!-- Include Footer -->
<?php include "footer.php"; ?>

</body>
</html>
