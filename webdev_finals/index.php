<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet1" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet2" href="mystyle.css">
    <style>
        .navbar-brand img{
            width: 80px;
            height: auto;
        }
    </style>
    <title>USC DCISM</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg  pt-3 bg-dark navbar-dark">
        <div class="container">
            <a href="#" class="navbar-brand"><img src="dcismicon.png" alt="dcismicon" id="icon"> DCISM</a>

            <button class="navbar-toggler" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navmenu">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link">HOME</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ABOUT US
                        </a>
                        <ul class="dropdown-menu bg-dark text-white">
                            <li><a class="dropdown-item text-white bg-dark" href="#">Department</a></li>
                            <li><a class="dropdown-item text-white bg-dark" href="#">School</a></li>
                            <li><a class="dropdown-item text-white bg-dark" href="#">Instructors</a></li>
                            <li><a class="dropdown-item text-white bg-dark" href="#">Students</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#faqs" class="nav-link">FAQs</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- some section -->

    <section class="bg-dark text-light p-5 p-lg-0 pt-lg-5 pb-lg-5 text-center text-sm-start">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                    <h1 class="p-1">Welcome to USC's</h1>
                    <h1><span class="text-info p-1">Department of Computer, Information Sciences
                        and Mathematics</span>
                    </h1>
                    <p class="lead p-1">
                    Unlock your potential in the dynamic world of technology and mathematics at the 
                    University of San Carlos! Our DCISM department offers cutting-edge programs in 
                    Computer Science, Information Systems, Information Technology, and Applied Mathematics. 
                    Join us and be part of a vibrant community where creativity meets excellence! 🚀🌟 
                    </p>
                </div>
                <img class="img-fluid w-50 d-none d-sm-block" id="object"src="dcism_object4-resize.gif" alt="computer_gif">
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer class="p-5 bg-dark text-white text-center
    position-relative">
            <div class="container"><p class="lead">Copyright &copy; 2024 DCISM</p></div>

            <a href="#" class="position-absolute bottom-0 end-0"></a>
        </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>