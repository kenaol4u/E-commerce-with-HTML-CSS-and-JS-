<?php
include("connection.php");
// Retrieve user input
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$full_name = $_POST['full_name'];
$address = $_POST['address'];
$phone_number = $_POST['phone_number'];


// Check if the email already exists in the table
$stmt = $conn->prepare("SELECT COUNT(*) FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();

if ($count > 0) {
    echo "Email already exists. Please choose a different email.";
} 
else {
    // Insert user into the table
    $stmt = $conn->prepare("INSERT INTO users (username, password, email, full_name, address, phone_number)
                            VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $username, $password, $email, $full_name, $address, $phone_number);
    $stmt->execute();
    
    header("Location:index.php");
    
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header id="header">
        <a href="#" id="logo"><img src="Images/logo2.png" alt="gabaa Horroo"></a>
        <div>
            <ul id="navbar">
                <li><a href="index.html" class="active">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="blogs.html">Blogs</a></li>
                <li><a href="cart.html">Shopping Cart</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="about.html">About Us</a></li>
            </ul>
        </div>
    </header>
    <main class="login_main_section">
    <!-- Login Form-->
    <div class="login-container">
        <form action="#">
            <h2>Login</h2>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>

            <div class="option_field">
                <span class="checkbox">
                    <input type="checkbox" id="check"/>
                    <label for="check">Remember me</label>
                </span>
                <a href="#" class="forgot_pw">Forgot password?</a>
            </div>
            <div class="form-group">
               <button class="button">Login Now</button>
            </div>
            <div class="login_signup">
                Don't have an account?<a href="#" id="signup">Sign up</a>
            </div>
        </form>
    </div>
    <!--Sign up form-->
    <div id="sign_up_block" class="signup-container">
<form action="#" method="POST">
  <h2>Sign Up</h2>
  <div class="form-group">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" placeholder="Enter your username" required>
  </div>
  <div class="form-group">
    <label for="phone_number">Phone Number:</label>
    <input type="text" id="phone_number" name="phone_number" placeholder="Enter your phone number" required>
  </div>
  <div class="form-group">
    <label for="full_name">Full Name:</label>
    <input type="text" id="full_name" name="full_name" placeholder="Enter your full name" required>
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Enter your email" required>
  </div>
  <div class="form-group">
    <label for="address">Address:</label>
    <input type="text" id="address" name="address" placeholder="Enter your address" required>
  </div>
  <div class="form-group">
    <label for="password">Create Password:</label>
    <input type="password" id="password" name="password" placeholder="Enter your password" required>
  </div>
  <div class="form-group">
    <label for="confirm_password">Confirm Password:</label>
    <input type="password" id="confirm_password" name="confirm_password" placeholder="Re-enter your password" required>
  </div>
  <div class="form-group">
    <button type="submit" class="button">Sign Up</button>
  </div>
  <div class="login_signup">
    Already have an account? <a href="#" id="login">Login</a>
  </div>
</form>

    </div>
    </main>

    <fieldset> 

        
    </fieldset>

    <footer id="footer">
        <div class="footer_col">
            <img class="logo" src="Images/logo2.png" alt="gabaa Horroo">
            <h2>Contact</h2>
            <h4><strong>Address:</strong> 223 Block Main Campus, Wachemo University, Hossena City </h4>
            <h4><strong>Phone Number:</strong> +251 948 334 822</h4>
            <div class="follow">
                <h3>Follow us</h3>
                <div class="follow_icon">
                    <i><img src="Images/Icons/facebook-30.png" alt="Facebook Icon"> </i>
                    <i><img src="Images/Icons/icons8-twitter-30.png" alt="Twitter Icon"> </i>
                    <i><img src="Images/Icons/icons8-instagram-30.png" alt="Instagram Icon"> </i>
                    <i><img src="Images/Icons/linkedin-30.png" alt="Linkdin Icon"> </i>
                    <i><img src="Images/Icons/telegram-30.png" alt="Telegram Icon"> </i>

                </div>
            </div>
        </div>
        <div class="footer_col">
            <h2>About</h2>
            <a href="#">About us</a>
            <a href="#">Delivery Options</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>   
        </div>
        <div class="footer_col">
            <h2>My Account</h2>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">Favorite Items</a>
            <a href="#">My Order</a>
            <a href="#">Help Me</a>   
        </div>
        <div id="install" class="footer_col">
            <h2>Install Apps</h2>
            <h4>App Store or Google Play</h4>
            <div class="apps_row">
                <img src="Images/payment/app.jpg" alt="App Store">
                <img src="Images/payment/play.jpg" alt="Google Play">
            </div>
        </div>
        <div class="copyright">
            <p>&copy; 2015 EC, Gabaa Horroo - E-Commerce Website Application.All rights reserved.</p>
        </div>
    </footer>
    <script src="app.js"></script>
</body>
</html>

