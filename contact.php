<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/path/to/tailwind.css" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Contact Us</title>
</head>
<style>
    body {
        color: black;
    }
</style>

<body>
    <?php
    include '_navbar.php'
    ?>
    <section class="text-gray-600 body-font relative">
        <div class="absolute inset-0 bg-gray-300">
            <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3801.2211826394937!2d74.17431001385418!3d17.68700849875212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2353edb39b219%3A0xd94b89972e1d994!2sMATOSHRI%20NIVAS!5e0!3m2!1sen!2sin!4v1656858193502!5m2!1sen!2sin" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
        </div>

        <form action="contact.php" method="POST">
            <div class="container px-5 py-24 mx-auto flex">
                <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
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
                    <h1 class="text-gray-900 text-lg mb-1 font-medium title-font">Connect With Us</h1>
                    <div class="relative mb-4 mt-3">
                        <label for="email" class="leading-7 text-sm text-gray-600">Name</label>
                        <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
                    </div>
                    <div class="relative mb-4">
                        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                        <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
                    </div>
                    <div class="relative mb-4">
                        <label for="email" class="leading-7 text-sm text-gray-600">Contact Number</label>
                        <input type="number" id="contactno" name="contactno" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <div class="relative mb-4">
                        <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                        <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out" required></textarea>
                    </div>
                     <button class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg" >Get in Touch</button>  <!--onclick="sendEmail()" -->
                </div>
            </div>
        </form>
    </section>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function sendEmail() {
        var name = $("#name");
        var email = $("#email");
        var contactno = $("#contactno");
        var message = $("#message");

        if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(contactno) && isNotEmpty(message)) {
            $.ajax({
                url: 'sendEmail.php',
                method: 'POST',
                dataType: 'json',
                data: {
                    name: name.val(),
                    email: email.val(),
                    contactno: contactno.val(),
                    message: message.val(),
                },
                success: function(response) {
                    $('#myForm')[0].reset();
                    $('.send-notification').text("Massage send successfully.");
                }
            })
        }
    }

    function isNotEmpty(caller) {
        if (caller.val() == "") {
            caller.html('border', '1px solid red');
            return false;
        } else {
            caller.html('border', '')
            return true;
        }
    }
</script>

</html>