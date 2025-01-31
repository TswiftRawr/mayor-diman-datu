<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAYOR DIMAN DATU</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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

        .contact-info {
            margin-top: 20px;
        }

        .card {
            margin: 0 auto; /* Center the card */
            max-width: 400px;
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
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container custom-margin">
        <div class="card bg-success text-white">
            <img src="3.jpg" class="card-img-top" alt="Mayor Diman Datu">
            <div class="card-body text-center">
                <h4 class="card-title">FIND ME AT</h4>
                <a href="https://www.facebook.com/SupportersOfMayorDimanDatu/" class="card-link text-white" target="_blank">
                    <i class="fab fa-facebook"></i> Facebook
                </a>
            </div>
        </div>
    </div>

    <div class="container contact-info">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <ul class="list-group list-group-horizontal justify-content-center">
                    <li class="list-group-item bg-success text-white">(045) 458-0500</li>
                    <li class="list-group-item bg-success text-white">municipalityofbacolor@gmail.com</li>
                    <li class="list-group-item bg-success text-white">Municipal Hall Building, Bacolor, Pampanga</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container custom-margin">
        <div class="d-flex justify-content-center">
            <div class="w-75">
                <label for="comment" class="form-label">Comments:</label>
                <textarea class="form-control" rows="3" id="comment" name="text" placeholder="Leave your comments here..."></textarea>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 All Rights Reserved</p>
            <div class="social-icons">
                <a href="#" class="text-white mx-2"><i class="fab             </div>
        </div>
    </footer>

</body>
</html>