<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About - MPH Wood</title>
        <link rel="icon" type="image/png" sizes="32x32" href="imgs/icon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="imgs/icon-16x16.png">

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
            <section>
                <div class="container my-5">
                    <h2 class="display-4">Customers and Projects</h2>
                    <p class="lead">We have provided high-quality hardwood to many different customers for all kinds of projects. Check out some of the ways our wood has been used below</p>
                    <div class="row g-3 align-items-center">
                        <div class="col-md-4">
                            <img class="img-fluid w-100" src="imgs/stairs-resized.jpg" alt="An office with a staircase made with our hardwood">
                        </div>
                        <div class="col-md-8">
                            <h3>Wimberly Allison Tong & Goo</h3>
                            <p>This beautiful staircase is in WATG's Irvine, California office. We provided the hardwood used to construct it in 2011.</p>
                        </div>
                    </div>
                    <div class="row g-3 flex-md-row-reverse text-md-end align-items-center">
                        <div class="col-md-4">
                            <img class="img-fluid w-100" src="imgs/pergola-resized.jpg" alt="A pergola made of redwood">
                        </div>
                        <div class="col-md-8">
                            <h3>Pergola</h3>
                            <p>This DIY pergola was built in Eagle, Idaho in 2020. We milled and supplied the redwood used in this beautiful project.</p>
                        </div>
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col-md-4">
                            <img class="img-fluid w-100" src="imgs/kitchen-counter-resized.jpg" alt="A kitchen counter made of a single slab of wood">
                        </div>
                        <div class="col-md-8">
                            <h3>Kitchen Counter</h3>
                            <p>This kitchen counter was installed in 2021 in eastern Montana. It is made of a beautiful single piece of 2 inch thick black walnut that we provided.</p>
                        </div>
                    </div>
                    <div class="row g-3 flex-md-row-reverse text-md-end align-items-center">
                        <div class="col-md-4">
                            <img class="img-fluid w-100" src="imgs/potting-bench-resized.jpg" alt="A potting bench with four plants on it, in front of a redwood privacy wall">
                        </div>
                        <div class="col-md-8">
                            <h3>Potting Bench and Privacy Wall</h3>
                            <p>This potting bench was made using our western red cedar. In addition, we provided the cedar used to make the privacy wall behind the bench.</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- End Main Body -->
        <!-- Begin Footer -->
        <?php include __DIR__ . "/includes/footer.html"; ?>
        <!-- End Footer -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>