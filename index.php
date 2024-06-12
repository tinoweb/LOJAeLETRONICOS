<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technics - Electronic Devices Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include 'partials/navbar.php'; ?>
    
    <div class="container">
        <!-- Hero Section -->
        <div class="row">
            <div class="col-12">
                <div class="hero-section text-center py-5">
                    <h1>Electronic Devices</h1>
                    <p>Four Ways to Cool Compact Electronic Devices</p>
                    <img src="images/hero.png" alt="Hero Image" class="img-fluid">
                </div>
            </div>
        </div>

        <!-- Products Section -->
        <div class="row">
            <div class="col-12">
                <h2 class="text-center my-4">Our Products</h2>
                <div class="row">
                    <!-- Example Product Card -->
                    <div class="col-md-3">
                        <div class="card">
                            <img src="images/product1.png" class="card-img-top" alt="Product 1">
                            <div class="card-body">
                                <h5 class="card-title">Acer C720-2103 Chromebook</h5>
                                <p class="card-text">$479.00</p>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <!-- Repeat for other products -->
                </div>
            </div>
        </div>

        <!-- Blog Section -->
        <div class="row">
            <div class="col-12">
                <h2 class="text-center my-4">Blog Posts</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="images/blog1.png" class="card-img-top" alt="Blog 1">
                            <div class="card-body">
                                <h5 class="card-title">How Does Sense Detect My Devices?</h5>
                                <p class="card-text">Short description of the blog post...</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Repeat for other blog posts -->
                </div>
            </div>
        </div>
    </div>
    
    <?php include 'partials/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
