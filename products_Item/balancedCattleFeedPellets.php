<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/path/to/tailwind.css" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Balanced Cattle Feed Pellets</title>
</head>

<style>

</style>

<body>
    <?php
    include '_navbarInsideProducts_Item.php'
    ?>
    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-5 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="https://media.istockphoto.com/photos/rabbit-feed-picture-id1271131215?k=20&m=1271131215&s=612x612&w=0&h=VM5GwiLH_eT_d9ea2kgnq7E1kUt1x_QJHfjuVmRM_fY=" width="400" height="400">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0" id="modalEnquirySubmit">


                    <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $contactno = $_POST['contactno'];
                        $quantity = $_POST['quantity'];
                        $unit = $_POST['unit'];
                        $purpose = $_POST['purpose'];
                        $detail = $_POST['detail'];

                        include '../_dbconnect.php';

                        $insertData = "INSERT INTO `product_enquiry` (`name`, `email`, `contact_no`, `quantity`, `unit_type`, `purpose`, `detail`) VALUES ('$name', '$email', '$contactno', '$quantity', '$unit', '$purpose', '$detail')";
                        $result = mysqli_query($conn, $insertData);


                        if ($result) {
                            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Thank You!</strong> Your Enquiry has been sent successfully.
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


                    <h2 class="text-sm title-font text-gray-500 tracking-widest">Cattle Feed Pellets</h2>
                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">Balanced Cattle Feed Pellets</h1>
                    <div class="flex mb-4">
                        <span class="flex items-center">
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                        </span>
                        <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200 space-x-2s">
                            <a class="text-gray-500">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                </svg>
                            </a>
                            <a class="text-gray-500">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                                </svg>
                            </a>
                            <a class="text-gray-500">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                </svg>
                            </a>
                        </span>
                    </div>
                    <div class="table">
                        <div class="flex border-t border-gray-200 py-2">
                            <span class="text-gray-500">Business Type</span>
                            <span class="ml-auto text-gray-900">Manufacturer, Exporter, Supplier, Retailer</span>
                        </div>
                        <div class="flex border-t border-gray-200 py-2">
                            <span class="text-gray-500">Color</span>
                            <span class="ml-auto text-gray-900">Light Brown</span>
                        </div>
                        <div class="flex border-t border-gray-200 py-2">
                            <span class="text-gray-500">Fat (% Between) </span>
                            <span class="ml-auto text-gray-900">2 3.5 Crude</span>
                        </div>
                        <div class="flex border-t border-gray-200 py-2">
                            <span class="text-gray-500">Moisture</span>
                            <span class="ml-auto text-gray-900">10 %</span>
                        </div>
                        <div class="flex border-t border-gray-200 py-2">
                            <span class="text-gray-500">Protein</span>
                            <span class="ml-auto text-gray-900">20-25%</span>
                        </div>
                    </div>

                    <div class="flex">
                        <span class="title-font font-medium text-2xl text-gray-900">₹58.00</span>

                        <div class="flex" style="justify-content: center;">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-dark ms-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Get Quick Quote
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="staticBackdropLabel">Get a Quick Quote</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="imageinmodal">
                                                <center><img src="../logo2.jpeg" alt="" width="200" height="100">
                                                    <h4 class="mt-3" style="color: rgb(194, 192, 192);">Product Name Here</h4>
                                                </center>
                                            </div>
                                            <form action="#modalEnquirySubmit" method="POST">
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Name" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="number" class="form-control" id="contactno" name="contactno" placeholder="Contact Number">
                                                </div>
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
                        </div>
                        <button class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>