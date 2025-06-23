<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Here you would normally process payment and save order details

    // Clear the cart
    unset($_SESSION['cart']);

    // Redirect to homepage with success flag
    header("Location: checkout.php?checkout=success");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $brandName; ?> - Checkout</title>
    <?php include 'includes/head.php'; ?>
</head>

<body>

    <?php include 'includes/navigation.php'; ?>

    <!-- Header -->
    <header class="jumbotron jumbotron-fluid text-center">
        <div class="container">
            <h1 class="display-4">Checkout</h1>
        </div>
    </header>
    <?php
    if (isset($_GET['checkout']) && $_GET['checkout'] === 'success'): ?>
        <section class="container my-5">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Thank you! Your order has been placed successfully.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </section>
    <?php endif; ?>

    <!-- Checkout Form -->
    <section class="container my-5">
        <div class="row">
            <!-- Billing Info -->

            <div class="col-md-7">
                <h4 class="mb-4">Billing Information</h4>
                <form method="post" action="">
                    <div class="form-group">
                        <label for="fullName">Full Name</label>
                        <input type="text" id="fullName" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="address">Street Address</label>
                        <input type="text" id="address" class="form-control" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="city">City</label>
                            <input type="text" id="city" class="form-control" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="state">State</label>
                            <input type="text" id="state" class="form-control" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="zip">ZIP Code</label>
                            <input type="text" id="zip" class="form-control" required>
                        </div>
                    </div>

                    <!-- <h5 class="mt-4">Payment</h5>
                    <div class="form-group">
                        <label for="cardName">Name on Card</label>
                        <input type="text" id="cardName" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="cardNumber">Card Number</label>
                        <input type="text" id="cardNumber" class="form-control" placeholder="1234 5678 9012 3456" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="expDate">Expiration</label>
                            <input type="text" id="expDate" class="form-control" placeholder="MM/YY" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="cvv">CVV</label>
                            <input type="text" id="cvv" class="form-control" required>
                        </div>
                    </div> -->
                    <button type="submit" class="btn btn-success btn-block">
                        <i class="fas fa-check-circle"></i> Confirm & Pay
                    </button>
                </form>
            </div>

            <!-- Order Summary -->
            <div class="col-md-5">
                <h4 class="mb-4">Order Summary</h4>
                <ul class="list-group mb-3">
                    <?php
                    $total = 0;
                    if (!empty($_SESSION['cart']) && is_array($_SESSION['cart'])):
                        foreach ($_SESSION['cart'] as $item):
                            $quantity = isset($item['quantity']) ? (int)$item['quantity'] : 1;
                            $subtotal = $item['price'] * $quantity;
                            $total += $subtotal;
                    ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="my-0"><?= htmlspecialchars($item['name']) ?></h6>
                                    <small class="text-muted"><?= $quantity ?>x</small>
                                </div>
                                <span class="text-muted">$<?= number_format($subtotal, 2) ?></span>
                            </li>
                        <?php
                        endforeach;
                        ?>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (USD)</span>
                            <strong>$<?= number_format($total, 2) ?></strong>
                        </li>
                    <?php else: ?>
                        <li class="list-group-item">Your cart is empty.</li>
                        <a href="products.php" class="btn btn-primary btn-lg mt-4">Go To Shop</a>

                    <?php endif; ?>
                </ul>


            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

</body>

</html>