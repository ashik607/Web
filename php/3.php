<?php
// Database connection
$hostname = "localhost";
$username = "root";
$password = "password";
$database = "pan";

$con = mysqli_connect("localhost", "root", "", "pan");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO gan (name, email, Password, phone, Gender) 
            VALUES ('$name', '$email', '$password', '$phone', '$gender')";

    if (mysqli_query($con, $sql)) {
        echo "Data is Inserted";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    mysqli_close($con);
}
?>