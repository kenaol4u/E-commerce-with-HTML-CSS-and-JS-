<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
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
    <main class="main_sec_cart">
      <h1>Your Cart</h1>
      <div class="cart_table">

        <table width="100%">
          <thead>
            <tr>
              <td>Remove</td>
              <td>Image</td>
              <td>Product</td>
              <td>Price</td>
              <td>Quantity</td>
              <td>Subtotal</td>
            </tr>
          </thead>
  
          <tbody>
            <tr>
              <td><button>Remove</button></td>
              <td><img src="Images/fproducts/f2.jpg" alt=""></td>
              <td>kenaol bekele's Favorite T-Shirt</td>
              <td>$100</td>
              <td><input type="number" value="1"></td>
              <td>$100</td>
            </tr>
            <tr>
              <td><button>Remove</button></td>
              <td><img src="Images/fproducts/f2.jpg" alt=""></td>
              <td>kenaol bekele's Favorite T-Shirt</td>
              <td>$100</td>
              <td><input type="number" value="1"></td>
              <td>$100</td>
            </tr>
            <tr>
              <td><button>Remove</button></td>
              <td><img src="Images/fproducts/f2.jpg" alt=""></td>
              <td>kenaol bekele's Favorite T-Shirt</td>
              <td>$100</td>
              <td><input type="number" value="1"></td>
              <td>$100</td>
            </tr>
          </tbody>
        </table>
      </div>    
    </section>
    <section id="cart_last">
      <div id="coupon">
        <h2>Apply Coupon</h2>
        <div>
          <input type="text" placeholder="Enter your Coupon">
          <button>Apply</button>
        </div>
      </div>
      <div id="order-summary">
        <h2>Order Summary</h2>
        <table>
          <tr>
            <td>Cart Subtotal</td>
            <td>$200</td>
          </tr>
          <tr>
            <td>Shipping</td>
            <td>$5</td>
          </tr>
          <tr>
            <td><strong>Total</strong></td>
            <td>$205</td>
          </tr>
        </table>
        <p>Total Items: 3</p>
        <p>Subtotal: $35</p>
        <p>Shipping: $5</p>
        <p><strong>Total: $40</strong></p>
        <a href="#" id="checkout-button">Proceed to Checkout</a>
      </div>
    </div>
    </section>
    <section  class="main_sec_cart">

    </section>
  <!--
       <div id="cart-content">
          <div id="cart-items">
            <div class="cart-item">
              <img src="path/to/product1.jpg" alt="Product 1">
              <div class="item-info">
                <h4>Product 1</h4>
                <p>Price: $10</p>
                <p>Quantity: 2</p>
              </div>
            </div>
            <div class="cart-item">
              <img src="path/to/product2.jpg" alt="Product 2">
              <div class="item-info">
                <h4>Product 2</h4>
                <p>Price: $15</p>
                <p>Quantity: 1</p>
              </div>
            </div>

          </div>
  -->
 
        <script>
          // JavaScript code (if any)
        </script>
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