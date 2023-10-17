<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Add Bootstrap CSS link -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/dash.css">
</head>
<body>
    <div class="container">
        <?php
        session_start(); // Start a PHP session
        if (!isset($_SESSION["user_id"])) {
            // Redirect to the login page if not logged in
            header("Location: login.php");
            exit();
        }
        ?>

        <!-- User Details -->
        <div class="user-details text-center">
            <img src="/assets/img/logo.png" alt="User Photo" class="user-photo">
            <h1>John Doe</h1>
            <p>Position: Teacher</p>
            <p>Registration Number: ABC123</p>
        </div>

        <!-- Module Cards -->
        <h2 class="text-center">Modules</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card module-card">
                    <a href="/modules/student_info.php" class="card-body">Student Information</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card module-card">
                    <a href="/modules/staff_info.php" class="card-body">Staff Information</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card module-card">
                    <a href="/modules/attendance.php" class="card-body">Attendance Tracking</a>
                </div>
            </div>
            <!-- Add more module cards as needed -->
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card module-card">
                    <a href="/modules/examination.php" class="card-body">Student Examination</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card module-card">
                    <a href="/modules/timetable.php" class="card-body">Student Time Table</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card module-card">
                    <a href="/modules/report_card.php" class="card-body">Student Report Card</a>
                </div>
            </div>
            <!-- Add more module cards as needed -->
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card module-card">
                    <a href="/modules/fee.php" class="card-body">Student Fee Info</a>
                </div>
            </div>
            <!-- Add more module cards as needed -->
        </div>

        <!-- Logout Button -->
        <div class="text-center mt-3">
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
    </div>

    <!-- Add Bootstrap JS and jQuery links -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
