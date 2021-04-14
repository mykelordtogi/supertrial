<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Typing game</title>
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>

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

<style type="text/css">
	* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
}

body {
  font-family: sans-serif;
  background-image: url("assets/img/hero-bg.png");
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: scroll;
}

.wrapper {
  position: absolute;
  top: 15%;
  left: 30%;
	max-width: 600px;
	margin: 0 auto;
	width: 100%;
	text-align: center;
	padding: 2%;
	background-color: white;
	height: 500px;
  border: solid 3px black;

}

h1 {
    color: #ecf0f1;
}

h1 + p {
	margin-bottom: 5%;
    color: #3498db;
}

.scoreWrap 
{
  position: absolute;
  top: 2px;
}
.timeWrap {float: right;}

.outerWrap:after {
	content: "";
	display: block;
	clear: both;
}

.bg {
	background-color: #04AF71;
}

button {
   border: none;
  background-color: Aqua;
  box-shadow: 0px 5px 0px 0px #CE4646;
  outline: none;
  border-radius: 5px;
  padding: 10px 15px;
  font-size: 22px;
  text-decoration: none;
  margin: 20px;
  color: #fff;
  position: relative;
  display: inline-block;
  cursor: pointer;
}

button:active {
  transform: translate(0px, 5px);
  -webkit-transform: translate(0px, 5px);
  box-shadow: 0px 1px 0px 0px;
}

.scoreWrap p, .scoreWrap span, .timeWrap p, .timeWrap span {
    font-size: 30px;
    color: #FF7373;
}

.wordsWrap {
	margin-top: 140px;
}

.words span{

    font-size: 25px;
    letter-spacing: 1px;
    color: black;
    font-weight: bold;
}










</style>



<body>

<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

<!--https://practice4you.herokuapp.com/makeithappenINDEX.php-->

      <a href="https://practice4you.herokuapp.com/supertrial_mobile/index_mobile.php" class="logo d-flex align-items-center">
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
          <div id="myinstructions">
<h3><b style="color: dodgerblue;"></h3>
<br>
<h4><b style="color: mediumseagreen;"></h4>
<h4><b style="color: sandybrown;"></h4>
<h4><b style="color: indianred;"></h4>
</div>
            </div>
          </div>
        </div>
    <!--heeeeeeerrrrrrrrrrreeeeeeeeeeeee-->
      </div>
    </div>

  </section><!-- End Hero -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>




	<div class="wrapper">
		<h1 style="color: black;"> </h1>
		<p style="position: absolute;top: 20%;left: 1%;">Type and finish the whole sentence as you can until time runs out!<br><b>Get 25 points or more to go to the next page</b>.</p>
		<button style="color: black;position: absolute;top: 80%;left: 38%;">START</button>
		<div class="outerWrap">
			<div class="scoreWrap">
				<p >Score</p>
				<span style="position: absolute; top: 30px; left:27px;" class="score">0</span>
			</div>
			<div class="timeWrap">
				<p style="position: absolute;top: 80%;left: 75%;"><a href ="http://localhost/webFinals/web1_project/puzzle2/puzzlegame.html" style="text-decoration: none; color: #FF7373">Time left</a></p>
				<span style="position: absolute;top: 86%;left: 80%;" class="time">300</span>
			</div>
		</div>
		<div class="wordsWrap">
			<p class="words"></p>
		</div>
	</div>




</body>




<script type="text/javascript">
	var temp = document.querySelector('.time');
 	var button = document.querySelector("button");
 	var words = document.querySelector(".words");
 	var timerDiv = document.querySelector(".time");
 	var scoreDiv = document.querySelector(".score");
 	var points = 0;
 	var spans;
 	var typed;
 	var seconds = 300;
  var spark = new Audio("http://k003.kiwi6.com/hotlink/qdpr7bioht/spark.mp3");

 	function countdown() {
 		points = 0;
 		var timer = setInterval(function(){
 			button.disabled = true;
    		seconds--;
    		temp.innerHTML = seconds;

    		if (seconds === 0 && points >=25) {
    			alert("Congratulations! Your score is " + points+" Proceed to the next page.");
          window.location.href = "http://localhost/webFinals/web1_project/puzzle2/puzzlegame.html";
    			scoreDiv.innerHTML = "0";
    			words.innerHTML = "";
    			button.disabled = false;
    			clearInterval(timer);
    			seconds = 300;
    			timerDiv.innerHTML = "300";
    			button.disabled = false;	
    		}

      if (seconds === 0 && points< 25) {
          alert("Game over! Your score is " + points);
          scoreDiv.innerHTML = "0";
          words.innerHTML = "";
          button.disabled = false;
          clearInterval(timer);
          seconds = 300;
          timerDiv.innerHTML = "300";
          button.disabled = false;  
        }

 		}, 1000);
  	}

  	function random() {
  		words.innerHTML = "";
  		var random = Math.floor(Math.random() * (101 - 1 + 1)) + 0;
  		var wordArray = list[random].split("");
  		for (var i = 0; i < wordArray.length; i++) { //building the words with spans around the letters 1943
  			var span = document.createElement("span");
  			span.classList.add("span");
  			span.innerHTML = wordArray[i];
  			words.appendChild(span);
  		}
  		spans = document.querySelectorAll(".span");
  	}

const list = ['EVERY MOMENT IS A FRESH BEGINNING','LOVE FOR ALL AND HATRED FOR NONE','CHANGE THE WORLD BY BEING YOURSELF','NEVER REGRET ANYTHING THAT MADE YOU SMILE'
,'ASPIRE TO INSPIRE BEFORE WE EXPIRE','WHATEVER YOU DO DO IT WELL','TOUGH TIMES NEVER LAST BUT TOUGH PEOPLE DO','PROBLEMS ARE NOT STOP SIGNS THEY ARE GUIDELINES','ONE DAY THE PEOPLE THAT DONT EVEN BELIEVE IN YOU WILL TELL EVERYONE HOW THEY MET YOU','HAVE ENOUGH COURAGE TO START AND ENOUGH HEART TO FINISH'

,'HATE COMES FROM INTIMIDATION LOVE COMES FROM APPRECIATION','YOU ARE GOOD AND BEAUTIFUL','DETERMINE YOUR PRIORITIES AND FOCUS ON THEM','I DONT NEED IT TO BE EASY I NEED IT TO BE WORTH IT'
,'YOUR IMPERFECTIONS ARE BLESSING','TRY TO BE A RAINBOW IN SOMEONES CLOUD','WANTING TO BE SOMEONE ELSE IS A WASTE OF WHO YOU ARE','AND STILL I RISE','THE TIME IS ALWAYS RIGHT TO DO WHAT IS RIGHT','TURN YOUR WOUNDS INTO WISDOM'

,'HAPPINESS DEPENDS UPON OURSELVES','IT HURTS BECAUSE IT MATTERED','THE MEANING OF LIFE IS TO GIVE LIFE MEANING','WHEN WORDS FAIL MUSIC SPEAKS','I HAVE NOTHING TO LOSE BUT SOMETHING TO GAIN','LOVE','GO','BEGIN','LET GO','BREATHE'

,'SLOW DOWN','LET IT BE','GO FOR IT','I LOVE YOU','KEEP GOING','CHOOSE JOY','ENJOY TODAY','CHOOSE HAPPY','KEEP IT COOL','TAKE IT EASY'

,'BE IN THE NOW','LIVE THE MOMENT','CHOOSE TO SHINE','NO PAIN NO GAIN','DO IT WITH LOVE','LOVE CONQUERS ALL','KEEP YOUR CHIN UP','FOLLOW YOUR HEART','DONT RUSH THINGS','YOU ONLY LIVE ONCE'

,'ENJOY THE LITTLE THINGS','THE BEST IS YET TO COME','BETTER THINGS ARE COMING','COLLECT MOMENTS  NOT THINGS','FEEL THE FEAR AND DO IT ANYWAY','TAKE THE RISK OR LOSE THE CHANCE','PROVE THEM WRONG','MY LIFE IS MY MESSAGE','BROKEN CRAYONS STILL COLOR','YOU ARE DOING GREAT'

,'YOU MATTER','YOU ARE LOVED','ACTUALLY YOU CAN DO IT','BE HAPPY BE BRIGHT BE YOU','EVERY DAY IS A CHANCE','YOU ARE SOMEBODYS REASON TO SMILE','SMILE BEAUTIFUL FACE','HAPPINESS LOOKS GORGEOUS ON YOU','YOU ARE CAPABLE OF AMAZING THINGS','YOU ARE STRONGER THAN YOU THINK YOU ARE'

,'YOU MAKE MISTAKES MISTAKES DONT MAKE YOU','START EVERY DAY OFF WITH A SMILE AND GET IT OVER WITH','IF YOU FEEL LIKE GIVING UP LOOK BACK AT HOW FAR YOUVE COME','DO NOT BE DISCOURAGE DO NOT BE AFRAID WE ARE WITH YOU','IT IS BETTER TO BE HATED FOR WHAT YOU ARE THAN TO BE LOVED FOR WHAT YOU ARE NOT','I FELL IN LOVE THE WAY YOU FALL ASLEEP SLOWLY AND THEN ALL AT ONCE'
,'YOU DONT LOVE SOMEONE BECAUSE THEYRE PERFECT YOU LOVE THEM IN SPITE OF THE FACT THAT THEYRE NOT','IF I KNOW WHAT LOVE IS IT IS BECAUSE OF YOU','I LOVE YOU NOT JUST BECAUSE OF WHO YOU ARE BUT BECAUSE OF WHO I AM WHEN I AM WITH YOU','WE ARE SHAPED AND FASHIONED BY WHAT WE LOVE'

,'WHEN WE ARE IN LOVE WE SEEM TO OURSELVES QUITE DIFFERENT FROM WHAT WE WERE BEFORE','THERE IS ONLY ONE HAPPINESS IN THIS LIFE TO LOVE AND BE LOVED','YOU KNOW ITS LOVE WHEN ALL YOU WANT IS THAT PERSON TO BE HAPPY EVEN IF YOURE NOT PART OF THEIR HAPPINESS','AT THE TOUCH OF LOVE EVERYONE BECOMES A POET','IF I HAD A FLOWER FOR EVERY TIME I THOUGHT OF YOU I COULD WALK THROUGH MY GARDEN FOREVER','THE BEST AND MOST BEAUTIFUL THINGS IN THIS WORLD CANNOT BE SEEN OR EVEN HEARD BUT MUST BE FELT WITH THE HEART','THE ART OF LOVE IS LARGELY THE ART OF PERSISTENCE','LOVE DOES NOT DOMINATE IT CULTIVATES','WE ARE MOST ALIVE WHEN WERE IN LOVE','GIVE YOUR STRESS WINGS AND LET IT FLY AWAY'

,'SOMETIMES THE MOST PRODUCTIVE THING YOU CAN DO IS RELAX','YOU DONT ALWAYS NEED A PLAN SOMETIMES YOU JUST NEED TO BREATHE AND TRUST THEN LET GO AND SEE WHAT HAPPENS'
,'STRIVE NOT TO BE A SUCCES BUT RATHER TO BE OF VALUE','LIFE IS NOT ABOUT GETTING AND HAVING BUT IT IS ABOUT GIVING AND BEING','THE ONLY PERSON YOU ARE DESTINED TO BECOME IS THE PERSON YOU DECIDE TO BE','EVERYTHING HAS BEAUTY BUT NOT EVERYONE CAN SEE','HAPPINESS IS NOT SOMETHING READYMADE IT COMES FROM YOUR OWN ACTION','TOO MANY OF US ARE NOT LIVING OUR DREAMS BECAUSE WE ARE LIVING OUR FEARS',' IF YOU WANT TO LIFT YOURSELF UP THEN LIFT UP SOMEONE ELSE','I DID NOT FAIL THE TEST I JUST FOUND HUNDRED WAYS TO DO IT WRONG'

];


  	button.addEventListener("click", function(e){
  		countdown();
  		random();
  		button.disabled = true;	
  	});


  	function typing(e) {
  			typed = String.fromCharCode(e.which);
  			for (var i = 0; i < spans.length; i++) {
  				if (spans[i].innerHTML === typed) { // if typed letter is the one from the word
  					if (spans[i].classList.contains("bg")) { // if it already has class with the bacground color then check the next one
  						continue;
  					} else if (spans[i].classList.contains("bg") === false && spans[i-1] === undefined || spans[i-1].classList.contains("bg") !== false ) { // if it dont have class, if it is not first letter or if the letter before it dont have class (this is done to avoid marking the letters who are not in order for being checked, for example if you have two "A"s so to avoid marking both of them if the first one is at the index 0 and second at index 5 for example)
  						spans[i].classList.add("bg");
  						break;
  					}
  				}
  			}
  			var checker = 0;
  			for (var j = 0; j < spans.length; j++) { //checking if all the letters are typed
  				if (spans[j].className === "span bg") {
  					checker++;
  				}
  				if (checker === spans.length) 

          { // if so, animate the words with animate.css class
            spark.pause();
					  spark.currentTime = 0;
            spark.play();
  					words.classList.add("animated");
  					words.classList.add("fadeOut");
  					points++; // increment the points
  					scoreDiv.innerHTML = points; //add points to the points div
  					document.removeEventListener("keydown", typing, false);
  					setTimeout(function(){
  						words.className = "words"; // restart the classes
  						random(); // give another word
  						document.addEventListener("keydown", typing, false);
  					}, 400);

  				}

  			}
  	}

  	document.addEventListener("keydown", typing, false);
</script>

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


</html>