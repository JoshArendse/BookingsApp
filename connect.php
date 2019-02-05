<?php 

include_once 'user.php';

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("connection failed: " . mysqli_connect_error());
}

$Username = $_POST['Username'];
$Password = $_POST['Password'];

$sql = "INSERT INTO rooms (Username, Password) VALUES ('$Username', '$Password')";

if (!mysqli_query($conn, $sql)){
    echo 'Not Inserted';
} else {
    echo '';
}

header("refresh: 0;welcome.php")
    


?>