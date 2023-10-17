
// Wrap your code in a DOMContentLoaded event handler to ensure it runs after the DOM is fully loaded.
document.addEventListener("DOMContentLoaded", function () {
    // Get references to the login and signup forms and the toggle button by their IDs.
    var loginForm = document.getElementById("loginForm");
    var signupForm = document.getElementById("signupForm");
    var toggleButton = document.getElementById("toggleButton");

    // Add a click event listener to the toggle button.
    toggleButton.addEventListener("click", function () {
        // Check if the login form is currently displayed.
        if (loginForm.style.display === "block") {
            // If the login form is displayed, hide it and show the signup form.
            loginForm.style.display = "none";
            signupForm.style.display = "block";
            toggleButton.innerText = "Back to Login"; // Update the button text.
        } else {
            // If the signup form is displayed, hide it and show the login form.
            loginForm.style.display = "block";
            signupForm.style.display = "none";
            toggleButton.innerText = "Sign Up"; // Update the button text.
        }
    });
});


function displayWelcomeMessage() {
    var welcomeMessage = document.getElementById("welcome-message");
    welcomeMessage.style.display = "block";
}


document.querySelector(".nav-link").addEventListener("mouseout", function() {
    var welcomeMessage = document.getElementById("welcome-message");
    welcomeMessage.style.display = "none";
});
