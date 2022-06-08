<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Products - MPH Wood</title>
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

                let woodSpecies = document.getElementById("wood-species");
                let otherProducts = document.getElementById("other-products");

                //Generate the list of wood species
                for(let product of products.species) {
                    woodSpecies.appendChild(makeProductListing(product));
                }

                //Generate the list of other products
                for(let product of products.other) {
                    otherProducts.appendChild(makeProductListing(product));
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
                <h1 class="display-3">Products</h1>
                <p class="lead">Check out our stock below, and see what we currently have available.</p>
            </div>
            <div class="container my-5">
                <h2 class="display-5">Wood Species</h2>
                <p class="lead">We routinely carry the following species of wood. For more information about a type of wood, please contact us.</p>
                <div class="row g-3" id="wood-species"></div>
            </div>
            <div class="container my-5">
                <h2 class="display-5">Slabs and Wood Products</h2>
                <p class="lead">We provide a range of slabs and handcrafted wood products like cutting boards.</p>
                <div class="row g-3" id="other-products"></div>
            </div>
            <div class="container my-5">
                <p class="lead">Is the product you want not in stock? Follow us on Twitter to receive updates when we have new stock available.</p>
                <a href="https://twitter.com/mphwood?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-size="large" data-dnt="true" data-show-count="false">Follow @mphwood</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </main>
        <!-- End Main Body -->
        <!-- Begin Footer -->
        <?php include __DIR__ . "/includes/footer.html"; ?>
        <!-- End Footer -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>