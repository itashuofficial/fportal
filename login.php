<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Student Management System</title>
    <link rel="stylesheet" href="assets/css/login.css">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
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
                    <ul class="navbar-nav px-3">
                      
                        <li class="nav-item p-3">
                            <a class="nav-link btn btn-light text-light" href="signup.php"><i class="fas fa-user-plus"> </i> Sign Up</a>
                        </li>
                       
                        <li class="nav-item p-3">
                            <a class="nav-link btn btn-light text-light" target="blank" href="https://vr.lpu.in/?_gl=1*xfqw81*_gcl_au*ODUwMjcyMjU3LjE2OTAwODY0MzY."><i class="fa-solid fa-building-columns"></i></i> About Uiversity</a>
                        </li>
                        <li class="nav-item p-3">
                            <a class="nav-link btn btn-light text-light" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        
                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container h-100">
        <div class="row align-items-center h-100 mt-5 ">
            <div class="col-md-6 mx-auto bg-warning pt-5 py-3 rounded">
                <div class="card">
                    <div class="card-body ">
                        <h2 class="card-title text-center">Login</h2>
                        <form action="login_process.php" method="POST">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" id="username" name="username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
   <div class="container">

   <!-- Carousel wrapper -->
<div id="carouselMultiItemExample" class="carousel  carousel-dark text-center" >
  <!-- Controls -->
 
  <!-- Inner -->
  <div class="carousel-inner py-4 mt-3">
    <!-- Single item -->
    <div class="carousel-item active">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 ">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="assets/img/ashok.jpg" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3">Ashok Mittal</h5>
            <p>Chairman</p>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              Ashok Mittal, Chairman, Lovely Professional University (LPU) is a visionary who wants something unique in edu feild. In an interview with Sharmila Das, he talks about role of ICT in filling the gaps in education
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
            </ul>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="assets/img/rashmi.jpg" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3">Rashmi Mittal</h5>
            <p>Pro Vice Chancellor</p>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              Pro Vice Chancellor, Lovely Professional University (LPU) is a
               visionary who wants to bring back the traditional education values to modren pedagogy.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li>
                <i class="fas fa-star-half-alt fa-sm"></i>
              </li>
            </ul>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="assets/img/staffpng.png" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3">K N Sharma</h5>
            <p>Professor</p>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              Uni Professor, Lovely Professional University (LPU) is a
               visionary who wants to bring back the traditional education values to modren pedagogy.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="far fa-star fa-sm"></i></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Inner -->
</div>
<!-- Carousel wrapper -->
   </div>
 
   <footer class=" text-light text-center py-4  " style="background-color: #FF8400;">
        <div class="container">
            <p>&copy; 2023 Faculty Information Portal | Developed by Sar-Tech</p>
        </div>
    </footer>

 

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
