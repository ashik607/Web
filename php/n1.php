

<?php
$server="localhost";
$username="root";
$password="";
$db="pan";
$conn=mysqli_connect($server,$username,$password,$db);

if(isset($_POST['submit']))
                {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];

                    //$password = password_hash($pass,PASSWORD_BCRYPT);
                   // $pass1 = password_hash($pass1,PASSWORD_BCRYPT);


            $insertquery = "INSERT INTO gan (name, email, Password, phone, Gender) 
            VALUES ('$name', '$email', '$password', '$phone', '$gender')";
               $res = mysqli_query($conn,$insertquery);

    if ($res) 
    {
        ?>
        <script>
            alert("Data inserted Successfully");
        </script>
        <?php
    } else
    {
        ?>
        <script>
            alert("Data is not inserted Successfully");
        </script>
        <?php
    }
                       
}

?> 

