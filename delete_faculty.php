<?php
// Include database connection
require_once('config.php');

if (isset($_POST['delete'])) {
    $facultyId = $_POST['faculty_id'];

    // Execute SQL query to delete the faculty member
    $sql = "DELETE FROM faculty WHERE id = $facultyId";

    if (mysqli_query($conn, $sql)) {
        // Faculty member deleted successfully
        header("Location: dashboard.php"); // Redirect to the dashboard page after deletion
        exit();
    } else {
        // Error occurred while deleting faculty member
        echo "Error: " . mysqli_error($conn);
    }
}
?>
