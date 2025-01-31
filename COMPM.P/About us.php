<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAYOR DIMAN DATU</title>
    <!-- Latest compiled and minified CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for Social Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Latest compiled JavaScript -->
    <script src="js/bootstrap.bundle.min.js"></script>
<?php $backgroundImage = "ey.jpg"; ?>
    <style>
        .custom-margin {
            margin-top: 30px;
        }

        .custom-margin-small {
            margin-top: 10px;
        }

        .footer {
            background-color: #dc3545;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        .carousel-caption {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px;
        }
body {
    background-image: url('<?php echo $backgroundImage; ?>');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    image-rendering: -webkit-optimize-contrast;
    image-rendering: crisp-edges;
    min-height: 100vh;
    position: relative;
    /* Added default white text color for whole body */
    color: white;
}

/* Optional: Make the overlay darker to ensure white text is readable */
body::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.5); /* Darker overlay for better text contrast */
    z-index: -1;
}

/* Update navbar text color since it has light background */
.navbar-light {
    color: #000; /* Keep navbar text dark */
}

.navbar-light .navbar-nav .nav-link {
    color: #000; /* Keep navbar links dark */
}

/* Keep search form text dark */
.form-control {
    color: #000;
}
    </style>
</head>
<body>

<div class="container-fluid bg-danger text-white text-center py-4">
    <h1 class="display-4">MAYOR DIMAN DATU</h1>
    <h3 class="mt-3"> I LOVE YOU ALL!</h3>
</div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="Home Page.php">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Team.php">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About us.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Contact us.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Merch.php">Campaign</a>
                    </li>
									<li class="nav-item">
                    <a class="nav-link" href=devabout.php>Developer Contact</a>
                </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Carousel and Vision/Mission Section -->
    <div class="container custom-margin">
        <div class="row">
            <!-- Carousel -->
            <div class="col-md-6">
                <div id="demo" class="carousel slide" data-bs-ride="carousel">
                    <!-- Indicators/dots -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                    </div>
                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="g1.jpg" alt="Bacolor City" class="d-block w-100">
                            <div class="carousel-caption">
                                <h5>Bacolor City</h5>
                                <p>A vibrant city rich in culture and history.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="k.jpg" alt="Kapampangan Arts" class="d-block w-100">
                            <div class="carousel-caption">
                                <h5>Kapampangan Arts</h5>
                                <p>Preserving the heritage of Kapampangan arts.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="k1.jpg" alt="Community Development" class="d-block w-100">
                            <div class="carousel-caption">
                                <h5>Community Development</h5>
                                <p>Empowering communities for sustainable growth.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Left and right controls/icons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>

            <!-- Vision and Mission -->
            <div class="col-md-6">
                <h3 class="text-center mb-4">VISION AND MISSION</h3>
                <p class="text-justify">
                    We envision Bacolor as the premier center of Kapampangan arts and culture, history and education, inhabited by God-centered, resilient, and empowered citizenry living in a safe and friendly environment, governed by a highly competitive and strong-willed leadership moving towards a dynamic center for sustainable human and socio-economic development.
                    Through a well-crafted Development Agenda, committed public servants, and responsive community, we shall all together achieve sustainable human and economic growth.
                </p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 All Rights Reserved</p>
            <div class="social-icons">
                <a href="#" class="text-white mx-2"><i class="fab fa-facebook"></i></a>

            </div>
        </div>
    </footer>

</body>
</html>