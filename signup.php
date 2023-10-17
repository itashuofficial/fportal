<?php
include 'config.php';
include 'functions.php';

$success_message = $error_message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['fullname']) && isset($_POST['mob']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password'])) {
        $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
        $mob = mysqli_real_escape_string($conn, $_POST['mob']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = $_POST['password']; // No password hashing

        $check_query = "SELECT * FROM users WHERE username = '$username'";
        $check_result = mysqli_query($conn, $check_query);

        if (mysqli_num_rows($check_result) > 0) {
            $error_message = "Username already exists. Please choose a different username.";
        } else {
            $query = "INSERT INTO users (fullname, mob, email, username, password) VALUES ('$fullname', '$mob','$email','$username', '$password')";

            if (mysqli_query($conn, $query)) {
                // Registration successful, display a Bootstrap-styled message
                $success_message = '
                    <div class="alert alert-success">
                        Thanks for registering ! Now You are part of Lovely Professional University.
                    </div>';
            } else {
                $error_message = "Error: " . mysqli_error($conn);
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Faculty Information Portal</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css ">
    <link rel="stylesheet" src="assets/css/signup.css">
    
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg  py-4" style="background-color: #FF8400;">
            <div class="container">
            <div class="col-md-6 text-center d-flex ">
                    <img src="assets/img/logo.png" alt="Faculty Information Portal Image" class="img-fluid rounded d-block bg-white rounded-pill " style="max-width: 100px; transition: transform 0.2s;">
                  
                    <div class="float-left mt-4 px-3">
                     <a class="navbar-brand text-light " style="font-size: 30px;" href="#"><strong>Faculty Information Portal</strong></a>
                    </div>
                
                </div>
                
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse bg-primary rounded-pill px-3 " id="navbarNav">
                    <ul class="navbar-nav px-4">
                        <li class="nav-item p-3">
                            <a class="nav-link btn btn-light text-light" href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a>
                        </li>
                       
                        <li class="nav-item p-3">
                            <a class="nav-link btn btn-light text-light" target="blank" href="https://vr.lpu.in/?_gl=1*xfqw81*_gcl_au*ODUwMjcyMjU3LjE2OTAwODY0MzY."><i class="fa-solid fa-building-columns"></i></i> About Uiversity</a>
                        </li>
                        <li class="nav-item p-3">
                            <a class="nav-link btn btn-light text-light" href="index.php"> <i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        
                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container bg-warning p-3 mt-5 rounded">
        <div class="card ">
            <div class="card-header">
                <h2>Welcome to Registration</h2>
            </div>
            <div class="card-body">
                <form action="signup.php" method="POST">
                    <div class="form-group">
                        <label for="fullname">Full Name</label>
                        <input type="text" id="fullname" name="fullname" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="mob">Mobile No.</label>
                        <input type="text" id="mob" name="mob" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div><br>
                    <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                </form>
                <hr>
                <?php echo $success_message;?>
                <?php echo $error_message; ?>
            </div>
    </div>
        </div>
    </div>
    <footer class=" text-light text-center py-4 mt-3 " style="background-color: #FF8400;">
        <div class="container">
            <p>&copy; 2023 Faculty Information Portal | Developed by Sar-Tech</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
