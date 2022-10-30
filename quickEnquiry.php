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