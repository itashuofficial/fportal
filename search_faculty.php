<?php
// Include database connection and necessary functions
require_once('config.php');
require_once('functions.php');

// Initialize the searchResults variable
$searchResults = [];

// Perform a faculty search based on user input (you'll need to implement the search logic)
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['search_query'])) {
    $searchResults = performFacultySearch($_GET['search_query']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <!-- Include Bootstrap CSS and custom styles -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
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
                            <a class="nav-link btn btn-light text-light" href="index.php"> <i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                
                        <li class="nav-item p-3">
                            
                            <a class="nav-link btn btn-light text-light" href="dashboard.php"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
                        </li>
                        <li class="nav-item p-3">
                            <a class="nav-link btn btn-light text-light" href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a>
                        </li>
                       
                        <li class="nav-item p-3">
                            <a class="nav-link btn btn-light text-light" target="blank" href="https://vr.lpu.in/?_gl=1*xfqw81*_gcl_au*ODUwMjcyMjU3LjE2OTAwODY0MzY."><i class="fa-solid fa-building-columns"></i></i> About Uiversity</a>
                        </li>
                        
                        
                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container">
        <h1>Search Results</h1>


        <div>        
        <!-- Search Form (You can also include it here if you want to allow users to refine their search) -->
        <form method="GET" action="search_faculty.php" class="mb-4">
            <div class="input-group">
                <input type="text" name="search_query" class="form-control" placeholder="Search for faculty">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
        </form>

        <div class="container mt-4 bg-primary p-3 rounded">
            <h2>Search Faculty by Mobile Number</h2>
            <form method="GET" action="faculty_search_by_mobile.php">
                <div class="form-group">
                    <label for="mobile">Mobile Number:</label>
                    <input type="text" name="mobile" id="mobile" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-danger mt-2">Search</button>
            </form>
        </div>

        </div>
        
        <!-- Display Search Results -->
        <div class="faculty-list">
            <?php if (!empty($searchResults)): ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Department</th>
                            <th>Position</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($searchResults as $faculty): ?>
                            <tr>
                                <td><?php echo $faculty['name']; ?></td>
                                <td><?php echo $faculty['department']; ?></td>
                                <td><?php echo $faculty['position']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p>No results found.</p>
            <?php endif; ?>
        </div>
    </div>

    <footer class=" text-light text-center py-4" style="background-color: #FF8400; ">
        <div class="container">
            <p>&copy; 2023 Faculty Information Portal | Developed by Sar-Tech</p>
        </div>
    </footer>
</body>
</html>
