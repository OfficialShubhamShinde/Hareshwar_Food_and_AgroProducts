<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'cattle_feed_pellets';

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    echo "Connection Unsucessful can not connect beacuse ---> " . mysqli_connect_error();
}
?>