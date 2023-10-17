<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Information Portal</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css ">
    <!-- Include your custom CSS -->
    <link rel="stylesheet" href="assets/css/index.css">
    
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-danger py-4">
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
                        <li class="nav-item">
                            <a class="nav-link btn btn-light text-light" href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a>
                        </li>
                        <div id="welcome-message" style="display: none;">Welcome!</div>
                        <li class="nav-item">
                            <a class="nav-link btn btn-light text-light" href="signup.php"><i class="fas fa-user-plus"></i> Sign Up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-light text-light" href="https://vr.lpu.in/?_gl=1*xfqw81*_gcl_au*ODUwMjcyMjU3LjE2OTAwODY0MzY."><i class="fa-solid fa-building-columns"></i></i> About Uiversity</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-light text-light" target="blank" href="https://github.com/itashuofficial"><i class="fa-regular fa-file-code"></i> Developer</a>
                        </li>
                        
                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class="hero">
        <div class="container text-center mt-4">
            <h1 class="text-primary font-weight-bold">Lovely Professional University</h1>
            <p>Your one-stop solution for Faculty information management.</p>
        </div>
    </section>
    <section class="features mt-5">
        <div class="container">
            <div class="row mt-1">
                <div class="col-md-6">
                    <ul>
                        <li><h3 class=" p-2 mx-4 rounded text-white" style="max-width: 70%; background-color: #FF8400;">Faculty Directory</h3></li>
                        <li><h3 class=" p-2 mx-4 rounded text-white" style="max-width: 70%; background-color: #FF8400;">Add Faculty</h3></li>
                        <li><h3 class=" p-2 mx-4 rounded text-white" style="max-width: 70%; background-color: #FF8400;">Edit Faculty</h3></li>
                        <li><h3 class=" p-2 mx-4 rounded text-white" style="max-width: 70%; background-color: #FF8400;">Search Faculty</h3></li>
                        <li><h3 class=" p-2 mx-4 rounded text-white" style="max-width: 70%; background-color: #FF8400;">Remove Faculty</h3></li>
                    </ul>
                </div>
                <div class="col-md-6 text-center   w-50 " >
                    <img src="assets/img/staffpng.png" alt="Faculty Information Portal Image" class="img-fluid rounded bg-white  shadow-lg rounded-pill " style="max-width: 60%; transition: transform 0.2s;">
                </div>
                
            </div>
        </div>
    </section>
    

    <div class="container text-center mt-5">
    <figure>
  <blockquote class="blockquote">
    <p>Nothing is impossible. The word itself says 'I'm possible!'</p>
  </blockquote>
  <figcaption class="blockquote-footer">
    Someone famous in <cite title="Source Title">Ashutosh Gupta</cite>
  </figcaption>
</figure>
    </div>

    <footer class=" text-light text-center py-4  ">
        <div class="container">
            <p>&copy; 2023 Faculty Information Portal | Developed by Sar-Tech</p>
        </div>
    </footer>
    <!-- Include Bootstrap JS and jQuery -->
    <script src="js/bootstrap.min.js"></script>
    <script src="assets/script/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
