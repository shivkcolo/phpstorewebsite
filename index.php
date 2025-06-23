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
            <h1 class="display-4">Welcome to <?php echo $brandName; ?></h1>
            <p class="lead">Your Smart Tech Destination</p>
            <p>Powering Your Digital Life, One Device at a Time</p>
            <p>At <?php echo $brandName; ?>, we bring you the latest and most reliable tech essentials designed to enhance your home, business, and lifestyle. Whether you’re upgrading your workstation, securing your home, or building a smarter living space, we have you covered with the best-in-class electronics and smart solutions.</p>
            <a href="about-us.php" class="btn btn-primary btn-lg">Know More</a>
        </div>
    </header>


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



    <!-- Testimonial Slider Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Testimonials</h2>
            <div id="testimonialCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="d-flex flex-column align-items-center">
                            <blockquote class="blockquote text-center">
                                <strong>The Best One-Stop Shop for Tech!</strong>
                                <p class="mb-0">"<?php echo $brandName; ?> USA made upgrading my home office a breeze. I ordered a high-performance tablet and a wireless printer — both arrived quickly and work perfectly together. The prices were unbeatable, and the customer support was extremely helpful during setup. Highly recommended!"</p>
                                <footer class="blockquote-footer">Jessica M., Austin, TX</footer>
                            </blockquote>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="d-flex flex-column align-items-center">
                            <blockquote class="blockquote text-center">
                                <strong>Smart Home Made Simple</strong>
                                <p class="mb-0">"I recently purchased several smart home devices from <?php echo $brandName; ?> USA — including smart bulbs, a smart thermostat, and a video doorbell. The installation guides were easy to follow, and now my home feels safer and more connected than ever. I’ll be back!"</p>
                                <footer class="blockquote-footer">Marcus B., Seattle, WA</footer>
                            </blockquote>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="d-flex flex-column align-items-center">
                            <blockquote class="blockquote text-center">
                                <strong>Fast Wi-Fi, Seamless Experience</strong>
                                <p class="mb-0">"After years of struggling with slow internet, I bought a Wi-Fi mesh system from <?php echo $brandName; ?> USA. The difference is incredible — faster speeds, no dead zones, and reliable streaming for the whole family. Great value for top-tier tech!"</p>
                                <footer class="blockquote-footer">Diana L., Miami, FL</footer>
                            </blockquote>
                        </div>
                    </div>

                </div>
                <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Jumbotron Section -->
    <section class="jumbotron text-center m-0">
        <div class="container">
            <h2 class="display-5">Ready to Upgrade Your Tech?</h2>
            <p class="lead">Whether you're setting up a new home office, modernizing your space, or simply staying connected, Brand Name is your trusted partner for all things tech.</p>
            <a href="contact-us.php" class="btn btn-primary btn-lg">Get Started</a>

        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-5">
        <div class="container text-center">
            <h2>Why Choose <?php echo $brandName; ?></h2>
            <div class="row mt-4 pt-4">
                <div class="col-md-3">
                    <i class="fas fa-check fa-2x mb-2"></i>
                    <h4>Trusted Tech Brands</h4>
                    <p>We are the trusted & straightforward tech brand.</p>
                </div>
                <div class="col-md-3">
                    <i class="fas fa-dollar-sign fa-2x mb-2"></i>
                    <h4>Competitive Prices</h4>
                    <p>Most affordable plans across all major platforms.</p>
                </div>
                <div class="col-md-3">
                    <i class="fas fa-headset fa-2x mb-2"></i>
                    <h4>Expert Support & Guidance</h4>
                    <p>Expert assistance whenever you need help.</p>
                </div>
                <div class="col-md-3">
                    <i class="fas fa-truck fa-2x mb-2"></i>
                    <h4>Easy Returns & Warranty</h4>
                    <p>Hassle free returns & convenient warranty offers.</p>
                </div>
            </div>
        </div>
    </section>


    <?php include 'includes/footer.php'; ?>
</body>

</html>