<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Hash the password for security
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

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

        // Prepare and execute the SQL query to insert the user data
        $sql = "INSERT INTO signup (username, password) VALUES (:username, :password)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->execute();

        // Redirect the user to a success page or do something else after successful signup
        header("Location: success.php");
        exit;
    } catch (PDOException $e) {
        // Handle database connection or insertion errors here
        echo "Error: " . $e->getMessage();
    }
}
?>
