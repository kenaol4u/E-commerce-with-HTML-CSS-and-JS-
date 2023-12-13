<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
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
                <li><a href="contact.php">Contact</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="cart.php"><img src="Images/Icons/icons8-shopping-bag-50.png" alt="cart"></a></li>
                <button><a href="login.php">Login</a></button>
            </ul>
        </div>
    </header>
    <main class="main_sec_blog">

        <header>
            <h1>#readmore</h1>
          </header>
         
          <div class="container">
            <div class="main">
              <div class="blog-post">
                <h2>Blog Post Title 1</h2>
                <img src="Images/random/vuiton1.jpg" alt="Random image">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in nulla consectetur, dictum odio at, aliquet lacus.</p>
                <p class="date">Posted on June 1, 2023</p>
              </div>
         
              <div class="blog-post">
                <h2>Blog Post Title 2</h2>
                <img src="Images/random/watch3.jpg" alt="Random image">
                <p>Sed in ipsum congue, feugiat enim sit amet, lacinia arcu. Fusce iaculis mi in pharetra consectetur.</p>
                <p class="date">Posted on May 28, 2023</p>
              </div>
         
              <div class="blog-post">
                <h2>Blog Post Title 3</h2>
                <img src="Images/random/pexels-pixabay-50987.jpg" alt="Random image">
                <p>Etiam quis neque vulputate, hendrerit tortor eu, tempor nunc. Proin eleifend sapien nec metus feugiat, in efficitur nunc auctor.</p>
                <p class="date">Posted on May 25, 2023</p>
              </div>
            </div>
         
            <div class="aside">
              <div class="topic">
                <h3>Topics</h3>
                <ul>
                  <li><a href="#">E-commerce Trends</a></li>
                  <li><a href="#">Online Marketing</a></li>
                  <li><a href="#">Customer Experience</a></li>
                  <li><a href="#">Shopify Tips</a></li>
                  <li><a href="#">Product Reviews</a></li>
                </ul>
              </div>
         
              <div class="recent-post">
                <h3>Recent Posts</h3>
                <ul>
                  <li><a href="#">How to Boost Your Sales with Email Marketing</a></li>
                  <li><a href="#">The Best E-commerce Platforms for Your Business</a></li>
                  <li><a href="#">How to Optimize Your Product Pages for SEO</a></li>
                  <li><a href="#">How to Create a Loyalty Program for Your Customers</a></li>
                  <li><a href="#">How to Use Social Media to Promote Your Products</a></li>
                </ul>
              </div>
         
            </div>
         
          </div>
         
          <!-- Interesting feature -->
          <!-- A button that scrolls to the top of the page -->
          <!-- Add an id attribute to the button -->
          <!-- Add some JavaScript code to make the button work -->
          <!-- The code is inside a script tag at the end of the body tag -->
          <!-- The code uses the window object and its properties and methods -->
          <!-- The code also uses the document object and its properties and methods -->
          <!-- The code also uses the getElementById method and the onclick event -->
          <!-- The code also uses some if statements and a function declaration -->
         
          <!-- The button element -->
         <button id="scroll-top-button" class="hide-button">⬆️</button>
         <section id="page_in_shop" class="section_shop">
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#"><img src="Images/Icons/icons8-right-arrow-30.png" alt=""></a>
        </section>
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
    <script src="app.js"></script>
</body>
</html>