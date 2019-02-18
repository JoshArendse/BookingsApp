<?php 
session_start();
include_once 'user.php';

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("connection failed: " . mysqli_connect_error());
}

// verifying data/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if (isset($_POST['login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $booking = $conn -> query("SELECT * FROM rooms");
    while($row = $booking -> fetch_assoc()) {
        if(trim($user)==$row['Username'] && trim($pass) == $row['Password']) {
            echo "Successfull";
            $_SESSION['user'] = $row['Username'];
            header("refresh: 0;/home.php");
        } else {
            echo "Username or password incorrect";
            header("refresh: 2;/index.php");
        }
    }
}

?>