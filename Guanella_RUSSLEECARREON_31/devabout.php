<!DOCTYPE html>
<html lang="en">
<head>
    <title>Developers - Mayor Diman Datu</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <?php $backgroundImage = "ey.jpg"; ?>

    <style>
        body::before {
            content: '';
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-image: url('<?php echo $backgroundImage; ?>');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            filter: brightness(0.5);
            z-index: -1;
        }

        body {
            color: white;
            position: relative;
            min-height: 100vh;
        }

        .dev-profile {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 30px;
            color: #333;
            transition: transform 0.3s ease;
        }

        .dev-profile:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }

        .profile-img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 15px;
            border: 5px solid #dc3545;
        }

        .social-links {
            margin-top: 15px;
        }

        .social-links a {
            color: #dc3545;
            margin: 0 10px;
            font-size: 20px;
            transition: color 0.3s ease;
        }

        .social-links a:hover {
            color: #0d6efd;
        }

        .footer {
            background-color: #dc3545;
            color: white;
            padding: 15px 0;
            text-align: center;
            margin-top: 30px;
            position: relative;
            z-index: 1;
        }
    </style>
</head>
<body>


<div class="container-fluid bg-danger text-white text-center py-4">
    <h1 class="display-4">DEVELOPER</h1>
    <h3 class="mt-3">Meet the Behind of the Website</h3>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-left" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="Home Page.php">Home</a>
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
        </div>
    </div>
</nav>
   <div class="container mt-5">
        <div class="center-container">
            <div class="profile-wrapper">
                <div class="dev-profile text-center">
                    <img src="pic.jpg" alt="Developer 3" class="profile-img">
                    <h3>Russlee C Careon</h3>
                    <h5 class="text-muted">YOURS TRULY</h5>
                    <p>Student from Don Bosco Academy Bacolor in 10-Guanella</p>
                    <div class="social-links">
                        <a href="https://www.facebook.com/surubangfruit"><i class="fab fa-facebook"></i></a>
                   <div class="social-links">
				   <a href="mailto:rccarrein17134@donbosco.edu.ph" aria-label="Email me">
  <i class="fas fa-envelope"></i>
</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Footer -->
<footer class="footer">
    <div class="container">
        <p>&copy; 2025 All Rights Reserved</p>
    </div>
</footer>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>