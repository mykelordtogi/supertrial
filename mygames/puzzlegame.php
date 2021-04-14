<!DOCTYPE html>
<html>
<head>
	<title>PUZZLE GAME</title>
	<style>
		
		body {
			          font-family: sans-serif;
  background-image: url("assets/img/hero-bg.png");
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: scroll;
		}
		h1 {
			position: absolute;
			top: 20%;
			text-align: center;
			color: #1E90FF;
		}
		h2 {
					position: absolute;
			top: 30%;
			text-align: center;
			color: #1E90FF;
		}
		#box {
			background-color: white;
  			width: 900px;
  			height: 330px;
  			border: 15px solid sandybrown;
  			padding: 30px;
  						position: absolute;
			top: 40%;
			left: 15%;
		}
		div.emoji {
			border: 1px solid black;
		}
		div.emoji:hover {
			border: 1px solid red;
		}
		div.emoji img {
			width: 100%;
			height: auto;
		}
		div.desc {
  			padding: 15px;
  			text-align: center;
		}
		.responsive {
  			padding: 0 6px;
  			margin: 0px 30px 0px 30px;
  			float: left;
  			width: 24.99999%;
		}
	</style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

<meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="toknow.png" rel="icon">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>
<body>

<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

<!--https://practice4you.herokuapp.com/makeithappenINDEX.php-->

      <a href="https://practice4you.herokuapp.com/makeithappenINDEX.php" class="logo d-flex align-items-center">
        <img src="toknow.png" alt="">
        <span>GnothiSeauton</span>
      </a>

        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->



            </div>
          </div>
        </div>
    <!--heeeeeeerrrrrrrrrrreeeeeeeeeeeee-->
      </div>
    </div>

  </section><!-- End Hero -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<h1>Let's try to play a puzzle!</h1>
	<h2>Out from the three emoji puzzles, click one that you want to solve.</h2>

	<div id="box">
		<div class="responsive">
  			<div class="emoji">
    			<a target="_self" href="happypuzzle.php">
      				<img src="puzzle/happy.jpg" width="200" height="200">
    			</a>
    			<div class="desc">Happy Emoji Puzzle</div>
  			</div>
		</div>

		<div class="responsive">
  			<div class="emoji">
    			<a target="_self" href="sadpuzzle.php">
      				<img src="puzzle/sad.jpg" width="200" height="200">
    			</a>
    			<div class="desc">Sad Emoji Puzzle</div>
  			</div>
		</div>

		<div class="responsive">
  			<div class="emoji">
    			<a target="_self" href="angrypuzzle.php">
      				<img src="puzzle/angry.jpg" width="200" height="200">
    			</a>
    			<div class="desc">Angry Emoji Puzzle</div>
  			</div>
		</div>
	</div>




<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
<script type="text/javascript" src="sweetalert/js/sweetalert2.js"></script>
<script type="text/javascript" src="sweetalert/js/custom.js"></script>


 <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>