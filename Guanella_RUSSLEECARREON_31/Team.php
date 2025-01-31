<html>
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/bootstrap.bundle.min.js"></script>
<?php $backgroundImage = "ey.jpg"; ?>
<style>

.mt-0 {
	margin-top:30 !important;
}
.mt-1 {
	margin-top:10 !important;
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

  <div class="d-flex justify-content-center">
<img src="g1.jpg" class=style="width:8
00px">

</div>



  <div class="container custom-margin">
        <h2 class="text-center mb-4">OUR TEAM</h2>
        <div class="row">
            <div class="col-md-4 team-member text-center">
                <h3>MAYOR</h3>
                <p>DIMAN DATU</p>
                <img src="4.jpg" class="rounded-circle img-thumbnail" alt="Mayor Diman Datu" width="150" height="150">
            </div>
            <div class="col-md-4 team-member text-center">
                <h3>VICE MAYOR</h3>
                <p>RON DUNGCA</p>
                <img src="r.jpg" class="rounded-circle img-thumbnail" alt="Vice Mayor Ron Dungca" width="150" height="150">
            </div>
            <div class="col-md-4 team-member text-center">
                <h3>COUNCILOR</h3>
                <p>JUDE DATU</p>
                <img src="j.jpg" class="rounded-circle img-thumbnail" alt="Councilor Jude Datu" width="150" height="150">
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-4 team-member text-center">
                <h3>COUNCILOR</h3>
                <p>SANCHO DEJESUS</p>
                <img src="d.jpg" class="rounded-circle img-thumbnail" alt="Councilor Sancho Dejesus" width="150" height="150">
            </div>
            <div class="col-md-4 team-member text-center">
                <h3>COUNCILOR</h3>
                <p>CHING DAVID</p>
                <img src="c.jpg" class="rounded-circle img-thumbnail" alt="Councilor Ching David" width="150" height="150">
            </div>
            <div class="col-md-4 team-member text-center">
                <h3>COUNCILOR</h3>
                <p>ANGIE ANGELES</p>
                <img src="an.jpg" class="rounded-circle img-thumbnail" alt="Councilor Angie Angeles" width="150" height="150">
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-4 team-member text-center">
                <h3>COUNCILOR</h3>
                <p>STEEKIE BLANCO</p>
                <img src="st.jpg" class="rounded-circle img-thumbnail" alt="Councilor Steekie Blanco" width="150" height="150">
            </div>
            <div class="col-md-4 team-member text-center">
                <h3>COUNCILOR</h3>
                <p>CARLAX LAXA</p>
                <img src="ca.jpg" class="rounded-circle img-thumbnail" alt="Councilor Carlax Laxa" width="150" height="150">
            </div>
            <div class="col-md-4 team-member text-center">
                <h3>COUNCILOR</h3>
                <p>AIZA CUNANAN</p>
                <img src="a.jpg" class="rounded-circle img-thumbnail" alt="Councilor Aiza Cunanan" width="150" height="150">
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-4 team-member text-center">
                <h3>COUNCILOR</h3>
                <p>RENZ CANLAS</p>
                <img src="re.jpg" class="rounded-circle img-thumbnail" alt="Councilor Renz Canlas" width="150" height="150">
            </div>
        </div>
    </div>

 
 
<footer class="footer">
    <div class="container">
        <p>&copy; 2025 All Rights Reserved</p>
    </div>
</footer>

<script src="js/bootstrap.bundle.min.js"></script>
 
 
  </div>
 </div>
  </div>
</body>
</html>