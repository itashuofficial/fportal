<?php

require_once('config.php');
require_once('functions.php');

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['mobile'])) {
    $mobile = $_GET['mobile'];
    
    // Fetch faculty data by mobile number
    $faculty = getFacultyByMobile($mobile);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Search Results</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css ">
  

    <style>
    .table {
        width: 100%;
        max-width: 800px;
        margin: 0 auto;
    }

    .table th {
        background-color: #007bff;
        color: #fff;
    }

    .table tr:nth-child(odd) {
        background-color: #f2f2f2;
    }

    .table tr:hover {
        background-color: #cce5ff;
    }
    h1{
        text-align: center;
        background-color: #FF8400;
        color: white !important;
        border-radius: 50px !important;
        padding: 5px !important;
        width: 50%;
        margin-left: 300px;
        margin-bottom: 20px;
    }
</style>

</head>
<body>




<header>
        <nav class="navbar navbar-expand-lg  py-4" style="background-color: #FF8400; ">
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
                    <ul class="navbar-nav px-4 py-2 ">
                        <li class="nav-item">
                            <a class="nav-link btn btn-light text-light" href="dashboard.php"><i class="fas fa-sign-in-alt"></i> Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-light text-light" href="logout.php"><i class="fas fa-user-plus"></i> Logout</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link btn btn-light text-light" href="add_faculty.php"><i class="fa-solid fa-registered"></i> Add New</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link btn btn-light text-light" href="dashboard.php"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
                        </li>
                          
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container mt-5">
     

        <div class="float-left mt-4 px-3">
        <h1>Faculty Search Results</h1>
                    </div>
        
        <!-- Display Faculty Data in a Table -->
        <table class="table table-bordered">
    <?php if (isset($faculty)): ?>
        <tr>
            <th>Name</th>
            <td><?php echo $faculty['name']; ?></td>
        </tr>
        <tr>
            <th>Department</th>
            <td><?php echo $faculty['department']; ?></td>
        </tr>
        <tr>
            <th>Position</th>
            <td><?php echo $faculty['position']; ?></td>
        </tr>
        <tr>
            <th>Qualifications</th>
            <td><?php echo $faculty['qualifications']; ?></td>
        </tr>
        <tr>
            <th>Courses Taught</th>
            <td><?php echo $faculty['courses_taught']; ?></td>
        </tr>
        <tr>
            <th>Research Interests</th>
            <td><?php echo $faculty['research_interests']; ?></td>
        </tr>
        <tr>
            <th>Publications</th>
            <td><?php echo $faculty['publications']; ?></td>
        </tr>
        <tr>
            <th>Experience</th>
            <td><?php echo $faculty['experience']; ?></td>
        </tr>
        <tr>
            <th>Contact Email</th>
            <td><?php echo $faculty['contact_email']; ?></td>
        </tr>
        <tr>
            <th>Contact Phone</th>
            <td><?php echo $faculty['contact_phone']; ?></td>
        </tr>
        <tr>
            <th>Address</th>
            <td><?php echo $faculty['address']; ?></td>
        </tr>
        <?php if (!empty($faculty['profile_picture'])): ?>
            <tr>
                <th>Profile Picture</th>
                <td><img src="<?php echo $faculty['profile_picture']; ?>" alt="Faculty Photo" class="img-fluid"></td>
            </tr>
        <?php else: ?>
            <tr>
                <th>Profile Picture</th>
                <td>No profile picture available.</td>
            </tr>
        <?php endif; ?>
        <!-- You can continue adding more faculty information fields here -->
    <?php else: ?>
        <tr>
            <td colspan="2">No faculty found with the provided mobile number.</td>
        </tr>
    <?php endif; ?>
</table>
    </div>
    <footer class=" text-light text-center py-4 mt-5" style="background-color: #FF8400; ">
        <div class="container">
            <p>&copy; 2023 Faculty Information Portal | Developed by Sar-Tech</p>
        </div>
</body>
</html>
