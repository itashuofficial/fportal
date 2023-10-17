<!DOCTYPE html>
<html>
<head>
    <title>Add Faculty Member</title>
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
       
        body {
            background-color: #f3f3f3; 
        }
        .container {
            margin-top: 20px;
            background-color: #fff; 
            padding: 20px;
            border-radius: 10px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .btn-success {
            background-color: #28a745; 
            border: none;
        }
        .btn-success:hover {
            background-color: #218838; /* Change button color on hover */
        }
    </style>
</head>
<body>

<header>
        <nav class="navbar navbar-expand-lg  py-4" style="background-color: #FF8400; ">
            <div class="container bg-primary">
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
    <div class="container">
    <div class="container bg-success py-2 w-50 text-light" >
        <h1>Add Faculty Member</h1>
    </div> 
        <!-- Faculty Member Form -->
        <form method="POST" action="process_add_faculty.php">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="department">Department:</label>
                <input type="text" name="department" id="department" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="position">Position:</label>
                <input type="text" name="position" id="position" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="qualifications">Qualifications:</label>
                <input type="text" name="qualifications" id="qualifications" class="form-control">
            </div>
            <div class="form-group">
                <label for="courses_taught">Courses Taught:</label>
                <input type="text" name="courses_taught" id="courses_taught" class="form-control">
            </div>
            <div class="form-group">
                <label for="research_interests">Research Interests:</label>
                <input type="text" name="research_interests" id="research_interests" class="form-control">
            </div>
            <div class="form-group">
                <label for="publications">Publications:</label>
                <input type="text" name="publications" id="publications" class="form-control">
            </div>
            <div class="form-group">
                <label for="experience">Experience:</label>
                <input type="text" name="experience" id="experience" class="form-control">
            </div>
            <div class="form-group">
                <label for="contact_email">Contact Email:</label>
                <input type="email" name="contact_email" id="contact_email" class="form-control" required>
            </div>
            <div class="form-group">
    <label for="contact_phone">Contact Phone:</label>
    <input type="text" name="contact_phone" id="contact_phone" class="form-control">
</div>
<div class="form-group">
    <label for="address">Address:</label>
    <input type="text" name="address" id="address" class="form-control">
</div>
<div class="form-group">
    <label for="profile_picture">Profile Picture:</label>
    <input type="file" name="profile_picture" id="profile_picture" class="form-control-file">
</div>
            <!-- Add more mandatory fields as needed -->
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>

    <footer class=" text-light text-center py-4 mt-5" style="background-color: #FF8400; ">
        <div class="">
            <p>&copy; 2023 Faculty Information Portal | Developed by Sar-Tech</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
