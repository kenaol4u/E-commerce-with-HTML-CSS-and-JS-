<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
    <script src="app.js"></script>
</head>
<body>
    <header id="header">
        <a href="#" id="logo"><img src="Images/logo2.png" alt="gabaa Horroo"></a>
        <div>
            <ul id="navbar">
            <li><a href="index.php" class="active">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blogs.php">Blogs</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="cart.php"><img src="Images/Icons/icons8-shopping-bag-50.png" alt="cart"></a></li>
                <button><a href="login.php">Login</a></button>
            </ul>
        </div>
    </header>
    <main class="main_sec_contact">
        <header class="for_contact">
            <h1>#Contact Us</h1>
          </header>
          
        <div class="container">
           <form>
              <label for="name">Name:</label>
              <input type="text" id="name" name="name" required>
              
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" required>
              
              <label for="message">Message:</label>
              <textarea id="message" name="message" required></textarea>
              
              <button type="submit">Send Message</button>
           </form>

        </div>
        <div class="text_feedback">
            <p>Thank you for your feedback we will contact you back as soon.</p>
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
</body>
</html>