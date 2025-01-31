<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mayor Diman Datu</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
<?php $backgroundImage = "ey.jpg"; ?>

    <style>
	
        .mt-0 {
    margin-top:30 !important;
}
.mt-1 {
    margin-top:10 !important;
}
        .custom-margin-top {
            margin-top: 30px;
        }
        .custom-margin-bottom {
            margin-bottom: 30px;
        }
        .carousel-item img {
            height: 600px; 
            object-fit: cover;
        }
        .footer {
            background-color: #dc3545;
            color: white;
            padding: 15px 0;
            text-align: center;
            margin-top: 30px;
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
    <h3 class="mt-3">I LOVE YOU ALL!</h3>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-left" id="navbarNav">
            <ul class="navbar-nav">
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
            <form class="d-flex ms-auto" >
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

<!-- Main Content -->
<div class="container mt-5">
    <div class="row">
        <!-- Left Column: Image -->
        <div class="col-md-4">
            <img src="1.png" class="img-thumbnail" alt="Mayor Diman Datu" style="border: 6px solid black;">
        </div>
        <!-- Right Column: Bio -->
        <div class="col-md-8">
            <h3>Who is Diman Datu?</h3>
            <p>Eduardo Datu, a candidate for Municipal Mayor in the upcoming elections, is affiliated with the Kapanalig At Kambilan Ning Memalen Pamapanga. He is running in Bacolor. He is campaigning under the ballot name "DATU, DIMAN (KMBLN)". This candidate is running for the position of Municipal Mayor. The mayor is responsible for supervising all programs, projects, services, and activities of the municipal government, enforcing all laws and ordinances related to governance of the municipality and the exercise of its corporate powers, maximizing resource and revenue generation, and ensuring the delivery of basic services and the provision of adequate facilities.</p>
        </div>
    </div>

    <!-- Projects Section -->
    <div class="row custom-margin-top">
        <div class="col-md-12">
            <h3 class="text-center">EDUARDO “DIMAN” GUTIERREZ DATU</h3>
            <div class="row">
                <!-- Personal Details -->
                <div class="col-md-4">
                    <p><strong>Date of Birth:</strong> August 24, 1964</p>
                    <p><strong>Place of Birth:</strong> V.L. Macabali San Fernando, Pampanga</p>
                    <p><strong>Family Background:</strong></p>
                    <p>Father: Emiliano Cunan Datu</p>
                    <p>Mother: Consolacion Sicat Gutierrez</p>
                    <p>Wife: Grace Pinlac Datu</p>
                    <p>Children:</p>
                    <ul>
                        <li>John Edward P. Datu</li>
                        <li>Jastine Edward P. Datu</li>
                        <li>Jolina P. Datu</li>
                        <li>Jude Edward P. Datu</li>
                        <li>Jacob Edward P. Datu</li>
                    </ul>
                </div>
                <!-- Projects -->
                <div class="col-md-8">
                    <h4>Projects Accomplished:</h4>
                    <ul>
                        <li>New Building at Bacolor High School</li>
                        <li>Model Houses at Tinajero, Bacolor, Pampanga (2016)</li>
                    </ul>
                    <h4>Ongoing Projects:</h4>
                    <ul>
                        <li>Three (3) Storey fifteen (15) classrooms school building at Bacolor Central Elementary School (BCES)</li>
                        <li>Slope Protection of San Vicente - Cabambangan Creek</li>
                        <li>Roofing of Duat Covered Court</li>
                        <li>Concreting of Barangay Road at Maabu San Vicente</li>
                        <li>Rehabilitation of Access Road at Barangay San Vicente near Destiny Hotel</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Carousel -->
    <div class="row custom-margin-top">
        <div class="col-md-12">
            <h3 class="text-center">Project Gallery</h3>
            <div id="demo" class="carousel slide" data-bs-ride="carousel">
                <!-- Indicators -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>
                <!-- Slides -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="P1.jpg" class="d-block w-100" alt="Project 1">
                    </div>
                    <div class="carousel-item">
                        <img src="P2.jpg" class="d-block w-100" alt="Project 2">
                    </div>
                    <div class="carousel-item">
                        <img src="P3.jpg" class="d-block w-100" alt="Project 3">
                    </div>
                </div>
                <!-- Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p>&copy; 2025 All Rights Reserved</p>
    </div>
</footer>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>