<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>GnothiSeauton</title>


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

  <!-- =======================================================
  * Template Name: FlexStart - v1.2.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

   <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" type="text/css" >
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' href="main22.css">


  <script src='main2.js'></script>
</head>

<style type="text/css">
   body {
 font-family: Arial, Helvetica, sans-serif;
}


.menu-toggler {
  position: absolute;
  display: none;
  top:0;
  bottom:0;
  right:0;
  left:0;
  margin:auto;
  width:0px;
  height:0px;
  z-index:1;
  opacity:0;
  cursor:pointer;
}
.menu-toggler:hover + label,
.menu-toggler:hover + label:before,
.menu-toggler:hover + label:after{
  
}
.menu-toggler:checked + label {

}
.menu-toggler:checked + label:before,
.menu-toggler:checked + label:after{
  top:0;
  width:40px;
  transform-origin: 50% 50%;
}
.menu-toggler:checked + label:before {
  transform: rotate(45deg) translateY(-15px) translateX(-15px);
}
.menu-toggler:checked + label:after {
  transform: rotate(-45deg);
}
.menu-toggler:checked ~ ul .menu-item { 
  opacity: 1;
}
.menu-toggler:checked ~ ul .menu-item:nth-child(1) {
  transform: rotate(0deg) translate(-200px) translateY(40px);

}


.menu-toggler:checked ~ ul .menu-item:nth-child(2) {
 transform: rotate(60deg) translate(-200px) translateY(70px);
  
}

/*60deg*/

.menu-toggler:checked ~ ul .menu-item:nth-child(3) {
  transform: rotate(120deg) translate(-200px) translateY(-70px);
  

}
.menu-toggler:checked ~ ul .menu-item:nth-child(4) {
  transform: rotate(180deg) translateX(-200px) translateY(-40px);
  
}
.menu-toggler:checked ~ ul .menu-item:nth-child(5) {
  transform: rotate(240deg) translateX(-270px) translateY(30px);
}
.menu-toggler:checked ~ ul .menu-item:nth-child(6) {
  transform: rotate(300deg) translateX(-270px) translateY(-30px);
}
.menu-toggler:checked ~ ul .menu-item a {
  pointer-events:auto;
}
.menu-toggler + label {
 
  display: block;
  z-index:0;
  border-radius: 2.5px;

  transition: transform 0.5s top 0.5s;
  position: absolute;

  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
}
.menu-toggler + label:before,
.menu-toggler + label:after {
 
  display: block;
  z-index: 1;
  border-radius: 2.5px;
 
  transition: transform 0.5s top 0.5s;
  content: "";
  position: absolute;
  display: block;
  left: 0;
}
.menu-toggler + label:before {
  top: 10px;
}
.menu-toggler + label:after {
  top: -10px;
}
.menu-item:nth-child(1) a {
  transform: rotate(0deg);
}
.menu-item:nth-child(2) a {
  transform: rotate(-60deg);
}
.menu-item:nth-child(3) a {
  transform: rotate(-120deg);
}
.menu-item:nth-child(4) a {
  transform: rotate(-180deg);
}
.menu-item:nth-child(5) a {
  transform: rotate(-240deg);
}
.menu-item:nth-child(6) a {
  transform: rotate(-300deg);
}
.menu-item {
  position: absolute;
  display: block;
  top:500px;
  bottom: 0;
  left: -10px;
  right: 0;
  margin: auto;
  width: 80px;
  height: 80px;
  opacity: 0;
   transition: .8s ease-in-out;

}
.menu-item a {
  display: block;
  width: inherit;
  height: inherit;
  line-height: 80px;
  color: rgba(255, 255, 255, 0.7);
  background: rgba(230, 230, 250, 0.7);
  border-radius: 50%;
  text-align: center;
  text-decoration: none;
  font-size: 40px;
  /*pointer-events: none;*/
  transition: 0.2s;
}
.menu-item a:hover {
  box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.3);
  color: black;
  background: rgba(255, 255, 255, 0.3);
  font-size: 44.44px

}

.menu-item #icon1
{
  background-color: coral;
  border: 3px solid black;
}

.menu-item #icon1:hover
{
  cursor: pointer;
  border: 5px solid coral;
}


.menu-item #icon2
{
  background-color: springgreen;
 border: 3px solid black;
}

.menu-item #icon2:hover
{
 cursor: pointer;
 border: 5px solid springgreen;
}


.menu-item #icon3
{
  background-color: Aquamarine;
 border: 3px solid black;
}

.menu-item #icon3:hover
{
  cursor: pointer;
 border: 5px solid Aquamarine;
}



.menu-item #icon4
{
  background-color: crimson;
 border: 3px solid black;
}
.menu-item #icon4:hover
{
 cursor: pointer;
 border: 5px solid crimson;
}


.menu-item #icon5
{
  background-color: gold;
  border: 3px solid black;
}
.menu-item #icon5:hover
{
 cursor: pointer;
  border: 5px solid gold;
}



.menu-item #icon6
{
  background-color: pink;
  border: 3px solid black;
}

.menu-item #icon6:hover
{
 cursor: pointer;
  border: 5px solid pink;
}

/*my tool tips*/

.tooltip1 {
    display: none;
    font-size: 20px;
    font-family: arial;
    border: 2px solid white;
   padding-right: 7px;
   padding-top: 5px;
   padding-bottom: 5px;
    padding-left: 7px;
background-color: black;
    color: white;
text-align: center;
    margin-left: 200px; /* moves the tooltip to the right */
    margin-top: 0px; /* moves it down */
    position: absolute;
    z-index: 1000;
}

.menu-item:hover .tooltip1{
    display:block;
}

.tooltip2 {
    display: none;
    font-size: 19px;
    font-family: arial;
width: 100px;
text-align: center;

    border: 2px solid white;
   padding-right: 7px;
   padding-top: 5px;
   padding-bottom: 5px;
    padding-left: 7px;
background-color: black;
    color: white;
 
transform: rotate(-59.8deg) translateX(140px) translateY(70px);
    position: absolute;
    z-index: 1000;
}

.menu-item:hover .tooltip2 {
    display:block;
}

.tooltip3 {
    display: none;
    font-size: 20px;
    font-family: arial;
    border: 2px solid white;
   padding-right: 7px;
   padding-top: 5px;
   padding-bottom: 5px;
    padding-left: 7px;
background-color: black;
    color: white;
 text-align: center;
transform: rotate(-120deg) translateX(-155px) translateY(70px);
    position: absolute;
    z-index: 1000;
}

.menu-item:hover .tooltip3 {
    display:block;
}


.tooltip4 {
    display: none;
    font-size: 20px;
    font-family: arial;
    border: 2px solid white;
   padding-right: 7px;
   padding-top: 5px;
   padding-bottom: 5px;
    padding-left: 7px;
background-color: black;
    color: white;
 text-align: center;
transform: rotate(180deg) translateX(-175px) translateY(0px);
    position: absolute;
    z-index: 1000;
}

.menu-item:hover .tooltip4 {
    display:block;
}

.tooltip5 {
    display: none;
    font-size: 20px;
    font-family: arial;
   text-align: center;
    border: 2px solid white;
   padding-right: 7px;
   padding-top: 5px;
   padding-bottom: 5px;
    padding-left: 7px;
background-color: black;
    color: white;
 
transform: rotate(120deg) translateX(-145px) translateY(-70px);
    position: absolute;
    z-index: 1000;
}

.menu-item:hover .tooltip5 {
    display:block;
}


.tooltip6 {
    display: none;
    font-size: 20px;
    font-family: arial;
    border: 2px solid white;
   padding-right: 7px;
   padding-top: 5px;
   padding-bottom: 5px;
    padding-left: 7px;
background-color: black;
    color: white;
 text-align: center;
transform: rotate(60deg) translateX(160px) translateY(30px);
    position: absolute;
    z-index: 1000;
}

.menu-item:hover .tooltip6 {
    display:block;
}




/*my curtainmenu 1*/

.overlay {
  height: 0%;
  width: 100%;
  position: fixed;
  z-index: 1000;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-y: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top:40%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
   z-index: 1000;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay {overflow-y: auto;}
  .overlay a {font-size: 20px;}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}

/*my curtainmenu 1*/


/*my curtainmenu 2*/

.overlay2 {
  height: 0%;
  width: 100%;
  position: fixed;
  z-index: 1000;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-y: hidden;
  transition: 0.5s;
}

.overlay-content2 {
  position: relative;
  top:40%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay2 a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
   z-index: 1000;
}

.overlay2 a:hover, .overlay2 a:focus {
  color: #f1f1f1;
}

.overlay2 .closebtn2 {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay2 {overflow-y: auto;}
  .overlay2 a {font-size: 20px;}
  .overlay2 .closebtn2 {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}

/*my curtainmenu 2*/

/*my curtainmenu 3*/

.overlay3 {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1000;
  top: 0;
  left:0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-x: hidden;
  transition: 0.5s;

}

.overlay-content3 {
  position: relative;
  top: 40%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay3 a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
  z-index: 1000;
}

.overlay3 a:hover, .overlay3 a:focus {
  color: #f1f1f1;
}

.overlay3 .closebtn3 {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay3 a {font-size: 20px;}
  .overlay3 .closebtn3 {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}

/*my curtainmenu 3*/

/*my curtainmenu 4*/
.overlay4 {
  height: 100%;
  width: 0;
  position: fixed;
   z-index: 1000;
  right: 0;
  /** it was left: 0, now it opens from right **/
  top: 0;
  background-color: rgb(0, 0, 0);
  background-color: rgba(0, 0, 0, 0.9);
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content4 {
  position: relative;
  top: 40%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
    z-index: 1000;
}

.overlay4 a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
    z-index: 1000;
}

.overlay4 a:hover,
.overlay4 a:focus {
  color: #f1f1f1;
}

.overlay4 .closebtn4 {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay4 a {
    font-size: 20px;
  }
  .overlay4 .closebtn4 {
    font-size: 40px;
    top: 15px;
    right: 35px;
  }
}

/*my curtainmenu 4*/

/*my curtainmenu 5*/
.overlay5 {
  height: 0%;
  width: 100%;
  position: fixed;
  z-index: 1000;
  bottom: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-y: hidden;
  transition: 0.5s;
}

.overlay-content5 {
  position: relative;
  top:40%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
    z-index: 1000;
}

.overlay5 a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
    z-index: 1000;
}

.overlay5 a:hover, .overlay5 a:focus {
  color: #f1f1f1;
}

.overlay5 .closebtn5 {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay5 {overflow-y: auto;}
  .overlay5 a {font-size: 20px;}
  .overlay5 .closebtn5 {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}
/*my curtainmenu 5*/

/*my curtainmenu 6*/
.overlay6 {
  height: 0%;
  width: 100%;
  position: fixed;
  z-index: 1000;
  bottom: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-y: hidden;
  transition: 0.5s;
}

.overlay-content6 {
  position: relative;
  top:40%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
    z-index: 1000;
}

.overlay6 a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
    z-index: 1000;
}

.overlay6 a:hover, .overlay6 a:focus {
  color: #f1f1f1;
}

.overlay6 .closebtn6 {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay6 {overflow-y: auto;}
  .overlay6 a {font-size: 20px;}
  .overlay6 .closebtn6 {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}
/*my curtainmenu 6*/

/*my media queries*/

@media(min-width:300px) and (max-width: 800px)
{
.menu-item #icon1,#icon2,#icon3,#icon4, #icon5, #icon6
{
position:absolute;
left: 80px;
}
#silman
{
 display: none;
}

.tooltip6 {
  display: none;
  font-size: 20px;
  font-family: arial;
  border: 2px solid white;
 padding-right: 7px;
 padding-top: 5px;
 padding-bottom: 5px;
  padding-left: 7px;
background-color: black;
  color: white;
text-align: center;
transform: rotate(60deg) translateX(164px) translateY(-40px);
  position: absolute;
  z-index: 1000;
}

.menu-item:hover .tooltip6 {
  display:block;
}

}
</style>


<body>

  <!-- ======= Header ======= -->
  <header style="left: 20px;" id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="toknow.png" alt="">
        <span>GnothiSeauton</span>
      </a>

        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section  id="hero" class="hero d-flex align-items-center">

    <div  class="container">
      <div  class="row">
        <div  class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">We offer modern solutions for growing yourself</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Knowing others is wisdom, knowing yourself is enlightenment<br><b> - Lao Tzu</b></h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Press the icons below</span>
                <i class="bi bi-arrow-down"></i>
              </a>
            </div>
          </div>
        </div>
    <!--heeeeeeerrrrrrrrrrreeeeeeeeeeeee-->
      </div>


<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
   <a href="iqtestpage.php">Take a test</a>
  </div>
</div>

<div id="myNav2" class="overlay2">
  <a href="javascript:void(0)" class="closebtn2" onclick="closeNav2()">&times;</a>
  <div class="overlay-content2">
   <a href="personalitypage.php">Take a test</a>
  </div>
</div>

<div id="myNav3" class="overlay3">
  <a href="javascript:void(0)" class="closebtn3" onclick="closeNav3()">&times;</a>
  <div class="overlay-content3">
   <a href="aboutus.php">About Us</a>
  </div>
</div>

<div id="myNav4" class="overlay4">
  <a href="javascript:void(0)" class="closebtn4" onclick="closeNav4()">&times;</a>
  <div class="overlay-content4">
   <a href="multipletrial.php">Take a test</a>
  </div>
</div>

<div id="myNav5" class="overlay5">
  <a href="javascript:void(0)" class="closebtn5" onclick="closeNav5()">&times;</a>
  <div class="overlay-content5">
   <a href="notavailable.php">Play a game</a>
  </div>
</div>

<div id="myNav6" class="overlay6">
  <a href="javascript:void(0)" class="closebtn6" onclick="closeNav6()">&times;</a>
  <div class="overlay-content6">
   <a href="draw.php">Do some Art</a>
  </div>
</div>





<nav class="menu">
  <input checked="checked" class="menu-toggler" type="checkbox" style="position: absolute; left: 0px;">
  <label for="menu-toggler"> <img id="silman" src="standing.png" style="position: absolute; left: 0px; top: 10%; height: 300px; z-index:1000 ;"></label>
  <ul>


 
    <li class="menu-item">
      <span class="tooltip1"><b>About Us</b></span>
        <a id="icon1" class="fas fa-glasses" onclick="openNav3()"></a>
    </li>


    <li class="menu-item">
      <span class="tooltip2"><b>IQ Test</b></span>
      <a id="icon2" class="fas fa-atom" onclick="openNav()"></a>
    </li>

    <li class="menu-item">
      <span class="tooltip3"><b>Personality Test</b></span>
      <a id="icon3" class="fas fa-child" onclick="openNav2()"></a>
    </li>

    <li class="menu-item">
      <span class="tooltip4"><b>Multiple Intelligence</b></span>
      <a id="icon4" class="fas fa-eye" onclick="openNav4()"></a>
    </li>

    <li class="menu-item">
      <span class="tooltip5"><b>Games</b></span>
      <a id="icon5" class ="fas fa-gamepad" onclick="openNav5()"></a>
    </li>

    <li class="menu-item">
      <span class="tooltip6"><b>Psychology</b></span>
      <a id="icon6" class="fas fa-brain" onclick="openNav6()"></a>
    </li>
  </ul>
</nav>

    </div>

  </section><!-- End Hero -->

  



<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
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
