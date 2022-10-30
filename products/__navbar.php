<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="../style.css">
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');

    * {
        font-family: 'Open Sans', sans-serif;
    }

    .nav-link {
        font-weight: bold;
    }

    #dropdownIndian,
    #dropdownPomace,
    #dropdownAlmond,
    #dropdownMaizOil,
    #dropdownCattle,
    #dropdownExtra,
    #dropdownCattleFeed,
    #dropdownPaddy,
    #dropdownMaizeCattle,
    #dropdownAll {
        background-color: white;
        color: black;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark" aria-label="Offcanvas navbar large">
        <div class="container-fluid">
            <img src="../logo2.jpeg" alt="" width="150px" height="55px" />
            <!-- <a class="navbar-brand" href="#">Responsive offcanvas navbar</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-white bg-dark" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Offcanvas</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="../index.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="../about.php">About</a>
                        </li>
                        <!-- Cattle Feed Pellets -->


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarLgDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Products
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarLgDropdown">

                                <li><a class="dropdown-item" id="dropdownCattle" href="cattleFeedPellets.php">Cattle Feed Pellets</a></li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" id="dropdownMaizOil" href="maizeOilCake.php">Maize Oil Cake</a></li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" id="dropdownMaizeCattle" href="maizeCattleFeed.php">Maize Cattle Feed</a></li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" id="dropdownPaddy" href="../products_item/freshPaddyStraws.php">Paddy Straws</a></li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" id="dropdownCattleFeed" href="cattleFeed.php">Cattle Feed</a></li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" id="dropdownCattleFeed" href="oil.php">Oil</a></li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" id="dropdownAll" href="../allProducts.php">All Products</a></li>

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="../services/services.php">Services</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="../contact.php">Contact Us</a>
                        </li>
                    </ul>
                    <div class="buttononnavbar">
                        <!-- <button type="button" class="btn btn-outline-light">Quick Enquiry</button> -->
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <br>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<script>
</script>
<script>
    // Active page shows code
    const activePage = window.location.pathname;
    const navLinks = document.querySelectorAll('nav a').forEach(link => {
        if (link.href.includes(`${activePage}`)) {
            link.classList.add('active');
            console.log(link);
        }
    })
</script>

<script>
    // show hide navbar
    let scroll1 = window.pageYOffset;
    window.onscroll = function() {
        let scroll2 = window.pageYOffset;
        if (scroll1 > scroll2) {
            document.querySelector('nav').style.top = '0';
        } else {
            document.querySelector('nav').style.top = '-100px';
        }
        scroll1 = scroll2;

    }
</script>

<!-- our aos data -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        offset: 50,
        duration: 1000,
    });
</script>

</html>