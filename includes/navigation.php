<nav class="navbar navbar-expand-md navbar-dark bg-wood">
    <div class="container-fluid">
        <a class="navbar-brand text-wrap overflow-hidden" href="index.php">
            <img src="imgs/logo-dark.svg" alt="" height="75" class="d-inline-block align-text-center" aria-hidden="false">
            <span class="text-nowrap">Miller Pacific Hardwoods</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav me-auto">
                <?php
                if(!isset($active_page)) {
                    throw new Exception('$active_page is not set');
                }

                $nav_items = [
                    "Home" => "index.php",
                    "Products" => "products.php",
                    "About" => "about.php"
                ];


                foreach($nav_items as $key=>$value) {
                    echo "<li class='nav-item'>";
                    if($active_page == $value) {
                        echo "<a class='nav-link active' aria-current='page' href='$value'>$key</a>";
                    }else {
                        echo "<a class='nav-link' href='$value'>$key</a>";
                    }
                    echo "</li>";
                }
                ?>
            </ul>
            <ul class="navbar-nav flex-row nav-social me-3">
                <li class="nav-item">
                    <a class="nav-link" href="https://www.facebook.com/MillerPacific"><i role="img" class="bi bi-facebook fs-5" aria-label="Facebook"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://twitter.com/mphwood"><i role="img" class="bi bi-twitter fs-5" aria-label="Twitter"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://instagram.com/mphwood"><i role="img" class="bi bi-instagram fs-5" aria-label="Instagram"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>