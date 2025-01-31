<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAYOR DIMAN DATU - Campaign</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
<?php $backgroundImage = "ey.jpg"; ?>
    <style>
        .campaign-section {
            background: linear-gradient(135deg, #ff6f61, #4a9c3b;);
            padding: 60px 0;
            color: white;
            text-align: center;
        }

        .footer {
            background-color: #dc3545;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        .campaign-section h2 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .campaign-section p {
            font-size: 1.2rem;
            margin-bottom: 40px;
        }

        .campaign-card {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        .campaign-card:hover {
            transform: translateY(-10px);
        }

        .campaign-card i {
            font-size: 2rem;
            color: #ff6f61;
            margin-bottom: 15px;
        }

        .campaign-card h4 {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 10px;
        }

        .campaign-card p {
            font-size: 1rem;
            color: #666;
        }

        .btn-campaign {
            background-color: #ff6f61;
            color: white;
            padding: 10px 30px;
            border-radius: 25px;
            font-size: 1.1rem;
            text-transform: uppercase;
            transition: background-color 0.3s ease;
        }

        .btn-campaign:hover {
            background-color: #ff4a3d;
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

    <section class="campaign-section">
        <div class="container">
            <h2>Join the Movement!</h2>
            <p>Together, we can build a brighter future for Bacolor. Let's make a difference with Mayor Diman Datu's vision and leadership.</p>
            

            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="campaign-card">
                        <i class="fas fa-hand-holding-heart"></i>
                        <h4>Community Support</h4>
                        <p>Empowering communities through sustainable development and inclusive programs.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="campaign-card">
                        <i class="fas fa-book"></i>
                        <h4>Education for All</h4>
                        <p>Investing in education to ensure a brighter future for the next generation.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="campaign-card">
                        <i class="fas fa-tree"></i>
                        <h4>Green Initiatives</h4>
                        <p>Promoting eco-friendly practices and preserving our natural resources.</p>
                    </div>
                </div>
            </div>


            <div class="mt-5">
                <a href="Contact us.php" class="btn btn-campaign">Get Involved Now</a>
            </div>
        </div>
    </section>

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