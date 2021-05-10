<?php


?>


<!DOCTYPE html>
<html>
<head>
	<title>Personality Page</title>

<style type="text/css">body {
  font-family: sans-serif;

  background-image: url("assets/img/hero-bg.png");
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: scroll;
}
h2 {
  margin: 5px 0;
}
#wrapper {
  width: 1000px;
  height: 2000px;
  margin: 0 auto;
  background:bisque;
  padding: 10px 15px;
  border-radius: 10px;
  border: 4px solid aliceblue;
}
input {
  margin: 5px 10px;
}
button {
  font-size: 18px;
  padding: 10px;
  margin: 20px 0;
  color: white;
  border: 0;
  border-radius: 10px;
  border-bottom: 3px solid #333;
}
#submit {

  position: relative;
  top: 20px;
}
#reset {
 
  position: relative;
  top: 20px;
}

a
{

  text-decoration: none;
}

a:visited{

  color: white;
}


#answer {
  border: 1px dashed #ccc;
  background: aquamarine;
 position: relative;
 top: 50px;
  padding: 100px;
}
		#reset a:visited {
  color: black;

}
	
	</style>
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
                    <div id="myinstructions">
<h3><b style="color: dodgerblue;">Instructions:</b> Read each statement carefully.<br> Choose one of the three buttons for each statement indicating how well that statement describes you.</h3>
<br>
<h4><b style="color: mediumseagreen;">Accurate:</b> Statement describes you exactly</h4>
<h4><b style="color: sandybrown;">Neutral:</b> Statement describes you somewhat</h4>
<h4><b style="color: indianred;">Inaccurate:</b> Statement does not describe you at all</h4>
</div>
            </div>
          </div>
        </div>
    <!--heeeeeeerrrrrrrrrrreeeeeeeeeeeee-->
      </div>
    </div>

  </section><!-- End Hero -->



<div id="wrapper">
  <h1>What kind of person are you?</h1>
  <p>Take this questionnaire to find out!</p>
  
  <form id="quiz">
    <!-- Question 1 -->
    <h2>I make friends easily.</h2>
    <!-- Here are the choices for the first question. Each input tag must have the same name. For this question, the name is q1. -->
    <!-- The value is which answer the choice corresponds to. -->
    <label><input type="radio" name="q1" value="c1">
  Accurate
    </label>
    <label><input type="radio" name="q1" value="c2">
Neutral
    </label>
    <label><input type="radio" name="q1" value="c3">
      Inaccurate
    </label><br />
    

    <!-- Question 2 -->
    <h2>I have a vivid imagination.</h2>
    <!-- Here are the choices for the second question. Notice how each input tag has the same name (q2), but a different name than the previous question. -->
    <label><input type="radio" name="q2" value="c1">
    Accurate
    </label>
    <label><input type="radio" name="q2" value="c2">
    Neutral
    </label>
    <label><input type="radio" name="q2" value="c3">
    Inaccurate
    </label><br />
 
    
    <!-- Question 3 -->
    <h2>I worry about things.</h2>
    <!-- Choices for the third question -->
    <label><input type="radio" name="q3" value="c1">
    Accurate
    </label>
    <label><input type="radio" name="q3" value="c2">
    Neutral
    </label>
    <label><input type="radio" name="q3" value="c3">
    Inaccurate
    </label><br />
  
    
    <!-- Question 4 -->
    <h2>I love large parties. </h2>
    <!-- Choices for the fourth question -->
    <label><input type="radio" name="q4" value="c1">
    Accurate
    </label>
    <label><input type="radio" name="q4" value="c2">
    Neutral
    </label>
    <label><input type="radio" name="q4" value="c3">
    Inaccurate
    </label><br />

    <h2>I believe in the importance of art. </h2>
    <!-- Choices for the fourth question -->
    <label><input type="radio" name="q5" value="c1">
    Accurate
    </label>
    <label><input type="radio" name="q5" value="c2">
    Neutral
    </label>
    <label><input type="radio" name="q5" value="c3">
    Inaccurate
    </label><br />

    <h2>I get angry easily. </h2>
    <!-- Choices for the fourth question -->
    <label><input type="radio" name="q6" value="c1">
    Accurate
    </label>
    <label><input type="radio" name="q6" value="c2">
    Neutral
    </label>
    <label><input type="radio" name="q6" value="c3">
    Inaccurate
    </label><br />

    <h2>I take charge.</h2>
    <!-- Choices for the fourth question -->
    <label><input type="radio" name="q7" value="c1">
    Accurate
    </label>
    <label><input type="radio" name="q7" value="c2">
    Neutral
    </label>
    <label><input type="radio" name="q7" value="c3">
    Inaccurate
    </label><br />

    <h2>I experience my emotions intensely.</h2>
    <!-- Choices for the fourth question -->
    <label><input type="radio" name="q8" value="c1">
    Accurate
    </label>
    <label><input type="radio" name="q8" value="c2">
    Neutral
    </label>
    <label><input type="radio" name="q8" value="c3">
    Inaccurate
    </label><br />

    <h2>I often feel blue.</h2>
    <!-- Choices for the fourth question -->
    <label><input type="radio" name="q9" value="c1">
    Accurate
    </label>
    <label><input type="radio" name="q9" value="c2">
    Neutral
    </label>
    <label><input type="radio" name="q9" value="c3">
    Inaccurate
    </label><br />

    
    <h2>I am always busy.</h2>
    <!-- Choices for the fourth question -->
    <label><input type="radio" name="q10" value="c1">
    Accurate
    </label>
    <label><input type="radio" name="q10" value="c2">
    Neutral
    </label>
    <label><input type="radio" name="q10" value="c3">
    Inaccurate
    </label><br />

    <h2>I prefer variety to routine.</h2>
    <!-- Choices for the fourth question -->
    <label><input type="radio" name="q11" value="c1">
    Accurate
    </label>
    <label><input type="radio" name="q11" value="c2">
    Neutral
    </label>
    <label><input type="radio" name="q11" value="c3">
    Inaccurate
    </label><br />

    <h2>I am easily intimidated.</h2>
    <!-- Choices for the fourth question -->
    <label><input type="radio" name="q12" value="c1">
    Accurate
    </label>
    <label><input type="radio" name="q12" value="c2">
    Neutral
    </label>
    <label><input type="radio" name="q12" value="c3">
    Inaccurate
    </label><br />

    <h2>I love excitement.</h2>
    <!-- Choices for the fourth question -->
    <label><input type="radio" name="q13" value="c1">
    Accurate
    </label>
    <label><input type="radio" name="q13" value="c2">
    Neutral
    </label>
    <label><input type="radio" name="q13" value="c3">
    Inaccurate
    </label><br />

    <h2>I like to solve complex problems. </h2>
    <!-- Choices for the fourth question -->
    <label><input type="radio" name="q14" value="c1">
    Accurate
    </label>
    <label><input type="radio" name="q14" value="c2">
    Neutral
    </label>
    <label><input type="radio" name="q14" value="c3">
    Inaccurate
    </label><br />

    <h2>I often eat too much. </h2>
    <!-- Choices for the fourth question -->
    <label><input type="radio" name="q15" value="c1">
    Accurate
    </label>
    <label><input type="radio" name="q15" value="c2">
    Neutral
    </label>
    <label><input type="radio" name="q15" value="c3">
    Inaccurate
    </label><br />

    <h2>I radiate joy.</h2>
    <!-- Choices for the fourth question -->
    <label><input type="radio" name="q16" value="c1">
    Accurate
    </label>
    <label><input type="radio" name="q16" value="c2">
    Neutral
    </label>
    <label><input type="radio" name="q16" value="c3">
    Inaccurate
    </label><br />

    <h2>I try to follow the rules. </h2>
    <!-- Choices for the fourth question -->
    <label><input type="radio" name="q17" value="c1">
    Accurate
    </label>
    <label><input type="radio" name="q17" value="c2">
    Neutral
    </label>
    <label><input type="radio" name="q17" value="c3">
    Inaccurate
    </label><br />

    <h2>I panic easily. </h2>
    <!-- Choices for the fourth question -->
    <label><input type="radio" name="q18" value="c1">
    Accurate
    </label>
    <label><input type="radio" name="q18" value="c2">
    Neutral
    </label>
    <label><input type="radio" name="q18" value="c3">
    Inaccurate
    </label><br />

    <h2>I trust others. </h2>
    <!-- Choices for the fourth question -->
    <label><input type="radio" name="q19" value="c1">
    Accurate
    </label>
    <label><input type="radio" name="q19" value="c2">
    Neutral
    </label>
    <label><input type="radio" name="q19" value="c3">
    Inaccurate
    </label><br />

    
    <h2>I make people feel welcome.</h2>
    <!-- Choices for the fourth question -->
    <label><input type="radio" name="q20" value="c1">
    Accurate
    </label>
    <label><input type="radio" name="q20" value="c2">
    Neutral
    </label>
    <label><input type="radio" name="q20" value="c3">
    Inaccurate
    </label><br />
    
    
    
  </form>


  <button type="submit"  class="btn btn-success" id="submit" onclick="tabulateAnswers();">Submit Your Answers</button>
  <button type="reset" class="btn btn-danger" id="reset" onclick="resetAnswer();"><a href="personalitypage.php">Reset</a></button>

   <div id="answer">Your result will show up here.</div>

</div>

 

<script type="text/javascript">// function to calculate the result of the survey
function tabulateAnswers() {
  // initialize variables for each choice's score
  // If you add more choices and outcomes, you must add another variable here.
  var c1score = 0;
  var c2score = 0;
  var c3score = 0;
  var c4score = 0;
  
  // get a list of the radio inputs on the page
  var choices = document.getElementsByTagName('input');
  // loop through all the radio inputs
  for (i=0; i<choices.length; i++) {
    // if the radio is checked..
    if (choices[i].checked) {
      // add 1 to that choice's score
      if (choices[i].value == 'c1') {
        c1score = c1score + 1;
      }
      if (choices[i].value == 'c2') {
        c2score = c2score + 1;
      }
      if (choices[i].value == 'c3') {
        c3score = c3score + 1;
      }
   
      // If you add more choices and outcomes, you must add another if statement below.
    }
  }
  
  // Find out which choice got the highest score.
  // If you add more choices and outcomes, you must add the variable here.
  var maxscore = Math.max(c1score,c2score,c3score);
  
  // Display answer corresponding to that choice
  var answerbox = document.getElementById('answer');


  if (c1score == maxscore) { // If user chooses the first choice the most, this outcome will be displayed.
    answerbox.innerHTML = "Others see you as fresh, lively, charming, amusing, practical, and always interesting; someone who's constantly in the center of attention, but sufficiently well-balanced not to let it go to their head. They also see you as kind, considerate, and understanding; someone who'll always cheer them up and help them out.";
  }
  if (c2score == maxscore) { // If user chooses the second choice the most, this outcome will be displayed.
    answerbox.innerHTML = "You are a down-to-earth sort of person who prefers real life over fantasy or abstract ideas. You tend to like things simple, clear and straightforward. A traditionalist at heart, you look to the past for guidance in most decisions. You spend your time living life, not analyzing it, and you tend to put your energy into projects that have a tangible result.";
  }
  if (c3score == maxscore) { // If user chooses the third choice the most, this outcome will be displayed.
    answerbox.innerHTML = "Others see you as sensible, cautious, careful & practical. They see you as clever, gifted, or talented, but modest. Not a person who makes friends too quickly or easily, but someone who's extremely loyal to friends you do make and who expects the same loyalty in return. Those who really get to know you realize it takes a lot to shake your trust in your friends, but equally that it takes you a long time to get over if that trust is ever broken.";
  }
  // If you add more choices, you must add another response below.
}

// program the reset button
function resetAnswer() {
  var answerbox = document.getElementById('answer');
  answerbox.innerHTML = "Your result will show up here!";
}

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
