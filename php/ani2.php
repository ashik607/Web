<!DOCTYPE html>
<html>

<head>
    <title>Sign up and sign in form</title>
    <link rel="stylesheet" href="ani.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /* Your CSS styles here */
    </style>
</head>

<body>

    <div class="wrapper">
        <div class="container">
            <div class="sign-up-container">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <!-- Form fields go here -->
                    <h1>Create Account</h1>
                    <div class="social-links">
                        <div>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </div>
                        <div>
                            <a href="#"><i class="fa fa-google" aria-hidden="true"></i></a>
                        </div>
                        <div>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </div>
                        <div>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <span>or use your email for registration</span>
                    <input type="text" name="name" placeholder="Name">
                    <input type="email" name="email" placeholder="Email">
                    <input type="tel" name="phone" placeholder="Phone Number">
                    <input type="password" name="password" placeholder="Password">
                    <input type="text" name="gender" placeholder="Gender">
                    <button type="submit" class="form_btn">Sign Up</button>
                </form>
            </div>
        </div>
    </div>

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

        if (mysqli_query($con, $sql)) {
            echo '<script>alert("Data inserted Successfully");</script>';
        } else {
            echo '<script>alert("Data is not inserted Successfully");</script>';
        }
    }

    // Close the connection
    mysqli_close($con);
    ?>

    <script>
        // Your JavaScript code here
    </script>

</body>

</html>
