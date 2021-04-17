<head>

   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Document</title>


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

<style type="text/css">
	
	body{
  margin:0;
  padding:0;
}
#colorButtonBox{
  position:absolute;
  background:rgb(210,210,210);
  padding:5px;
  margin:5px;
  border-radius:10px;
  bottom:380px;
  left: -4px;
}
#colorButton {
  transition: .1s linear;
  position: relative;
  float:left;
  margin:5px;
  border-radius:5px;
  width: 40px;
  height: 40px;
  z-index: 3;
}
#eraserButton {
  transition: .1s linear;
  position: relative;
  float:left;
  margin:5px;
  border-radius:50%;
  width: 40px;
  height: 40px;
  z-index: 3;
  background:white;
}
#eraserButton:hover {
  width:30px;
  height:30px;
  margin:10px;
}
#colorButton:hover {
  transition: .1s linear;
  width:45px;
  height:45px;
  margin:2.5px;
}

.black {
  background:black;
}
.blue {
  background:blue;
}
.red {
  background:red;
}
.green {
  background:green;
}
.yellow {
  background:yellow;
}


</style>

</head>


<body>

<header id="header" class="header top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index_mobile.php" class="logo d-flex align-items-center">
        <img src="toknow.png" alt="">
        <span>GnothiSeauton</span>
      </a>

        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->



<section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up"></h1>
          <h2 data-aos="fade-up" data-aos-delay="400"></h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
            </div>
          </div>
        </div>
    <!--heeeeeeerrrrrrrrrrreeeeeeeeeeeee-->
      </div>
    </div>

  </section><!-- End Hero -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <div id="colorButtonBox">
    <div id="colorButton" class="black" onclick='changeColorAndSize("black",10)'></div>
    <div id="colorButton" class="red" onclick="changeColorAndSize('red',10)"></div>
    <div id="colorButton" class="green" onclick="changeColorAndSize('green',10)"></div>
    <div id="colorButton" class="blue" onclick="changeColorAndSize('blue',10)"></div>
    <div id="colorButton" class="yellow" onclick="changeColorAndSize('yellow',10)"></div>
    <div id="eraserButton" onclick="changeColorAndSize('white',100)"></div>
  </div>
  
  <canvas id="canvas"></canvas>

<script type="text/javascript">
	let color = "black";
let strokeSize = 10;

function changeColorAndSize(data, width) {
  color = data;
  strokeSize = width;
}
window.addEventListener("load", () => {
  const canvas = document.querySelector("#canvas");
  const ctx = canvas.getContext("2d");

  //resizing
  canvas.height = window.innerHeight;
  canvas.width = window.innerWidth;

  //variables
  let painting = false;

  //functions
  function startPosition(e) {
    painting = true;
    draw(e);
  }

  function endPosition() {
    painting = false;
    ctx.beginPath();
  }

  function draw(e) {
    if (!painting) {
      return;
    }
    
    e.preventDefault();
    ctx.lineWidth = strokeSize;
    ctx.lineCap = "round";
 
    // ctx.lineTo(e.clientX, e.clientY);
    if (e.type == 'touchmove'){
      ctx.lineTo(e.touches[0].clientX, e.touches[0].clientY);
    } else if (e.type == 'mousemove'){
      ctx.lineTo(e.clientX, e.clientY);
    }
      
    ctx.stroke();
    ctx.strokeStyle = color;
    ctx.beginPath();
    
    // ctx.moveTo(e.clientX, e.clientY);
    if (e.type == 'touchmove'){
      ctx.moveTo(e.touches[0].clientX, e.touches[0].clientY);
    } else if (e.type == 'mousemove'){
      ctx.moveTo(e.clientX, e.clientY);
    }
  }

  //event listeners
  canvas.addEventListener("mousedown", startPosition);
  canvas.addEventListener("touchstart", startPosition);
  canvas.addEventListener("mouseup", endPosition);
  canvas.addEventListener("touchend", endPosition);
  canvas.addEventListener("mousemove", draw);
  canvas.addEventListener("touchmove", draw);
});

	
</script>


</body>