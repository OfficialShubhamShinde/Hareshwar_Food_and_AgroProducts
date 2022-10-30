<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/
libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="
sha256-eZrr]cwDc/3uDhsdt61sL200BYR62qM3lon1gyExkL0=" crossorigin="
anonymous" />
</head>

<style>
    * {
        margin: 0;
        padding: 0;
    }

    footer h5 {
        color: brown;
        font-weight: bold;
    }

    .footer {
        background-color: rgb(241, 241, 241);
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
</style>

<body>
    <div class="row" id="">
        <div class="col-lg-4">
            <br>
            <center>
                <h3 class=" fw-bold" data-aos="flip-up">Location</h3> <br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.999387911985!2d73.89121796386745!3d18.483686925127817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2ea7edde1f7fb%3A0xb17e97d8a7b90486!2sGulmohar%20Habitat%20Phase%201%2C%20Salunke%20Vihar%20Rd%2C%20Borade%20Nagar%2C%20Wanowrie%2C%20Pune%2C%20Maharashtra%20411040!5e0!3m2!1sen!2sin!4v1652953237469!5m2!1sen!2sin" width="350" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </center>
        </div>

        <div class="col-lg-4">

            <center>
                <br>
                <h3 class=" fw-bold" data-aos="flip-up">Connect With US</h3>

                <div class="second">
                    <a href="https://www.facebook.com/profile.php?id=100009714557541" target="_blank">
                        <i class="fa fa-2x fa-facebook"></i>
                    </a>

                    <a href="https://www.instagram.com/_shubham__shinde_" target="_blank">
                        <i class="fa fa-2x fa-instagram"></i>
                    </a>

                    <a href="https://twitter.com/SHUBHAM19990720" target="_blank">
                        <i class="fa fa-2x fa-twitter"></i>
                    </a>

                    <a href="http://linkedin.com/in/shubham-shinde-588005223" target="_blank">
                        <i class="fa fa-2x fa-linkedin"></i>
                    </a>
                </div>
            </center>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <br>
            <center>
                <h3 class=" fw-bold " data-aos="flip-up" id="textInIndexofQuickInquiry">Quick Enquiry</h3> <br>
                <?php
                // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                //     $name = $_POST['name'];
                //     $email = $_POST['email'];
                //     $contactno = $_POST['contactno'];
                //     $products_item = $_POST['products_item'];
                //     $quantity = $_POST['quantity'];
                //     $unit = $_POST['unit'];
                //     $purpose = $_POST['purpose'];
                //     $detail = $_POST['detail'];

                //     include '_dbconnect.php';

                //     $insertData = "INSERT INTO `quick_inquiry` (`name`, `email`, `contact_no`, `choose_product`, `quantity`, `unit`, `purpose`, `detail`, `date_time`) VALUES ('$name', '$email', '$contactno', '$products_item', '$quantity', '$unit', '$purpose', '$detail', current_timestamp())";
                //     $result = mysqli_query($conn, $insertData);


                //     if ($result) {
                //         echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                //             <strong>Thank You!</strong> Connecting With Hareshwar Food & Agro Services.
                //             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                //           </div>';
                //         header("location:index.php");
                //     } else {
                //         echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                //             <strong>Error!</strong> Something went wrong.
                //             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                //           </div>';
                //         header("location:index.php");
                //     }
                // }
                ?>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, unde!</p>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-dark ms-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Get Quick Quote
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="staticBackdropLabel">Quick Enquiry</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="imageinmodal">
                                    <center><img src="logo2.jpeg" alt="" width="200" height="100">
                                        <!-- <h4 class="mt-3" style="color: rgb(194, 192, 192);">Hareshwar Foods & Agro Services</h4> -->
                                    </center>
                                </div>
                                <!--Form submit in :  _footer.php#textInIndexofQuickInquiry method="post" -->
                                <form>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Name" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="number" class="form-control" id="contactno" name="contactno" placeholder="Contact Number">
                                    </div>
                                    <select class="form-select mb-3 mt-3" name="products_item" id="products_item" aria-label="Default select example" required>
                                        <option selected>Choose Product</option>
                                        <option value="Balanced Cattle Feed Pellets">Balanced Cattle Feed Pellets</option>
                                        <option value="Dairy Cattle Feed Pellets">Dairy Cattle Feed Pellets</option>
                                        <option value="Dried Cattle Feed Pellets">Dried Cattle Feed Pellets</option>
                                        <option value="Fresh Cattle Feed Pellets">Fresh Cattle Feed Pellets</option>
                                        <option value="Natural Cattle Feed Pellets">Natural Cattle Feed Pellets</option>
                                        <option value="Organic Cattle Feed Pellets">Organic Cattle Feed Pellets</option>
                                        <option value="Crude Maize Oil Cake">Crude Maize Oil Cake</option>
                                        <option value="High Protein Maize Oil Cake">High Protein Maize Oil Cake</option>
                                        <option value="Natural Maize Cattle Feed">Natural Maize Cattle Feed</option>
                                        <option value="Organic Maize Cattle Feed">Organic Maize Cattle Feed</option>
                                        <option value="Pure Maize Cattle Feed">Pure Maize Cattle Feed</option>
                                        <option value="Raw Maize Cattle Feed">Raw Maize Cattle Feed</option>
                                        <option value="Yellow Maize Cattle Feed">Yellow Maize Cattle Feed</option>
                                        <option value="Fresh Paddy Straws">Fresh Paddy Straws</option>
                                        <option value="Buffalo Cattle Feed">Buffalo Cattle Feed</option>
                                        <option value="Soya Lecithin Cattle Feed">Soya Lecithin Cattle Feed</option>
                                        <option value="Indian Pulses">Indian Pulses</option>
                                        <option value="Pomace Olive Oil">Pomace Olive Oil</option>
                                        <option value="Extra Virgin Olive Oil">Extra Virgin Olive Oil</option>
                                        <option value="Almond Oil">Almond Oil</option>
                                    </select>
                                    <div class="xyz" style="display: flex;">
                                        <div class="col-md-4 position-relative">
                                            <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantity" required>
                                        </div>
                                        <div class="col-md-4 position-relative" style="margin-left: 40px;">
                                            <input type="text" class="form-control" id="unit" name="unit" placeholder="Unit Type" required>
                                        </div>
                                    </div>
                                    <select class="form-select mb-3 mt-3" name="purpose" id="purpose" aria-label="Default select example">
                                        <option selected>Purpose of Requirement</option>
                                        <option value="Reselling">Reselling</option>
                                        <option value="End Use">End Use</option>
                                        <option value="Raw Material">Raw Material</option>
                                    </select>
                                    <div class="form-floating mb-3 mt-2">
                                        <textarea class="form-control" placeholder="Leave a comment here" name="detail" id="detail" style="height: 100px"></textarea>
                                        <label for="floatingTextarea2">Requirement Details</label>
                                    </div>
                                    <center><button type="submit" class="btn btn-outline-dark">Send Enquiry</button></center>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </center>
        </div>
    </div>
    </div>

    <div class="footer">
        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top footer">
            <div class="col mb-3">

            </div>

            <div class="col mb-3">
                <h5>General Links </h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="index.php" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="about.php" class="nav-link p-0 text-muted">About</a></li>
                    <li class="nav-item mb-2"><a href="allProducts.php" class="nav-link p-0 text-muted">Products</a></li>
                    <li class="nav-item mb-2"><a href="services/services.php" class="nav-link p-0 text-muted">Services</a></li>
                    <li class="nav-item mb-2"><a href="contact.php" class="nav-link p-0 text-muted">Contact Us</a></li>
                </ul>
            </div>

            <div class="col mb-3">
                <h5>Our Products</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="products/cattleFeedPellets.php" class="nav-link p-0 text-muted">Cattle Feed Pellets</a></li>
                    <li class="nav-item mb-2"><a href="products/maizeOilCake.php" class="nav-link p-0 text-muted">Maize Oil Cake</a></li>
                    <li class="nav-item mb-2"><a href="products/maizeCattleFeed.php" class="nav-link p-0 text-muted">Maize Cattle Feed</a></li>
                    <li class="nav-item mb-2"><a href="products_item/freshPaddyStraws.php" class="nav-link p-0 text-muted">Paddy Straws</a></li>
                    <li class="nav-item mb-2"><a href="products/cattleFeed.php" class="nav-link p-0 text-muted">Cattle Feed</a></li>
                    <li class="nav-item mb-2"><a href="products/oil.php" class="nav-link p-0 text-muted">Oil</a></li>
                </ul>
            </div>

            <div class="col mb-3">
                <h5>Services</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="services/services.php" class="nav-link p-0 text-muted">Grain Service</a></li>
                    <li class="nav-item mb-2"><a href="services/printingPackaging.php" class="nav-link p-0 text-muted">Printing & Packaging</a></li>
                    <li class="nav-item mb-2"><a href="services/cattleFeeds.php" class="nav-link p-0 text-muted">Cattel Feeds</a></li>
                    <li class="nav-item mb-2"><a href="services/oilServices.php" class="nav-link p-0 text-muted">Oil Service</a></li>
                </ul>
            </div>

            <div class="col mb-0">
                <h5>Contact Us</h5>
                <p><b>Address</b><br> Behinde D.P.Bhosale Collage, <br> Subhashnager, Koregaon <br> Pin: 415501 <br> Contact No: 7774882080 </p>
            </div>
        </footer>
        <footer class="py-0 my-4 footer">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="ms-3"><a class="text-muted" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                        </svg>
                <li class="ms-3"><a class="text-muted" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                        </svg></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                        </svg></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                        </svg></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                        </svg></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg></a></li>
            </ul>
            <p class="text-center text-muted">© 2022 Company, Inc</p>
        </footer>
    </div>
</body>

</html>