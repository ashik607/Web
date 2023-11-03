<?php
// Database connection parameters
$servername = "localhost";
$username = "root";

$password = "";
$dbname = "Dj";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($con, $_POST["name"]);
    $email = mysqli_real_escape_string($con, $_POST["email"]);
    $phone = mysqli_real_escape_string($con, $_POST["phone"]);
    $password = mysqli_real_escape_string($con, $_POST["password"]);
    $gender = mysqli_real_escape_string($con, $_POST["gender"]);

    // Hash the password (for security)
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert data into the database using prepared statement to prevent SQL injection
    $sql = "INSERT INTO djj (name, email, phone, password, gender) VALUES ('$name', '$email', '$phone', '$hashed_password', '$gender')";

    if (mysqli_query($con, $sql)) 
    {
        ?>
        <script>
            alert("Data inserted Successfully");
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Data is not inserted Successfully");
        </script>
        <?php
    }
}

// Close the connection
mysqli_close($con);
?>
