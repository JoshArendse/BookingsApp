<?php 

$conn = mysqli_connect('localhost', 'root', '', 'bookings');

if(isset($_POST['submit'])){

    $checkindate = mysqli_real_escape_string($conn, $_POST['checkindate']);
    $checkoutdate = mysqli_real_escape_string($conn, $_POST['checkoutdate']);
    $venue = mysqli_real_escape_string($conn, $_POST['venue']);

    if(isset($_POST['business'])) {
        $business = 1;
    } else {
        $business = 0;
    };

    if(isset($_POST['parking'])) {
        $parking = 1;
    } else {
        $parking = 0;
    };

    if(isset($_POST['wifi'])) {
        $wifi = 1;
    } else {
        $wifi = 0;
    };
    
    $sql = "INSERT INTO hotels (checkindate, checkoutdate, venue, business, parking, wifi) VALUES('$checkindate', '$checkoutdate', '$venue', '$business', '$parking', '$wifi')";
    mysqli_query($conn, $sql);

}







?>