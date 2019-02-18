<?php 
session_start();
$user = $_SESSION['user'];

$conn = mysqli_connect('localhost', 'root', '', 'bookings');

if (isset($_SESSION)) {
    $checkindate = strtotime($_SESSION['checkindate']);
    $checkoutdate = strtotime($_SESSION['checkoutdate']);
    $diff = abs($checkoutdate - $checkindate);

    $years = floor($diff / (365*60*60*24));
    $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
    $days = floor(($diff - $years * 365*60*60*24 - $months *30*60*60*24) / (60*60*24));
}

?>

<?php

if (isset($_POST['logout'])) {
        session_destroy();
        header("location: index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/confirm.css">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Karla|Nunito" rel="stylesheet">
    <title>Confirm</title>
</head>
<body>

   <div class="container">

        <div class="logcont">

        <form action="" method="post">


            <p class="p">Thanks <?php echo $_SESSION['user']?>. <br><br> You have booked <?php echo $_SESSION['venue'] ?> for <?php echo $days ?> Nights <br><br>  from <?php echo $_SESSION['checkindate'] ?> to <?php echo $_SESSION['checkoutdate'] ?>  </p>

            <button action="" type="submit" method="post" name="logout">Logout</button>

        </form>
    
</div>

</div>
    
</body>
</html>
