<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Miller Pacific Hardwoods</title>
        <link rel="icon" type="image/png" sizes="32x32" href="imgs/icon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="imgs/icon-16x16.png">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="main.css">
        <script src="products.js"></script>
        <script>
            (async () => {
                await new Promise((resolve) => window.addEventListener("load", resolve));

                //Get the list of products
                let products = await getProductsList();

                let latestProducts = document.getElementById("latest-products");

                if(products.error) {
                    let error = generateErrorMessage();

                    latestProducts.appendChild(error);
                }else {
                    let combinedProducts = products.species.concat(products.other);
                    combinedProducts = combinedProducts.filter(product => product.inStock);

                    for(let i = 0; i < 3; i++) {
                        latestProducts.appendChild(makeProductListing(combinedProducts[i]));
                    }
                }
            })();
        </script>
    </head>
    <body>
        <!-- Begin Nav -->
        <?php
        $active_page = basename(__FILE__);

        include __DIR__ . "/includes/navigation.php";
        ?>
        <!-- End Nav -->
        <!-- Begin Main Body -->
        <main>
            <div class="container my-5">
                <div class="row p-4 g-3 border rounded-3 shadow align-items-center">
                    <div class="col-lg-6">
                        <h1 class="display-3">Providing Quality Hardwood Since 2002</h1>
                        <p class="lead">Miller Pacific Hardwoods LLC is a small, family-operated hardwood business in the Pacific Northwest. We mill and sell furniture-grade lumber and custom wood products for special projects. We specialize in slabs for tables, countertops, island tops, and mantles.</p>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid" src="imgs/sign.jpg">
                    </div>
                </div>
            </div>
            <div class="container my-5">
                <h2 class="display-4">About Us</h2>
                <p class="lead">From small residential installations to corporate offices, we have supplied high-quality wood for a wide variety of projects and customers.</p>
                <p><a href="about.php" class="btn btn-primary">Learn more</a></p>
                <div class="mx-auto p-4 border rounded-3 shadow" style="max-width: 600px !important;">
                    <div id="woodExamplesCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#woodExamplesCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#woodExamplesCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#woodExamplesCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="imgs/stairs-resized.jpg">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Wimberly Allison Tong & Goo</h5>
                                    <p>Miller Pacific Hardwoods supplied the wood necessary to build the staircase in WATG's Irvine, California office.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="imgs/kitchen-counter-resized.jpg">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Kitchen Counter</h5>
                                    <p>This beautiful single piece of wood that was supplied by Miller Pacific Hardwoods was made into this amazing counter top.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="imgs/cutting-board-resized.jpg">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Cutting Board</h5>
                                    <p>These beautiful cutting boards are handmade in our shop. No two are the same.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#woodExamplesCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#woodExamplesCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="container my-5">
                <h2 class="display-4">Products</h2>
                <p class="lead">Explore the different species of wood we have to offer.</p>
                <p><a href="products.php" class="btn btn-primary">View Products</a></p>
                <div class="row g-3 justify-content-center" id="latest-products"></div>
            </div>
            <div class="container my-5">
                <h2 class="display-4">News</h2>
                <p class="lead">Check out our latest info from social media.</p>
                <div class="mx-auto border rounded-3 shadow p-3" style="max-width: 600px;">
                    <!-- Start Twitter Embed -->
                    <a class="twitter-timeline" data-height="600" data-dnt="true" href="https://twitter.com/mphwood?ref_src=twsrc%5Etfw">Tweets by mphwood</a>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    <!-- End Twitter Embed -->
                </div>
            </div>
        </main>
        <!-- End Main Body -->
        <!-- Begin Footer -->
        <?php include __DIR__ . "/includes/footer.html"; ?>
        <!-- End Footer -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>