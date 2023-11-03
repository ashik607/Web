  
<?php
  include 'ani.php';
  
  ?>
<!DOCTYPE html>
<html>

<head>
    <title>Sign up and sign in form</title>
    <link rel="stylesheet" href="ani.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="wrapper">
        <div class="container">
            <div class="sign-up-container">
                <form action="ani.php" method="POST">
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
                    <input type="name"name="name" placeholder="Name">
                    <input type="email" name="email" placeholder="Email">
                    <input type="phone" name="phone" placeholder="Phone Number">
                    

                    
                    <input type="password" name="password" placeholder="Password">
                    <input type="gender"name="gender" placeholder="Gender">
                    

                    <button type="submit" class="form_btn">Sign Up</button>
                </form>
            </div>
            <div class="sign-in-container">
                <form>
                    <h1>Sign In</h1>
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
                    <span>or use your account</span>
                    <input type="email" name="name"placeholder="Email">
                    <input type="password"name="password" placeholder="Password">
                    <button type="submit" class="form_btn">Sign In</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay-left">
                    <h1>Welcome Back</h1>
                    <p>To keep connected with us please login with your personal information</p>
                    <button id="signIn" class="overlay_btn">Sign In</button>
                </div>
                <div class="overlay-right">
                    <h1>Hello, Friend</h1>
                    <p>Enter your personal information and start connecting with us</p>
                    <button id="signUp" class="overlay_btn">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const signUpBtn = document.getElementById("signUp");
        const signInBtn = document.getElementById("signIn");
        const container = document.querySelector(".container");
        const maleButton = document.getElementById("maleButton");
const femaleButton = document.getElementById("femaleButton");

        signUpBtn.addEventListener("click", () => {
            container.classList.add("right-panel-active");
        });

        signInBtn.addEventListener("click", () => {
            container.classList.remove("right-panel-active");

        });
        
    </script>

</body>

</html>