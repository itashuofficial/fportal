<?php
// Include database connection
include 'config.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query to check if the user exists in the database
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        // User found, set session variables
        $row = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['fullname'] = $row['fullname']; // Set the 'fullname' session variable
        header('Location: dashboard.php');
    } else {
        // User not found, display an error message
        echo "Invalid username or password.";
    }
} else {
    // Handle case where username and/or password were not provided in the form
    echo "Please enter both username and password.";
}
?>
