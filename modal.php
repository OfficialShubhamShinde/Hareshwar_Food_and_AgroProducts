<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal</title>
</head>

<body>
    <?php
    include '_navbar.php';
    ?>

    <div class="container mt-4">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Launch static backdrop modal
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
                            <center><img src="logo2.jpeg" alt="" width="200" height="100">
                                <h4 class="mt-3" style="color: rgb(194, 192, 192);">Product Name Here</h4>
                            </center>
                        </div>
                        <form>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email" required>
                            </div>
                            <div class="mb-3">
                                <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Contact Number">
                            </div>
                            <div class="xyz" style="display: flex;">
                                <div class="col-md-4 position-relative">
                                    <input type="number" class="form-control" id="validationTooltip01" placeholder="Quantity" required>
                                </div>
                                <div class="col-md-4 position-relative" style="margin-left: 40px;">
                                    <input type="text" class="form-control" id="validationTooltip02" placeholder="Unit Type" required>
                                </div>
                            </div>
                            <select class="form-select mb-3 mt-3" aria-label="Default select example">
                                <option selected>Purpose of Requirement</option>
                                <option value="1">Reselling</option>
                                <option value="2">End Use</option>
                                <option value="3">Raw Material</option>
                            </select>
                            <div class="form-floating mb-3 mt-2">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Requirement Details</label>
                            </div>
                            <center><button type="submit" class="btn btn-outline-dark">Send Enquiry</button></center>
                        </form>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>