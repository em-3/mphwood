<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Miller Pacific Hardwoods</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="main.css">
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
                        <h1 class="display-3">We Provide High-Quality Lumber</h1>
                        <p class="lead">Miller Pacific Hardwoods has been in business since 2002, and only deals in high-quality lumber. We guarantee only the best lumber for your projects.</p>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid" src="imgs/sign.jpg">
                    </div>
                </div>
            </div>
            <div class="container my-5">
                <h2 class="display-4">Projects</h2>
                <p class="lead">From small residential installations to corporate offices, we have supplied high-quality wood for a wide variety of projects.</p>
                <p><a href="catalog.html" class="btn btn-primary">Check out our catalog</a></p>
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
                <h2 class="display-4">Blog</h2>
                <p class="lead">Check out our latest news and info.</p>
                <p><a href="blog.html" class="btn btn-primary">See more articles</a></p>
                <div class="row p-3 g-3 g-lg-5 text-center">
                    <div class="col-md-4">
                        <div class="card shadow h-100">
                            <img class="card-img-top" src="imgs/cutting-board-resized.jpg">
                            <div class="card-body">
                                <h5 class="card-title">More Cutting Boards in Stock!</h5>
                                <p class="card-text">We have 30 more cutting boards in stock! Come and check them out today! ...</p>
                                <a href="article.php" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow h-100">
                            <img class="card-img-top" src="imgs/fig-5-7-resized.jpg">
                            <div class="card-body">
                                <h5 class="card-title">New 5-7 Fig in Stock</h5>
                                <p class="card-text">We have a pallet of 5-7 Fig hardwood, available for purchase now! ...</p>
                                <a href="article.php" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow h-100">
                            <img class="card-img-top" src="imgs/fig-8-4-resized.jpg">
                            <div class="p-3">
                                <h5 class="card-title">New 8-4 Fig in Stock</h5>
                                <p class="card-text">We have a pallet of 8-4 Fig hardwood, available for purchase now! ...</p>
                                <a href="article.php" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
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