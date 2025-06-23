<?php
session_start();

$products = [
    "Computers & Tablets" => [
        "price" => 800,
        "image" => "assets/laptop.jpg",
        "description" => "Powerful desktops and sleek tablets for productivity, entertainment, and study."
    ],
    "Printers & Accessories" => [
        "price" => 120,
        "image" => "assets/printer.jpg",
        "description" => "Laser, inkjet, photo printers and accessories for home or office needs."
    ],
    "Wi-Fi & Network Solutions" => [
        "price" => 150,
        "image" => "assets/wifi.jpg",
        "description" => "Stay connected with routers, mesh systems, modems and extenders."
    ],
    "Smart Home Devices" => [
        "price" => 200,
        "image" => "assets/smarthome.jpg",
        "description" => "Automate your life with smart plugs, voice assistants, lights, and more."
    ],
    "Home Security Systems" => [
        "price" => 250,
        "image" => "assets/security.jpg",
        "description" => "Secure your home with smart surveillance kits, cameras, and sensors."
    ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $brandName; ?></title>
    <?php include 'includes/head.php'; ?>
</head>

<body>

    <?php include 'includes/navigation.php'; ?>
    <!-- Header Section -->
    <header class="jumbotron jumbotron-fluid text-center">
        <div class="container">
            <h1 class="display-4">Products</h1>
        </div>
    </header>

    <!-- Products -->
   <div class="container py-5">
        <h2 class="text-center mb-4">Featured Tech Products</h2>
        <div class="row">

            <!-- Product Card Layout 0 -->
            <?php foreach ($products as $id => $product): ?>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card shadow-sm h-100">




                        <img src="<?= $product['image'] ?>" class="card-img-top" alt="<?= htmlspecialchars($id) ?>">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><?= $id ?></h5>
                            <p class="card-text"><?= $product['description'] ?></p>
                            <p>$<?= $product['price'] ?></p>
                            <form method="post" action="add_to_cart.php" class="mt-auto">
                                <input type="hidden" name="product_name" value="<?= htmlspecialchars($id) ?>">
                                <input type="hidden" name="product_price" value="<?= $product['price'] ?>">
                                <input type="hidden" name="product_image" value="<?= $product['image'] ?>">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fas fa-cart-plus"></i> Add to Cart
                                </button>
                                <button class="btn btn-success btn-sm" onclick="buyNow('<?= addslashes($id) ?>')">
                                    <i class="fas fa-credit-card"></i> Buy Now
                                </button>
                                <a href="cart.php" class="btn btn-primary btn-sm"><i class="fas fa-cart-plus"></i>(<span id="cart-count"><?= isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0 ?></span>)</a>
                            </form>
                        </div>
                        
                    </div>
                </div>
            <?php endforeach; ?>


        </div>
    </div>


    <?php include 'includes/footer.php'; ?>
</body>

</html>