<?php
// Include database connection and necessary functions
require_once('config.php');
require_once('functions.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['faculty_id'])) {
    $faculty_id = $_POST['faculty_id'];
    $name = $_POST['name'];
    $department = $_POST['department'];
    $position = $_POST['position'];
    
    // Update faculty data in the database
    $result = updateFaculty($faculty_id, $name, $department, $position);
    
    if ($result === true) {
        echo "Faculty information updated successfully!";
    } else {
        echo "Error: " . $result;
    }
}
?>
