<?php
// Include database connection and necessary functions
require_once('config.php');
require_once('functions.php');

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['faculty_id'])) {
    $faculty_id = $_GET['faculty_id'];
    
    // Fetch faculty data by faculty ID
    $faculty = getFacultyById($faculty_id);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Update Faculty Information</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Update Faculty Information</h1>
        
        <!-- Faculty Update Form -->
        <form method="POST" action="process_update_faculty.php">
            <?php if (isset($faculty)): ?>
                <input type="hidden" name="faculty_id" value="<?php echo $faculty['id']; ?>">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" value="<?php echo $faculty['name']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="department">Department:</label>
                    <input type="text" name="department" id="department" class="form-control" value="<?php echo $faculty['department']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="position">Position:</label>
                    <input type="text" name="position" id="position" class="form-control" value="<?php echo $faculty['position']; ?>" required>
                </div>
                <!-- Add more fields for faculty information -->
                <button type="submit" class="btn btn-primary">Update</button>
            <?php else: ?>
                <p>Faculty not found.</p>
            <?php endif; ?>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
