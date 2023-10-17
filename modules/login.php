<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Include your database connection information
    $host = "localhost";
    $dbname = "lms";
    $db_username = "root";
    $db_password = "";

    try {
        // Create a new PDO instance
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $db_username, $db_password);

        // Set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Perform a SQL query to check if the username and password match
        $sql = "SELECT username, password FROM users WHERE username = :username";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        // Fetch the user's data
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            // Password matches; redirect to the dashboard
            header("Location: dashboard.php");
            exit;
        } else {
            $loginError = "Invalid username or password";
        }
    } catch (PDOException $e) {
        // Handle database connection errors here
        echo "Connection failed: " . $e->getMessage();
    }
}
?>
