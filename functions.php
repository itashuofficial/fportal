<?php

require_once('config.php');


function connectDB() {
    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "fp"; 

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $conn;
}


function getFacultyList() {
    $conn = connectDB();

    $sql = "SELECT * FROM faculty";

    $result = mysqli_query($conn, $sql);

    $facultyList = array();

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $facultyList[] = $row;
        }
    }

    mysqli_close($conn); 

    return $facultyList;
}




function hashPassword($password) {
    return password_hash($password, PASSWORD_BCRYPT);
}

// Function to verify a password against a hashed password
function verifyPassword($password, $hashedPassword) {
    return password_verify($password, $hashedPassword);
}

function getFacultyById($faculty_id) {
    global $conn;
    
    $faculty_id = mysqli_real_escape_string($conn, $faculty_id);
    
    $sql = "SELECT * FROM faculty WHERE id = '$faculty_id'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        return mysqli_fetch_assoc($result);
    } else {
        return null; // Faculty not found
    }
}

function updateFaculty($faculty_id, $name, $department, $position) {
    global $conn;
    
    $faculty_id = mysqli_real_escape_string($conn, $faculty_id);
    $name = mysqli_real_escape_string($conn, $name);
    $department = mysqli_real_escape_string($conn, $department);
    $position = mysqli_real_escape_string($conn, $position);
    
    $sql = "UPDATE faculty SET name = '$name', department = '$department', position = '$position' WHERE id = '$faculty_id'";
    
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return "Error: " . mysqli_error($conn);
    }
}

// Function to check if a user is logged in
function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

// Function to redirect to a specified page
function redirectTo($page) {
    header("Location: $page");
    exit;
}
function getFacultyByMobile($mobile) {
    global $conn;
    
    $sql = "SELECT * FROM faculty WHERE contact_phone = '$mobile'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        return mysqli_fetch_assoc($result);
    } else {
        return null; 
    }
}

// Function to display success message
function showSuccessMessage($message) {
    echo '<div class="alert alert-success">' . $message . '</div>';
}

// Function to display error message
function showErrorMessage($message) {
    echo '<div class="alert alert-danger">' . $message . '</div>';
}



// Include database connection
require_once('config.php');

// Define the performFacultySearch function
function performFacultySearch($searchQuery) {
    global $conn;

    // Sanitize the search query to prevent SQL injection
    $searchQuery = mysqli_real_escape_string($conn, $searchQuery);

    // Perform the faculty search query
    $sql = "SELECT * FROM faculty WHERE name LIKE '%$searchQuery%' OR department LIKE '%$searchQuery%' OR position LIKE '%$searchQuery%'";
    $result = mysqli_query($conn, $sql);

    // Check if there are results
    if ($result && mysqli_num_rows($result) > 0) {
        $searchResults = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $searchResults[] = $row;
        }
        return $searchResults;
    } else {
        return [];
    }
}

?>
