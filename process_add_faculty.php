<?php
// Include database connection
require_once('config.php');

function addFaculty($name, $department, $position, $qualifications, $courses_taught, $research_interests, $publications, $experience, $contact_email, $contact_phone, $address, $profile_picture) {
    global $conn; // Access the database connection

    // Validate input data (you can add more validation)
    if (empty($name) || empty($department) || empty($position) || empty($contact_email)) {
        return "All required fields must be filled.";
    }

    // Sanitize input data (prevent SQL injection)
    $name = mysqli_real_escape_string($conn, $name);
    $department = mysqli_real_escape_string($conn, $department);
    $position = mysqli_real_escape_string($conn, $position);
    $qualifications = isset($_POST['qualifications']) ? mysqli_real_escape_string($conn, $_POST['qualifications']) : '';
    $courses_taught = isset($_POST['courses_taught']) ? mysqli_real_escape_string($conn, $_POST['courses_taught']) : '';
    $research_interests = isset($_POST['research_interests']) ? mysqli_real_escape_string($conn, $_POST['research_interests']) : '';
    $publications = isset($_POST['publications']) ? mysqli_real_escape_string($conn, $_POST['publications']) : '';
    $experience = isset($_POST['experience']) ? mysqli_real_escape_string($conn, $_POST['experience']) : '';
    $contact_email = mysqli_real_escape_string($conn, $contact_email);
    $contact_phone = isset($_POST['contact_phone']) ? mysqli_real_escape_string($conn, $_POST['contact_phone']) : '';
    $address = isset($_POST['address']) ? mysqli_real_escape_string($conn, $_POST['address']) : '';
    $profile_picture = isset($_POST['profile_picture']) ? mysqli_real_escape_string($conn, $_POST['profile_picture']) : '';

    // SQL query to insert data
    $sql = "INSERT INTO faculty (name, department, position, qualifications, courses_taught, research_interests, publications, experience, contact_email, contact_phone, address, profile_picture)
            VALUES ('$name', '$department', '$position', '$qualifications', '$courses_taught', '$research_interests', '$publications', '$experience', '$contact_email', '$contact_phone', '$address', '$profile_picture')";

    if (mysqli_query($conn, $sql)) {
        return "Faculty member added successfully!";
    } else {
        return "Error: " . mysqli_error($conn);
    }
}

// Example usage of the function:
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $result = addFaculty(
        $_POST['name'],
        $_POST['department'],
        $_POST['position'],
        $_POST['qualifications'],
        $_POST['courses_taught'],
        $_POST['research_interests'],
        $_POST['publications'],
        $_POST['experience'],
        $_POST['contact_email'],
        $_POST['contact_phone'],
        $_POST['address'],
        $_POST['profile_picture']
    );

    echo $result;
}
?>
