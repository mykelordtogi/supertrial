<!DOCTYPE html>
<html lang="en">
<head>
<title>IQ TEST</title>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<!-- jquery -->
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
<!-- fa icons -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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

<!-- my own style -->
<style>

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-size: 16px;
  font-family: Helvetica, sans-serif;
}
html, body{
    width: 100%;
    height: 100%;
    /* added the following two lines as I realised the output in soloLearn desktop site was so small and cubic */
    min-height: 500px;
    overflow-y: auto;
              font-family: sans-serif;
  background-image: url("assets/img/hero-bg.png");
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: scroll;
}
article{
    position: relative;
    background-color: #FEF9C7;
    width: 100%;
    max-width: 480px;
    min-width: 330px;
    height: 100%;
    margin: 0 auto;
    border: 5px solid pink;
    border-radius: 5px;
}
#fader{
    display: none;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1;
    background-color: white;
    color: darkorange;
    text-align: center;
    padding: 45%;
}
#faderText{
    font-family: sans-serif;
    font-size: 5rem;
    font-weight: bold;
}
.heartDiv{
    position: relative;
    width: 90%;
    max-width: 400px;
    margin: 0 auto;
    text-align: left;
    opacity: 0;
    font-size: 2rem;
    padding: 10px;
}
.heartDiv i.fa-heart{
    color: red;
}
.heartDiv span{
    font-size: 2rem;
    color: #ccc;
    position: absolute;
    right: 0;
}
.board{
    height: 65%;
    width: 95%;
    max-width: 400px;
    max-height: 400px;
    border: 5px solid gainsboro;
    border-radius: 10px;
    margin: 0 auto;
    color: black;
    font-size: 2rem;
    letter-spacing: 0.1rem;
    text-align: center;
    padding: 40px 0;
}
.board #centerText{
    color: black;
    font-size: 3rem;
}
.btnGp{
    position: absolute;
    width: 100%;
    bottom: 0px;
}
.btn{
    width: 100%;
    height: 65px;
    border: none;
    border-radius: 0;
    cursor: pointer;
    color: #eee;
    background-color: dodgerblue;
}
.btn i{
    font-size: 4rem;
}
.btn .text{
    font-family: Arial;
    font-size: 2.2rem;
}
.btn:hover{
    color: #fff;
    background-color: lightblue;
}
.optBtn{
    width: 50%;
}
#btn2, #btn4{
    border-left: 2px solid #ffeeff;
}
#btn1, #btn3{
    border-right: 2px solid #ffeeff;
}
#againBtn, #btn1, #btn2{
    border-bottom: 2px solid #ffeeff;
}
#aboutBtn, #btn3, #btn4{
    border-top: 2px solid #ffeeff;
}
.hidden{
    display: none;
}
.greenAndOrange{
    animation: flashingGreen 0.2s 5 alternate;
}
@keyframes flashingGreen{
    from{background-color: #e65c00;}
    to{background-color: green;}
}
.redAndOrange{
    animation: flashingRed 0.2s 5 alternate;
}
@keyframes flashingRed{
    from{background-color: #e65c00;}
    to{background-color: red;}
}
@media only screen and (max-width: 768px){
    .btn{
        height: 60px;}
    .btn i{
        font-size: 2.5rem;
    }
    .btn .text{
        font-family: Georgia;
        font-size: 1.8rem;
    }
}
@media only screen and (max-width: 480px){
    html, body{
        min-height: 100%;
    }
    .btn{
        height: 55px;}
    .btn i{
        font-size: 2rem;
    }
    .btn .text{
        font-family: Georgia;
        font-size: 1.5rem;
    }
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
          <div id="myinstructions">
<h3><b style="color: dodgerblue;font-size: 30px; ;">Instructions:</b> Read each statement carefully.<br> Find a place where you can sit,relax and focus. <br>Answer wisely.</h3>

</div>
            </div>
          </div>
        </div>
    <!--heeeeeeerrrrrrrrrrreeeeeeeeeeeee-->
      </div>
    </div>

  </section><!-- End Hero -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


<article>
    <div id="fader"><p id="faderText"></p></div>
    <div class="heartDiv">
        <i id="heart1" class="fa fa-heart" aria-hidden="true"></i>
        <i id="heart2" class="fa fa-heart" aria-hidden="true"></i>
        <i id="heart3" class="fa fa-heart" aria-hidden="true"></i>
        <span style="color:black;">0/10</span>
    </div>
    <div class="board">
        <p id="centerText">IQ Test</p>
    </div>
    <div class="btnGp">
        <button class="btn" id="playBtn"><span class="text">PLAY</span></button>
        <button class="btn optBtn hidden" id="btn1"><span class="text">A</span></button><button class="btn optBtn hidden" id="btn2"><span class="text">B</span></button><button class="btn optBtn hidden" id="btn3"><span class="text">C</span></button><button class="btn optBtn hidden" id="btn4"><span class="text">D</span></button>
        <button class="btn hidden" id="againBtn"><span class="text">Try again</span></button>
        
    </div>
</article>

<script>

var x = 0, y = 3, answer = true, score = 90, heart = 3, clicked = false, questionNb = 0, level = 1, quText = "", arrayOptions = [], arrayLevelOne = [0,1,2,3,4,5,6], arrayLevelTwo = [0,1,2,3,4,5,6], arrayLevelThree = [0,1,2,3,4,5,6], arrayLevelFour = [0,1,2,3,4,5,6,7], arrayLevelFive = [0,1,2,3,4,5,6,7], btn1Text, btn2Text, btn3Text, btn4Text;
$(function(){
     btn1Text = $("#btn1 .text"), btn2Text = $("#btn2 .text"), btn3Text = $("#btn3 .text"), btn4Text = $("#btn4 .text");
    $("#playBtn").on("click", function(){
        $("#playBtn").addClass("hidden");
        $(".optBtn").removeClass("hidden");
        $(".heartDiv").css("opacity", "1");
        y = 3;
        intro();
    });
    $("#againBtn").on("click", function(){
        $("#againBtn, #aboutBtn").addClass("hidden");
        $(".optBtn").removeClass("hidden");
        $("#centerText").css("font-size", "2rem");
        //reset values
        $(".heartDiv i.fa-heart").css("color", "red");
        x = 0; y = 3; answer = true; score = 90; heart = 3; clicked = false; questionNb = 0; level = 1, quText = "", arrayOptions = [], arrayLevelOne = [0,1,2,3,4,5,6], arrayLevelTwo = [0,1,2,3,4,5,6], arrayLevelThree = [0,1,2,3,4,5,6], arrayLevelFour = [0,1,2,3,4,5,6,7], arrayLevelFive = [0,1,2,3,4,5,6,7];
        intro();
    });
    $("#aboutBtn").on("click", function(){
        $("#centerText").css("opacity", 0);
        $("#centerText").html(" ");
        $("#centerText").animate({"opacity": 1}, 800);
    });
    $(".optBtn").on("click", function(){
        if(clicked != true){
            checkAnswer(this);
        }
    });
});
function intro(){
    $("#fader").css("display", "block");
    $("#faderText").css("opacity", 0);
    $("#faderText").html(y);
    y--;
    $("#faderText").animate({"opacity": 1}, 800, repeatOrNot);
    function repeatOrNot(){
        if(y != 0){
            intro();
        }else{
            $("#fader").css("display", "none");
            game();
        }
    }
}
function game(){
    $(".optBtn").removeClass("redAndOrange");
    $(".optBtn").removeClass("greenAndOrange"); 
    if(heart == 0){gameOver();}
    else{
    $(".board").css("padding-top", "20px");
    $("#centerText").css("opacity", 0);
    if ($(window).width() <= 768) {
        $("#centerText").css("font-size", "1.7rem");
    }else{
        $("#centerText").css("font-size", "2rem");
    }
    $("#centerText").css("font-family", "Helvetica");
    sendOutQuestion();
    $("#centerText").animate({"opacity": 1}, 800);
    }
}
function sendOutQuestion(){
    questionNb++; 
    if(questionNb > 10){gameOver();}
    else{
        $(".heartDiv span").html( questionNb + "/10");  
        if(level < 1){level = 1;}
        levelSwitch();
        printTheQuestions();
    }
    clicked = false;
}
function levelSwitch(){
    switch(level){
        case 1:
            if(arrayLevelOne.length == 0){level++; levelSwitch();}
            level_one();
        break;   
        case 2:
            if(arrayLevelTwo.length == 0){level++; levelSwitch();}
            level_two();
        break;
        case 3:
            if(arrayLevelThree.length == 0){level++; levelSwitch();}
            level_three();
        break;  
        case 4:
            if(arrayLevelFour.length == 0){level++; levelSwitch();}
            level_four();
        break;   
        case 5:
            //arrayLevelFive's length won't reach zero
            level_five();
        break;   
    }
    //alert("level" + level);
}
function level_one(){
    var randNb = Math.floor(Math.random() * arrayLevelOne.length);
    switch(arrayLevelOne[randNb]){
        case 0:
            $("#centerText").css("font-size", "1.5rem");
            quText = "Which animal does not fit in this group?<br>A. snake<br>B. tiger<br>C. spider<br>D. shark";
            arrayOptions = ["A","B","C","D"];
            answer = "D";
            break;
        case 1:
            $("#centerText").css("font-size", "1.5rem");
            quText = "Lisa is taller than Jade. Nana is taller than Lisa. Who is the tallest?<br>A. Lisa<br>B. Jade<br>C. Nana<br>D. Me";
            arrayOptions = ["A","B","C","D"];
            answer = "C";
            break;
        case 2:
            quText = "Which number should come next in this series?<br> 1, 3, 5, ?";
            arrayOptions = ["6","7","10","9"];
            answer = "7";
            break;
        case 3:
            quText = "Which number should come next in this series?<br>0, 3, 6, 9, ?";
            arrayOptions = ["12","10","15","17"];
            answer = "12";
            break;
        case 4:
            quText = "Fish is to ocean as bird is to... ?";
            arrayOptions = ["earth","sky","sun","hunter"];
            answer = "sky";
            break;
        case 5:
            quText = "If square is 4, how many is triangle?";
            arrayOptions = ["1","2","3","0"];
            answer = "3";
            break;
        case 6:
            $("#centerText").css("font-size", "1.5rem");
            quText = "James is 18th in line at the entrance of San Diego's Comic-Con. He is also 18th from the back of the line. How many people are there in this line?";
            arrayOptions = ["38","36","37","35"];
            answer = "35";
            break;
    }
    arrayLevelOne.splice(randNb, 1);
}
function level_two(){
    var randNb = Math.floor(Math.random() * arrayLevelTwo.length);
    switch(arrayLevelTwo[randNb]){
        case 0:
            quText = "Which is the following number in this list?<br>1, 1, 2, 3, 5, 8, ?";
            arrayOptions = ["9","12","13","40"];
            answer = "13";
            break;
        case 1:
            quText = "Which is the following number in this list?<br>1, 2, 5, 2, ?";
            arrayOptions = ["1","2","3","5"];
            answer = "1";
            break;
        case 2:
            quText = "Which is the following pair in this list?<br>AC, BD, CE, ?";
            arrayOptions = ["FG","HI","DF","BF"];
            answer = "DF";
            break;
        case 3:
            $("#centerText").css("font-size", "1.3rem");
            quText = "Key likes 222 but not 225. He likes 1700 but not 1600. He likes 2 but not 4. Which of the following does he like?<br>A. 9<br>B. 16<br>C. 121<br>D. 7";
            arrayOptions = ["A","B","C","D"];
            answer = "D";
            break;
        case 4:
            quText = "APPLE = 50<br>TOMATO = 84<br>LEMON = 59<br>EGG = ?";
            arrayOptions = ["19","21","53","18"];
            answer = "19";
            break;
        case 5:
            $("#centerText").css("font-size", "1.6rem");
            quText = "LEMON is to NELMO as 25898 is to...?<br>A. 85289<br>B. 85298<br>C. 82598<br>D. 89528";
            arrayOptions = ["A","B","C","D"];
            answer = "A";
            break;
        case 6:
            if ($(window).width() <= 768) {
                $("#centerText").css("font-size", "1.1rem");
            }else{
                $("#centerText").css("font-size", "1.4rem");
            }
            quText = "Sean has more awards than Leo, and Brad has less awards than Sean. Which of the following statements is true?<br>A. Brad has more awards than Leo.<br>B. Brad has as many awards as Leo.<br>C. Brad has less awards than Leo.<br>D. It's impossible to tell whether Brad or Leo has more awards.";
            arrayOptions = ["A","B","C","D"];
            answer = "D";
            break;
    }
    arrayLevelTwo.splice(randNb, 1);
}
function level_three(){
    var randNb = Math.floor(Math.random() * arrayLevelThree.length);
    switch(arrayLevelThree[randNb]){
        case 0:
            $("#centerText").css("font-size", "1.3rem");
            quText = "Anna, who is eighteen years old, is three times as old as her brother Jeff. Fabien was twice as old as Jeff two years ago. How old will Fabien be in two years?";
            arrayOptions = ["10","8","6","12"];
            answer = "12";
            break;
        case 1:
            quText = "Which one of the numbers does not belong in the following series?<br>0, 1, 5, 6, 8, 10, 11";
            arrayOptions = ["5","6","8","10"];
            answer = "8";
            break;
        case 2:
            quText = "Choose the number that is 1/4 of 1/2 of 1/5 of 160?";
            arrayOptions = ["20","8","10","4"];
            answer = "4";
            break;
        case 3:
            quText = "Which is the following number of this list?<br>2, 5, 4, 7, 6, ?";
            arrayOptions = ["3","8","9","10"];
            answer = "9";
            break;
        case 4:
            $("#centerText").css("font-size", "1.5rem");
            quText = "Which is the following number in this list?<br>1, 21, 213, 4213, ?<br>A. 42135<br>B. 54213<br>C. 521<br>D. 2135";
            arrayOptions = ["A","B","C","D"];
            answer = "A";
            break;
        case 5:
            $("#centerText").css("font-size", "2.5rem");
            quText = "3 &nbsp; 8 &nbsp; 5<br>4 &nbsp; 7 &nbsp; 3<br>7 &nbsp; 9 &nbsp; ?";
            arrayOptions = ["3","4","5","2"];
            answer = "2";
            break;
        case 6:
            quText = "Which is the following number in this list?<br>1, 4, 1, 5, 1, 6, 1, ?";
            arrayOptions = ["9","5","12","7"];
            answer = "7";
            break;
    }
    arrayLevelThree.splice(randNb, 1);
}
function level_four(){
    var randNb = Math.floor(Math.random() * arrayLevelFour.length);
    switch(arrayLevelFour[randNb]){
        case 0:
            quText = "Which is the following number in this list?<br>0, 4, 12, 28, ?";
            arrayOptions = ["60","30","56","32"];
            answer = "60";
            break;
        case 1:
            $("#centerText").css("font-size", "1.5rem");
            quText = "At a business meeting of five people, every person shakes hands with every other person one time. How many total handshakes occur?";
            arrayOptions = ["10","12","8","5"];
            answer = "10";
            break;
        case 2:
            quText = "Which is the following number in this list?<br>-1, 2, 1, 3, 4, ?";
            arrayOptions = ["7","5","-2","-1"];
            answer = "7";
            break;
        case 3:
            quText = "1/1, 2/5, 4/9, 8/13, 16/17, ?";
            arrayOptions = ["18/21","20/28","64/26","32/21"];
            answer = "32/21";
            break;
        case 4:
            $("#centerText").css("font-size", "1.5rem");
            quText = "Dave's PIN lock password used to be 1203, then he changed it to 1423 and then to 2543, and finally to 275X. To what number does the letter X correspond to?";
            arrayOptions = ["5","4","9","3"];
            answer = "4";
            break;
        case 5:
            quText = "If you rearrange the letters &quot;WYRANO&quot; you would have the name of a(n):";
            arrayOptions = ["Celebrity","Country","Ocean","City"];
            answer = "Country";
            break;
        case 6:
            $("#centerText").css("font-size", "1.3rem");
            quText = "Anna and Conda agreed to meet at a gym. Conda, who is 9km away from the gym is coming on her moped at 45km/h. How fast does Anna, who is two kilometers away from the gym, has to run to arrive at the same time as her friend?";
            arrayOptions = ["8km/h","10km/h","12km/h","15km/h"];
            answer = "10km/h";
            break;
        case 7:
            quText = "What is the next letter in this sequence?<br>N P O Q P R Q";
            arrayOptions = ["N","P","R","S"];
            answer = "S";
            break;
    }
    arrayLevelFour.splice(randNb, 1);
}
function level_five(){
    var randNb = Math.floor(Math.random() * arrayLevelFive.length);
    switch(arrayLevelFive[randNb]){
        case 0:
            $("#centerText").css("font-size", "2.5rem");
            quText = "SO = 2<br>LO = 3<br> KO= 4<br>OO = ?";
            arrayOptions = ["1","5","2","0"];
            answer = "2";
            break;
        case 1:
            if ($(window).width() <= 768) {
                $("#centerText").css("font-size", "1.1rem");
            }else{
                $("#centerText").css("font-size", "1.4rem");
            }
            quText = "Jane's cake is missing so she interrogates her four kids about it. Julie says David would not have eaten it unless Sophia ate first. Sophia says either Julie or herself ate it. David says he ate it and Sophia didn't. John says Sophia ate it. Only one kid is lying. Which of the following statement is correct?<br>A. David lied, Sophia ate it<br>B. Sophia lied, Sophia ate it<br>C. Julie lied, David ate it<br>D. John lied, David ate it.";
            arrayOptions = ["A","B","C","D"];
            answer = "A";
            break;
        case 2:
            quText = "2 &nbsp; 11 &nbsp; 1<br>4 &nbsp; 7 &nbsp; 11<br>2 &nbsp; 12 &nbsp; 2<br>4 &nbsp; 10 &nbsp; ?";
            arrayOptions = ["2","14","8","4"];
            answer = "2";
            break;
        case 3:
            quText = "In four years, Tim will be twice Emma's age. Two years ago, Tim was five times Emma's age. How old is Emma now?";
            arrayOptions = ["4","8","2","5"];
            answer = "4";
            break;
        case 4:
            quText = "Counting from 1 to 56, how many 2 will you encounter?";
            arrayOptions = ["13","17","16","15"];
            answer = "16";
            break;
        case 5:
            quText = "Choose the most fitting number to add to this list:<br>510, 1420, 2060, 3303, ?";
            arrayOptions = ["4281","4851","3333","4312"];
            answer = "4312";
            break;
        case 6:
            if ($(window).width() <= 768) {
                $("#centerText").css("font-size", "1.1rem");
            }else{
                $("#centerText").css("font-size", "1.4rem");
            }
            quText = "Kind-hearted Elsa wants to help a shepherd and his 24 sheeps cross a small river. Her boat can ship up to 4 sheeps at a time. But the sherperd is unusually strong and can carry 3 sheeps on his back while only taking the place of one (the boat won't sink). What is the minimum amount of trips Elsa needs to transfer the sherperd and all the sheeps to the other side?";
            arrayOptions = ["5","4","3","6"];
            answer = "4";
            break;
        case 7:
            if ($(window).width() <= 768) {
                $("#centerText").css("font-size", "1.1rem");
            }else{
                $("#centerText").css("font-size", "1.4rem");
            }
            quText = "A box contains two coins. One is heads on both side and the other heads on one side and tails on the other. A player picks a coin tosses it in the air and catches it back upon the palm of one hand. If the result is heads, what is the probability that the other face is also heads?";
            arrayOptions = ["1/2","3/4","2/3","1/4"];
            answer = "1/2";
            break;
    }
    arrayLevelFive.splice(randNb, 1);
}
function printTheQuestions(){
    $("#centerText").html(quText);
    var optTextArr = [], randNb = 0, i = 0, len = arrayOptions.length;
    for(; i < len;){
        randNb = Math.floor(Math.random() * arrayOptions.length);
        optTextArr[i] = arrayOptions[randNb];
        arrayOptions.splice(randNb, 1);
        i++;
    }
    //alert(optTextArr.length);
    btn1Text.html(optTextArr[0]);
    btn2Text.html(optTextArr[1]);
    btn3Text.html(optTextArr[2]);
    btn4Text.html(optTextArr[3]);
}
function checkAnswer(that){
    clicked = true;
    var playerAnswer = $(that).text();
    if(playerAnswer == answer){
        level++;
        if(level>= 5){level = 5;}
        //wins 4pts for lvl1 12pts for lvl5 => Max = 4 + 6 + 8 + 10 + 12*6 + 90 = 190
        score = score + level*2+2;
        $(that).addClass("greenAndOrange");
    }else{
        //lose 10pts for lvl1 2pts for lvl5 => Min = 90 - 10*3 = 60
        score = score - (12 - level*2);
        $(that).addClass("redAndOrange");
        $(".heartDiv .fa-heart:nth-child(" + heart + ")").css("color", "lightgrey");
        heart--;
    }
    setTimeout(game, 1200);
}
function gameOver(){
    $(".optBtn").addClass("hidden");
    if ($(window).width() <= 768) {
        $("#centerText").css("font-size", "1.1rem");
    }else{
        $("#centerText").css("font-size", "1.4rem");
    }
    $("#centerText").css("font-family", "Georgia");
    if(heart){
        $("#centerText").html("Congratulations! <br>You have reached the end of the IQ test.");
    }else{
        $("#centerText").html("Game Over!");
    }
    $("#centerText").append("<br>Your IQ score is: <br>" + score + "<br>");
    scoreMeaning();
    $("#againBtn, #aboutBtn").removeClass("hidden");
}
function scoreMeaning(){
    if(score >= 150){
        $("#centerText").append("Why is such a genius wasting their time on my lowly test? You should join the NASA or Silicon Valley or go on a quest to solve the world's biggest issues!");
    }else if(score >= 130){
        $("#centerText").append("You are what scientists call a near-genius. Like a quarter of an Einstein. But as Einstein said: &quot;Genius is 1% talent and 99% hard work.&quot; So keep up the good work!");
    }else if(score >= 105){
        $("#centerText").append("Have you ever thought that you were different from those around you, that you were naturally destined for greater things? Well, I hate to burst the bubble, but...");
    }else{
        $("#centerText").append("I cannot even begin to fathom how difficult life must have been for you so far. But do not give up! After the rain, comes the stor... I mean, the sunshine! ^^&quot;");
    }
}
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

</body>
</html>