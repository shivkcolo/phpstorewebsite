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
            <h1 class="display-4">About Us</h1>
        </div>
    </header>

    <!-- About Us Section -->
    <section class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <p>At <?php echo $brandName; ?>, we believe that technology should empower your life, not complicate it. That’s why we’ve created a one-stop destination for high-quality tech products that bring convenience, security, and efficiency to your home and office.</p>
                <p>Whether you're looking for powerful Computers & Tablets, high-performance Printers, seamless Wi-Fi & Networking solutions, or cutting-edge Smart Home Devices and Home Security Systems, we’re here to deliver products that make a difference.</p>

                <h2>Our Mission</h2>
                <p>Our mission is to deliver the latest innovations in technology while providing exceptional customer experiences. We aim to make smart living accessible, simple, and secure for every household and business across the United States.</p>

            </div>
        </div>
    </section>

    <!-- What We Offer Section -->
    <section class="container my-5">
        <h2 class="text-center mb-4">What We Offer</h2>
        <div class="row text-center">
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Computers & Tablets</h5>
                        <p class="card-text">From everyday productivity to high-end performance, our curated selection suits professionals, students, and gamers alike.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Printers</h5>
                        <p class="card-text">Discover wireless, multifunction, and eco-friendly printing solutions for home and business use.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Wi-Fi & Network</h5>
                        <p class="card-text">Boost your connectivity with advanced routers, mesh systems, and range extenders for faster, more reliable internet.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Smart Home Devices</h5>
                        <p class="card-text">Make life easier with voice-controlled lighting, smart plugs, thermostats, and more.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Home Security Systems</h5>
                        <p class="card-text">Keep your loved ones and property safe with smart cameras, doorbells, and alarm systems.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="container my-5">
        <div class="row">
            <div class="col-md-12">

                <h2>Why Choose Stream Xpress?</h2>
                <ul>
                    <li><strong>Top-Quality Brands & Products</strong></li>
                    <li><strong>Affordable Prices & Exclusive Deals</strong></li>
                    <li><strong>Expert Tech Support & Friendly Service</strong></li>
                    <li><strong>Fast Shipping Across the USA</strong></li>
                    <li><strong>Customer Satisfaction Guaranteed</strong></li>
                </ul>

            </div>
        </div>
    </section>


    
    <section class="container my-5">
        <div class="row">
            <div class="col-md-12">

                <h2>Get Started Today!</h2>
                <p><?php echo $brandName; ?>, we’re more than just a tech store — we’re your digital lifestyle partner. Join thousands of satisfied customers who trust us to power their homes and businesses with the best in technology.</p>
                <p>For more information, please visit our website or contact our support staff.</p>
            </div>
        </div>
    </section>
    <?php include 'includes/footer.php'; ?>
</body>

</html>