<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Information Dashboard</title>
    <!-- Include Bootstrap CSS and custom styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Add Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">



</head>

<body>


    <header>
        <nav class="navbar navbar-expand-lg  py-4" style="background-color: #FF8400;">
            <div class="container">
                <div class="col-md-6 text-center d-flex ">
                    <img src="assets/img/logo.png" alt="Faculty Information Portal Image"
                        class="img-fluid rounded d-block bg-white rounded-pill "
                        style="max-width: 100px; transition: transform 0.2s;">

                    <div class="float-left mt-4 px-3">
                        <a class="navbar-brand text-light " style="font-size: 30px;" href="#"><strong>Faculty
                                Information Portal</strong></a>
                    </div>

                </div>


                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse bg-success rounded px-0 " id="navbarNav">
                    <ul class="navbar-nav px-3 py-2">
                        <li class="nav-item">
                            <div class="welcome">
                                <?php
                                session_start();
                                if (isset($_SESSION['username'])) {
                                    echo '<h3 class="display-5 d-flex  ">Welcome,&nbsp;  <span style="color: yellow; font-weight: bold;">' . $_SESSION['fullname'] . '</span> &nbsp;!</h3>';
                                }

                                ?>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-light text-light px-5 mt-1 py-2 ml-3" href="logout.php"><i
                                    class="fas fa-user-plus"></i> Logout</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container bg-danger rounded">
        <marquee> Welcome To Lovely Professional University, Phagwara - Punjab. </marquee>
    </div>
    <div class="container mt-5">
        <!-- <h1 class="text-center text-primary">Welcome to the Faculty Information Dashboard</h1> -->

        <!-- Quick Links -->
        <div class="quick-links ">
            <div class="container mt-1">
                <h2>Quick Links</h2>
                <div class="row bg-light rounded mt-2 d-flex justify-content-between align-items-center"
                    style="padding: 5px;">
                    <div class="col-md-3">
                        <a href="add_faculty.php" class="btn btn-primary btn-block">Add Faculty</a>
                    </div>
                    <div class="col-md-3">
                        <a href="search_faculty.php" class="btn btn-primary btn-block">Search Faculty</a>
                    </div>
                    <div class="col-md-3">
                        <a href="#" class="btn btn-primary btn-block">Update Faculty</a>
                    </div>
                    <div class="col-md-3">
                        <a href="#" class="btn btn-primary btn-block">Delete Faculty</a>
                    </div>
                </div>

            </div>
        </div>

        <!-- <div class="container mt-4 bg-success p-3">
           <form method="POST" action="delete_faculty.php">
                <input type="hidden" name="faculty_id" value="<?php echo $faculty['id']; ?>">
                <button type="submit" class="btn btn-danger btn-sm" name="delete">Delete</button>
            </form>
            
        </div> -->

        <!-- <div class="container mt-4 bg-primary p-3 rounded">
            <h2>Search Faculty by Mobile Number</h2>
            <form method="GET" action="faculty_search_by_mobile.php">
                <div class="form-group">
                    <label for="mobile">Mobile Number:</label>
                    <input type="text" name="mobile" id="mobile" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-danger mt-2">Search</button>
            </form>
        </div> -->
    </div>

    <!-- Display Faculty Information -->
    <div class="container mt-5">
        <?php if (!empty($facultyList)): ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Position</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <!-- Add more fields as needed -->
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($facultyList as $faculty): ?>
                        <div class="container mt-4">
                            <h2>Faculty Information</h2>

                            <!-- Display Faculty Information in a Colorful Table -->
                            <table class="table table-bordered table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Department</th>
                                        <th>Position</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <!-- Add more table headers as needed -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($faculty)): ?>
                                        <tr>
                                            <td><img src="<?php echo htmlspecialchars($faculty['photo']); ?>"
                                                    alt="<?php echo htmlspecialchars($faculty['name']); ?>" width="100"></td>
                                            <td>
                                                <?php echo htmlspecialchars($faculty['name']); ?>
                                            </td>
                                            <td>
                                                <?php echo htmlspecialchars($faculty['department']); ?>
                                            </td>
                                            <td>
                                                <?php echo htmlspecialchars($faculty['position']); ?>
                                            </td>
                                            <td>
                                                <?php echo htmlspecialchars($faculty['email']); ?>
                                            </td>
                                            <td>
                                                <?php echo htmlspecialchars($faculty['phone']); ?>
                                            </td>
                                            <!-- Add more table data cells as needed -->
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="6">No faculty information available.</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No faculty information available.</p>
        <?php endif; ?>
    </div>
    <footer class=" text-light text-center py-4" style="background-color: #FF8400; ">
        <div class="container">
            <p>&copy; 2023 Faculty Information Portal | Developed by Sar-Tech</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>