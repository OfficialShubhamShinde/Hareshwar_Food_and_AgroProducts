<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/
libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="
sha256-eZrr]cwDc/3uDhsdt61sL200BYR62qM3lon1gyExkL0=" crossorigin="
anonymous" />
    <title>Welcome! Hareshwar Foods & Agro Services</title>
</head>

<style>
    * {
        margin: 0;
        padding: 0;
    }

    #serviceCardIndex1 {
        background-color: #C39EA0;
    }

    #serviceCardIndex2 {
        background-color: #9fa8a3;
    }

    #serviceCardIndex3 {
        background-color: #B89F5D;
    }

    #serviceCardIndex4 {
        background-color: #5A7670;
    }

    .serviceCard-index:hover {
        transition: 1s;
        transform: scale(1.1);
        background-color: #c5d5cb;
    }

    .card:hover {
        transition: 1s;
        transform: scale(1.1);
        /* background-color: rgb(177, 169, 169); */
    }



    .second {
        margin-left: 5%;
        height: 20vh;
        display: flex;
        justify-content: center;
        align-items: center;
        /* margin-right: 53%; */
    }

    .second a {
        height: 60px;
        width: 60px;
        background-color: white;
        border-radius: 50px;
        border: 1px solid black;
        text-align: center;
        margin: 10px;
        line-height: 70px;
        box-shadow: 1px, 4px, 2px, 2px rgb(4, 48, 48);
    }

    a i {
        transition: all 0.3sec linear;
    }

    a:hover i {
        transform: scale(1.2);
    }

    .second i {
        color: black;
    }

    a {
        text-decoration: none;
        color: black;
    }
</style>

<body style="background-color: rgb(241, 241, 241);">
    <?php
    include '_navbar.php';
    ?>
    <!-- <img src="images/banner1.jpg" class="img-fluid" alt="..."> -->
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="images/banner1.jpg" class="d-block w-100" height="497px" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="https://media.istockphoto.com/vectors/cows-in-different-poses-vector-set-silhouettes-of-grass-cow-grazing-vector-id1179597687?k=20&m=1179597687&s=612x612&w=0&h=GILFQ7HFKzP4WyWeImC_6SQPBkBpDSBR5pXrZLZEGyQ=" height="497px" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://media.istockphoto.com/photos/businessman-touching-the-screen-about-sectoral-consept-picture-id517665786?k=20&m=517665786&s=612x612&w=0&h=lLnXJK_VS5KmmlKp3Xttl2h3TRPLPYU3R4WoyT3oNjQ=" height="497px" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container" style="background-color: white;">
        <div class="px-4 py-5 my-5 text-center">
            <img class="d-block mx-auto mb-4" src="logo2.jpeg" alt="" width="250" height="150">
            <h2 class="display-5 fw-bold allHeadings" data-aos="flip-up">Welcome to Hareshwar Foods & Agro Services</h2>
            <div class="col-lg-9 mx-auto">
                <p class="lead mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis illo et minima sunt ea! Architecto ullam doloribus, obcaecati adipisci ut blanditiis perspiciatis vero eveniet, quibusdam accusantium consectetur? Totam magni perspiciatis eius quae dolores quisquam excepturi optio officia soluta, eveniet magnam? Sit tempora esse obcaecati assumenda impedit corrupti, incidunt sunt quibusdam. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa fuga, incidunt corrupti quisquam vero amet sunt corporis sint, beatae ut inventore consectetur in. Sequi similique assumenda ratione aut iste nam debitis totam modi consectetur doloribus distinctio mollitia, nobis illo suscipit impedit dicta consequuntur pariatur, magnam ipsa possimus asperiores, hic tempore.</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a href="about.php"><button type="button" class="btn btn-outline-dark">Learn More...</button></a>
                </div>
            </div>
        </div>

        <center>
            <h2 class="display-5 fw-bold allHeadings" data-aos="flip-up">Product Range</h2>
        </center>
        <br>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="https://media.istockphoto.com/photos/rabbit-feed-picture-id1271131215?k=20&m=1271131215&s=612x612&w=0&h=VM5GwiLH_eT_d9ea2kgnq7E1kUt1x_QJHfjuVmRM_fY=" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center;">Balanced Cattle Feed Pellets</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://media.istockphoto.com/photos/pelleted-compound-feed-for-cattle-isolated-on-white-background-picture-id876874056?k=20&m=876874056&s=612x612&w=0&h=PvXUIpS4-YrtrwlRPF1zwjrxEfq66oJJRVXWtCXCCE0=" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center;">Dairy Cattle Feed Pellets</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://media.istockphoto.com/photos/pelleted-compound-feed-isolated-on-white-background-wheatfeed-pellets-picture-id864942762?k=20&m=864942762&s=612x612&w=0&h=rmDgA6epcoutDnuBz3EQaWzYUV7caqsQ9r4-1dWfso0=" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center;">Dried Cattle Feed Pellets</h5>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="https://media.istockphoto.com/photos/pelleted-compound-feed-isolated-on-white-background-wheatfeed-pellets-picture-id912867412?k=20&m=912867412&s=612x612&w=0&h=lKjBbO4SjLUfxruHNQL4QL9wMigq0ugQ0CsNMwkYsPE=" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center;">Fresh Cattle Feed Pellets</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://media.istockphoto.com/photos/bowl-of-pelleted-compound-feed-picture-id1287642844?k=20&m=1287642844&s=612x612&w=0&h=LZ1hK7Mez_zqEODpG3xH6GEz5dDT1TXDLV1_D5xHthA=" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center;">Natural Cattle Feed Pellets</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://media.istockphoto.com/photos/corn-oil-picture-id1395535078?k=20&m=1395535078&s=612x612&w=0&h=fgoUczS7HhOnHYSnU1uJ51r04MJgzA-mKw4Y1g4qwBU=" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center;">Crude Maize Oil Cake</h5>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="https://media.istockphoto.com/photos/overflowing-maize-seeds-picture-id170215019?k=20&m=170215019&s=612x612&w=0&h=4Jg43c_pAzSpYj7IDogFUy45DlonmxLXQo6g5DLZQDA=" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center;">Natural Maize Cattle Feed</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://media.istockphoto.com/photos/pile-of-hay-isolated-on-white-background-picture-id1383313037?k=20&m=1383313037&s=612x612&w=0&h=TDHZ2vwkk84pYt7dulcAdPd53SwXEpYT_9_xXEuCtX8=" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center;">Fresh Paddy Straws</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://media.istockphoto.com/photos/compound-feed-picture-id1011451398?k=20&m=1011451398&s=612x612&w=0&h=d77UCRD7kHsaBSZ-G4II-C6nl47s_V1KiuryT-jrmrg=" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center;">Buffalo Cattle Feed</h5>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
            <div class="col">
                <div class="card h-100">
                    <img src="https://media.istockphoto.com/photos/mix-seeds-food-picture-id854434164?k=20&m=854434164&s=612x612&w=0&h=PTi3DZUJPD91nZM5glfEuZVP3jga3cP0_pA4SovZb6k=" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center;">Indian Pulses</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://media.istockphoto.com/photos/almond-oil-picture-id519338518?k=20&m=519338518&s=612x612&w=0&h=kqiLr5WRRTVJyevDN4QQ8rkWh-yDcvZz5ca71wc2BAo=" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center;">Almond Oil</h5>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <center><a href="allProducts.php"><button type="button" class="btn btn-outline-dark">View All Products</button></a></center>
        <br>

        <div class="supportUS mt-5">
            <center>
                <h2 class="display-5 fw-bold allHeadings" data-aos="flip-up">Our Services</h2>
                <br>
                <div class="card-group">
                    <div class="card serviceCard-index" id="serviceCardIndex1">
                        <div class="card-body">
                            <h3 class="card-title"><b>Grain Services</b></h3>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <a class="btn btn-outline-dark" href="services/services.php" role="button">Learn More...</a>
                        </div>
                    </div>

                    <div class="card serviceCard-index" id="serviceCardIndex2">
                        <div class="card-body">
                            <h4 class="card-title"><b>Printing Packaging</b></h4>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            <a class="btn btn-outline-dark" href="services/printingPackaging.php" role="button">Learn More...</a>
                        </div>
                    </div>

                    <div class="card serviceCard-index" id="serviceCardIndex3">
                        <div class="card-body">
                            <h3 class="card-title"><b>Cattle Feeds</b></h3>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            <a class="btn btn-outline-dark" href="services/cattleFeeds.php" role="button">Learn More...</a>
                        </div>
                    </div>

                    <div class="card serviceCard-index" id="serviceCardIndex4">
                        <div class="card-body">
                            <h3 class="card-title"><b>Oil Services</b></h3>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            <a class="btn btn-outline-dark" id="buttoncardServiceslearnMore" href="services/oilServices.php" role="button">Learn More...</a>
                        </div>
                    </div>
                </div>
                <br>
            </center>
        </div>
        <div class="Enquiryformonindex" id="Enquiryformonindex">
            <center>
                <h2 class="display-5 fw-bold allHeadings" id="quickEnquiryInIndex" data-aos="flip-up">Quick Enquiry</h2>
            </center>
            <br>
            <center>
                <form action="index.php#forminIndex" method="POST">
                    <div class="col-md-7 col-lg-8" id="forminIndex">
                        <form class="needs-validation" novalidate="">
                            <div class="row g-3">
                                <?php
                                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                    $name = $_POST['name'];
                                    $email = $_POST['email'];
                                    $contactno = $_POST['contactno'];
                                    $message = $_POST['message'];

                                    include '_dbconnect.php';

                                    $insertData = "INSERT INTO `contact_us` (`name`, `email`, `contact_no`, `message`) VALUES ('$name', '$email', '$contactno', '$message')";
                                    $result = mysqli_query($conn, $insertData);

                                    if ($result) {
                                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                        <strong>Thank You!</strong> Connecting With Hareshwar Food & Agro Services.
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                      </div>';
                                    } else {
                                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                        <strong>Error!</strong> Something went wrong.
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                      </div>';
                                    }
                                }
                                ?>
                                <div class="col-12">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                                </div>

                                <div class="col-12">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                </div>

                                <div class="col-12">
                                    <input type="number" class="form-control" id="email" name="contactno" placeholder="Contact Number" required>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="message" style="height: 100px"></textarea>
                                        <label for="floatingTextarea2">Message</label>
                                    </div>
                                </div>
                                <center><button type="submit" class="btn btn-outline-dark">Send Message</button></center>
                            </div>
                        </form>
                    </div>

            </center>
        </div>
        <br>

        <?php
        include '_footer.php';
        ?>

</body>
<script>

</script>

</html>