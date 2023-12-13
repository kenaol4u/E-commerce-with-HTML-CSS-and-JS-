<?php
include("connection.php");

// Retrieve user input
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming your form fields have the following names: signup_username, signup_password, signup_email, signup_full_name, signup_address, signup_phone_number
    $username = $_POST['signup_username'] ?? '';
    $password = $_POST['signup_password'] ?? '';
    $email = $_POST['signup_email'] ?? '';
    $full_name = $_POST['signup_full_name'] ?? '';
    $address = $_POST['signup_address'] ?? '';
    $phone_number = $_POST['signup_phone_number'] ?? '';

    // Check if the email already exists in the table
    $stmt = $conn->prepare("SELECT COUNT(*) FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();
    
    if ($count > 0) {
        echo "Email already exists. Please choose a different email.";
    } else if (empty($username)) {
        echo "Username cannot be empty.";
    } else if (empty($password)) {
        echo "Password cannot be empty.";
    } else if (strlen($password) < 8) {
        echo "Password must be at least 8 characters long.";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
    } else {
        // Close the previous statement
        $stmt->close();

        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert user into the table
        $stmt = $conn->prepare("INSERT INTO users (username, password, email, full_name, address, phone_number)
                                VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $username, $hashed_password, $email, $full_name, $address, $phone_number);
        $stmt->execute();

        header("Location: index.php");
        exit(); // Added exit() after header to stop further script execution
    }
    
    $stmt->close();
}

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
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blogs.php">Blogs</a></li>
                <li><a href="cart.php">Shopping Cart</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="about.php">About Us</a></li>
            </ul>
        </div>
    </header>
    <main class="login_main_section">

        <!-- Sign up form -->
        <div id="sign_up_block" class="signup-container">
            <form action="#" method="POST">
                <h2>Sign Up</h2>
                <div class="form-group">
                    <label for="signup_username">Username:</label>
                    <input type="text" id="signup_username" name="signup_username" placeholder="Enter your username" required>
                </div>
                <div class="form-group">
                    <label for="signup_phone_number">Phone Number:</label>
                    <input type="text" id="signup_phone_number" name="signup_phone_number" placeholder="Enter your phone number" required>
                </div>
                <div class="form-group">
                    <label for="signup_full_name">Full Name:</label>
                    <input type="text" id="signup_full_name" name="signup_full_name" placeholder="Enter your full name" required>
                </div>
                <div class="form-group">
                    <label for="signup_email">Email:</label>
                    <input type="email" id="signup_email" name="signup_email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="signup_address">Address:</label>
                    <input type="text" id="signup_address" name="signup_address" placeholder="Enter your address" required>
                </div>
                <div class="form-group">
                    <label for="signup_password">Create Password:</label>
                    <input type="password" id="signup_password" name="signup_password" placeholder="Enter your password" required>
                </div>
                <div class="form-group">
                    <label for="signup_confirm_password">Confirm Password:</label>
                    <input type="password" id="signup_confirm_password" name="signup_confirm_password" placeholder="Re-enter your password" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="button">Sign Up</button>
                </div>
                <div class="login_signup">
                    Already have an account? <a href="login.php" id="login">Login</a>
                </div>
            </form>
        </div>
    </main>

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
                    <i><img src="Images/Icons/linkedin-30.png" alt="LinkedIn Icon"> </i>
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
            <p>&copy; 2015 EC, Gabaa Horroo - E-Commerce Website Application. All rights reserved.</p>
        </div>
    </footer>
    <script src="app.js"></script>
</body>
</html>
