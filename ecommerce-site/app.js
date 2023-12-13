/* For Home page


*/

/*for shop page 


/* for blog page 

  // Get the button element by its id
var button = document.getElementById("scroll-top-button");

  // When the user scrolls down 100px from the top of the document, show the button
window.onscroll = function() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
      // Add the show-button class to the button element
      button.className = "show-button";
    } else {
      // Add the hide-button class to the button element
      button.className = "hide-button";
    }
};

  // When the user clicks on the button, scroll to the top of the document
button.onclick = function() {
    // Use the scrollTo method of the window object
   // Pass two arguments: x-coordinate and y-coordinate
   // Set both to zero to scroll to the top left corner of the document
window.scrollTo(0, 0);
};
*/

/* for contact page 

*/

  /* for login and sign up page */
// Get the login and signup container elements
const loginContainer = document.querySelector('.login-container');
const signupContainer = document.querySelector('.signup-container');

// Get the login and signup links
const loginLink = document.getElementById('login');
const signupLink = document.getElementById('signup');

// Display the login form and hide the signup form by default
loginContainer.style.display = 'block';
signupContainer.style.display = 'none';

// Add event listener to the login link
loginLink.addEventListener('click', function (event) {
  event.preventDefault();
  loginContainer.style.display = 'block';
  signupContainer.style.display = 'none';
});

// Add event listener to the signup link
signupLink.addEventListener('click', function (event) {
  event.preventDefault();
  loginContainer.style.display = 'none';
  signupContainer.style.display = 'block';
});
