<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<link href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="sweetalert/css/sweetalert2.css">
    <link rel="stylesheet" type="text/css" href="sweetalert/css/style1.css">


</head>

<style type="text/css">
	
    body{
        background-color: white;
    }


#myquestions,#myinstructions
{
			width: 500px;
background-color: gainsboro;
}
h2{
    display: none;
}

#mult1
{
    display: none;
}

#maindiv
{ display: none;
    position: fixed;
    bottom: 25px;
    left: 750px;

    height: 520px;
    width: 430px;
    border: 3px solid black ;
    background-color:white;
}


.bar1
{ position: absolute;
    bottom: 0;
    left: 25px;
}

.bar2
{ position: absolute;
    bottom: 0;
    left: 75px;
}

.bar3
{ position: absolute;
    bottom: 0;
    left: 125px;
}
.bar4
{ position: absolute;
    bottom: 0;
    left: 175px;
}
.bar5
{ position: absolute;
    bottom: 0;
    left: 225px;
}
.bar6
{ position: absolute;
    bottom: 0;
    left: 275px;
}
.bar7
{ position: absolute;
    bottom: 0;
    left: 325px;
}
.bar8
{ position: absolute;
    bottom: 0;
    left: 375px;
}


</style>

<body>




<div id="myinstructions">
<h3><b>Instructions:</b> Read each statement carefully. Choose one of the five buttons for each statement indicating how well that statement describes you.</h3>

<h4><b>Accurate:</b>Statement describes you exactly</h4>
<h4><b>Neutral:</b>Statement describes you somewhat</h4>
<h4><b>Inaccurate:</b>Statement does not describe you at all</h4>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<div id="myquestions">
<p>1. I enjoy reading books.</p>
<label><input id="q1" type="radio" name="group1" data-score1="100">Accurate</label>
<label><input id="q1" type="radio" name="group1" data-score1="50">Neutral</label>
<label><input id="q1" type="radio" name="group1" data-score1="0">Inaccurate</label>


<p>2. I have always liked math and science classes best and I do well in them.</p>
<label><input  id="q2" type="radio" name="group2" data-score2="100">Accurate</label>
<label><input  id="q2" type="radio" name="group2" data-score2="50">Neutral</label>
<label><input  id="q2" type="radio" name="group2" data-score2="0">Inaccurate</label>


<p>3. I enjoy drawing, painting and doodling.</p>
<label><input id="q3" type="radio" name="group3" data-score3="100">Accurate</label>
<label><input id="q3" type="radio" name="group3" data-score3="50">Neutral</label>
<label><input id="q3" type="radio" name="group3" data-score3="0">Inaccurate</label>


<p>4. I think I am well coordinated.</p>
<label><input id="q4" type="radio" name="group4" data-score4="100">Accurate</label>
<label><input id="q4" type="radio" name="group4" data-score4="50">Neutral</label>
<label><input id="q4" type="radio" name="group4" data-score4="0">Inaccurate</label>


<p>5. I have a pleasant singing voice and I like to sing.</p>
<label><input id="q5" type="radio" name="group5" data-score5="100">Accurate</label>
<label><input id="q5" type="radio" name="group5" data-score5="50">Neutral</label>
<label><input id="q5" type="radio" name="group5" data-score5="0">Inaccurate</label>


<p>6. I love being outdoors and enjoy spending my free time outside.</p>
<label><input id="q6" type="radio" name="group6" data-score6="100">Accurate</label>
<label><input id="q6" type="radio" name="group6" data-score6="50">Neutral</label>
<label><input id="q6" type="radio" name="group6" data-score6="0">Inaccurate</label>


<p>7. I have some important goals for my life that I think about often.</p>
<label><input id="q7" type="radio" name="group7" data-score7="100">Accurate</label>
<label><input id="q7" type="radio" name="group7" data-score7="50">Neutral</label>
<label><input id="q7" type="radio" name="group7" data-score7="0">Inaccurate</label>


<p>8. I love animals and I spend a lot of time with them.</p>
<label><input id="q8" type="radio" name="group8" data-score8="100">Accurate</label>
<label><input id="q8" type="radio" name="group8" data-score8="50">Neutral</label>
<label><input id="q8" type="radio" name="group8" data-score8="0">Inaccurate</label>


<p>9. I like English, social studies and history better than math and science.</p>
<label><input id="q9" type="radio" name="group9" data-score1="100">Accurate</label>
<label><input id="q9" type="radio" name="group9" data-score1="50">Neutral</label>
<label><input id="q9" type="radio" name="group9" data-score1="0">Inaccurate</label>


<p>10. I like to figure out how to take apart and put back together things  like toys and puzzles.</p>
<label><input id="q10" type="radio" name="group10" data-score2="100">Accurate</label>
<label><input id="q10" type="radio" name="group10" data-score2="50">Neutral</label>
<label><input id="q10"  type="radio" name="group10" data-score2="0">Inaccurate</label>


<p>11.  I try to look for patterns and regularities in things, such as every third  stair on the staircase has a notch in it.</p>
<label><input id="q11" type="radio" name="group11" data-score3="100">Accurate</label>
<label><input id="q11" type="radio" name="group11" data-score3="50">Neutral</label>
<label><input id="q11" type="radio" name="group11" data-score3="0">Inaccurate</label>


<p>12. I have good skills in one or more sports and learn new sports quickly.</p>
<label><input id="q12" type="radio" name="group12" data-score4="100">Accurate</label>
<label><input id="q12" type="radio" name="group12" data-score4="50">Neutral</label>
<label><input id="q12" type="radio" name="group12" data-score4="0">Inaccurate</label>


<p>13. I frequently listen to music because I enjoy it so much.</p>
<label><input id="q13" type="radio" name="group13" data-score5="100">Accurate</label>
<label><input id="q13" type="radio" name="group13" data-score5="50">Neutral</label>
<label><input id="q13" type="radio" name="group13" data-score5="0">Inaccurate</label>


<p>14. I’m the kind of person others come to for advice.</p>
<label><input id="q14" type="radio" name="group14" data-score6="100">Accurate</label>
<label><input id="q14" type="radio" name="group14" data-score6="50">Neutral</label>
<label><input id="q14" type="radio" name="group14" data-score6="0">Inaccurate</label>


<p>15. I think I am a very independent person.</p>
<label><input id="q15" type="radio" name="group15" data-score7="100">Accurate</label>
<label><input id="q15" type="radio" name="group15" data-score7="50">Neutral</label>
<label><input id="q15" type="radio" name="group15" data-score7="0">Inaccurate</label>


<p>16. I enjoy watching nature shows on television like the Discovery Channel,National Geographic and Nova.</p>
<label><input id="q16" type="radio" name="group16" data-score8="100">Accurate</label>
<label><input id="q16" type="radio" name="group16" data-score8="50">Neutral</label>
<label><input id="q16" type="radio" name="group16" data-score8="0">Inaccurate</label>


<p>17. I like writing poems, essays or any form of poetry.</p>
<label><input id="q17" type="radio" name="group17" data-score1="100">Accurate</label>
<label><input id="q17" type="radio" name="group17" data-score1="50">Neutral</label>
<label><input id="q17" type="radio" name="group17" data-score1="0">Inaccurate</label>


<p>18. I enjoy playing around with a chemistry set and am interested in new discoveries in science.</p>
<label><input id="q18" type="radio" name="group18" data-score2="100">Accurate</label>
<label><input id="q18" type="radio" name="group18" data-score2="50">Neutral</label>
<label><input id="q18" type="radio" name="group18" data-score2="0">Inaccurate</label>


<p>19. When I watch a movie or  video, I am more interested in what I see than what I hear.</p>
<label><input id="q19" type="radio" name="group19" data-score3="100">Accurate</label>
<label><input  id="q19"type="radio" name="group19" data-score3="50">Neutral</label>
<label><input id="q19" type="radio" name="group19" data-score3="0">Inaccurate</label>



<p>20. Sometimes when I talk with people, I gesture with my hands.</p>
<label><input id="q20" type="radio" name="group20" data-score4="100">Accurate</label>
<label><input id="q20" type="radio" name="group20" data-score4="50">Neutral</label>
<label><input id="q20" type="radio" name="group20" data-score4="0">Inaccurate</label>

<p>21. I can play a musical instrument. </p>
<label><input id="q21" type="radio" name="group21" data-score5="100">Accurate</label>
<label><input id="q21" type="radio" name="group21" data-score5="50">Neutral</label>
<label><input id="q21" type="radio" name="group21" data-score5="0">Inaccurate</label>


<p>22. I am an active person and if I can’t move around I get bored.</p>
<label><input id="q22" type="radio" name="group22" data-score6="100">Accurate</label>
<label><input id="q22" type="radio" name="group22" data-score6="50">Neutral</label>
<label><input id="q22" type="radio" name="group22" data-score6="0">Inaccurate</label>


<p>23. I don’t like to argue with people..</p>
<label><input id="q23" type="radio" name="group23" data-score7="100">Accurate</label>
<label><input id="q23" type="radio" name="group23" data-score7="50">Neutral</label>
<label><input id="q23" type="radio" name="group23" data-score7="0">Inaccurate</label>


<p>24. It’s fun to watch birds or other animals, to watch their habits, plants and flowers,and to learn more about them.</p>
<label><input id="q24" type="radio" name="group24" data-score8="100">Accurate</label>
<label><input id="q24" type="radio" name="group24" data-score8="50">Neutral</label>
<label><input id="q24" type="radio" name="group24" data-score8="0">Inaccurate</label>


<p>25. I’m good at Scrabble and other word games.</p>
<label><input id="q25" type="radio" name="group25" data-score1="100">Accurate</label>
<label><input id="q25" type="radio" name="group25" data-score1="50">Neutral</label>
<label><input id="q25" type="radio" name="group25" data-score1="0">Inaccurate</label>


<p>26. I believe that almost everything has a logical explanation.</p>
<label><input id="q26" type="radio" name="group26" data-score2="100">Accurate</label>
<label><input id="q26" type="radio" name="group26" data-score2="50">Neutral</label>
<label><input id="q26" type="radio" name="group26" data-score2="00">Inaccurate</label>


<p>27. When I close my eyes, sometimes I can see clear  images in my  head that seem real.</p>
<label><input id="q27" type="radio" name="group27" data-score3="100">Accurate</label>
<label><input id="q27" type="radio" name="group27" data-score3="50">Neutral</label>
<label><input id="q27" type="radio" name="group27" data-score3="0">Inaccurate</label>


<p>28. I would rather play a sport than watch it.</p>
<label><input id="q28" type="radio" name="group28" data-score4="100">Accurate</label>
<label><input id="q28" type="radio" name="group28" data-score4="50">Neutral</label>
<label><input id="q28" type="radio" name="group28" data-score4="0">Inaccurate</label>


<p>29. I can easily keep time to a piece of music.</p>
<label><input id="q29" type="radio" name="group29" data-score5="100">Accurate</label>
<label><input id="q29" type="radio" name="group29" data-score5="50">Neutral</label>
<label><input id="q29" type="radio" name="group29" data-score5="0">Inaccurate</label>


<p>30. I like going to parties and social events.</p>
<label><input id="q30" type="radio" name="group30" data-score6="100">Accurate</label>
<label><input id="q30" type="radio" name="group30" data-score6="50">Neutral</label>
<label><input id="q30" type="radio" name="group30" data-score6="0">Inaccurate</label>


<p>31. I like to spend time alone thinking about things that are important to me. </p>
<label><input id="q31" type="radio" name="group31" data-score7="100">Accurate</label>
<label><input id="q31" type="radio" name="group31" data-score7="50">Neutral</label>
<label><input id="q31" type="radio" name="group31" data-score7="0">Inaccurate</label>


<p>32.  I’m very good at telling the difference between different kinds of  birds, dogs, trees and stuff like that.</p>
<label><input id="q32" type="radio" name="group32" data-score8="100">Accurate</label>
<label><input id="q32" type="radio" name="group32" data-score8="50">Neutral</label>
<label><input id="q32" type="radio" name="group32" data-score8="0">Inaccurate</label>


<p>33. I like to learn new words and know their meanings.</p>
<label><input id="q33" type="radio" name="group33" data-score1="100">Accurate</label>
<label><input id="q33" type="radio" name="group33" data-score1="50">Neutral</label>
<label><input id="q33" type="radio" name="group33" data-score1="0">Inaccurate</label>


<p>34. I like to play games and solve brainteasers that require tactics and strategy.</p>
<label><input id="q34" type="radio" name="group34" data-score2="100">Accurate</label>
<label><input id="q34" type="radio" name="group34" data-score2="50">Neutral</label>
<label><input id="q34" type="radio" name="group34" data-score2="0">Inaccurate</label>


<p>35. I am good at reading maps and finding my way around unfamiliar place.</p>
<label><input id="q35" type="radio" name="group35" data-score3="100">Accurate</label>
<label><input id="q35" type="radio" name="group35" data-score3="50">Neutral</label>
<label><input id="q35" type="radio" name="group35" data-score3="0">Inaccurate</label>


<p>36. I like working with my hands in activities such as sewing, carving, or model building.</p>
<label><input id="q36" type="radio" name="group36" data-score4="100">Accurate</label>
<label><input id="q36" type="radio" name="group36" data-score4="50">Neutral</label>
<label><input id="q36" type="radio" name="group36" data-score4="0">Inaccurate</label>


<p>37.  Sometimes I catch myself walking along with a television jingle or song in my mind.</p>
<label><input id="q37" type="radio" name="group37" data-score5="100">Accurate</label>
<label><input id="q37" type="radio" name="group37" data-score5="50">Neutral</label>
<label><input id="q37" type="radio" name="group37" data-score5="0">Inaccurate</label>


<p>38. I enjoy getting other people to work together.</p>
<label><input id="q38" type="radio" name="group38" data-score6="100">Accurate</label>
<label><input id="q38" type="radio" name="group38" data-score6="50">Neutral</label>
<label><input id="q38" type="radio" name="group38" data-score6="0">Inaccurate</label>


<p>39. I think I know what I am good at and what I’m not so good at doing.</p>
<label><input id="q39" type="radio" name="group39" data-score7="100">Accurate</label>
<label><input  id="q39"type="radio" name="group39" data-score7="50">Neutral</label>
<label><input id="q39" type="radio" name="group39" data-score7="0">Inaccurate</label>



<p>40. I enjoy visiting zoos, natural history museums or other places where the world is studied.</p>
<label><input id="q40" type="radio" name="group40" data-score8="100">Accurate</label>
<label><input id="q40" type="radio" name="group40" data-score8="50">Neutral</label>
<label><input id="q40" type="radio" name="group40" data-score8="0">Inaccurate</label>

</div>














<h2>Total: <span id="score1">--.--</span></h2>

<h2>Total: <span id="score2">--.--</span></h2>

<h2>Total: <span id="score3">--.--</span></h2>

<h2>Total: <span id="score4">--.--</span></h2>


<h2>Total: <span id="score5">--.--</span></h2>

<h2>Total: <span id="score6">--.--</span></h2>

<h2>Total: <span id="score7">--.--</span></h2>

<h2>Total: <span id="score8">--.--</span></h2> 


<button onclick="calcscore();">Click for reulst</button>
<button type="reset" id="reset"><a href="multipletrial.php">Reset</a></button>


<style>
#valuelabel
{
    position: absolute;
    bottom: -23px;
    left: -40px;
}

#valuelabel2
{
    position: absolute;
    bottom: -23px;
    left: -40px;
}

#valuelabel3
{
    position: absolute;
    bottom: -23px;
    left: -40px;
}

#valuelabel4
{
    position: absolute;
    bottom: -23px;
    left: -40px;
}

#valuelabel5
{
    position: absolute;
    bottom: -23px;
    left: -40px;
}

#multilabel
{
    position: absolute;
    bottom: -12px;
    left: -58px;
    font-size: 12px;
    
} 

#multilabel2
{
    position: absolute;
    bottom: -11px;
    left: -120px;
    font-size: 12px;
} 

#multilabel3
{
    position: absolute;
    bottom: -11px;
    left: -80px;
    font-size: 12px;
} 
#multilabel4
{
    position: absolute;
    bottom: -11px;
    left: -99px;
    font-size: 12px;
} 

#multilabel5
{
    position: absolute;
    bottom: -11px;
    left: -48px;
    font-size: 12px;
} 
#multilabel6
{
    position: absolute;
    bottom: -11px;
    left: -74px;
    font-size: 12px;
} 
#multilabel7
{
    position: absolute;
    bottom: -11px;
    left: -74px;
    font-size: 12px;
} 
#multilabel8
{
    position: absolute;
    bottom: -11px;
    left: -56px;
    font-size: 12px;
} 

</style>


<div id="maindiv">
<div class="bar1 x"><p id="mult1">Linguistic:</p></div>
<div class="bar2 x"></div>
<div class="bar3 x"></div>
<div class="bar4 x"></div>
<div class="bar5 x"></div>

<div class="bar6 x"></div>
<div class="bar7 x"></div>
<div class="bar8 x"></div>
<div class="bar9 x"></div>
<div class="bar10 x"></div> 

<div style="position:absolute;bottom: 100px;height: 2px;width: 20px;background-color: black; left: -12px;">
    <p id="valuelabel">20%</p></div>

    <div style="position:absolute;bottom: 200px;height: 2px;width: 20px;background-color: black; left: -12px;">
        <p id="valuelabel2">40%</p></div>
        <div style="position:absolute;bottom: 300px;height: 2px;width: 20px;background-color: black; left: -12px;">
            <p id="valuelabel3">60%</p></div>
            <div style="position:absolute;bottom: 400px;height: 2px;width: 20px;background-color: black; left: -12px;">
                <p id="valuelabel4">80%</p></div>
                <div style="position:absolute;bottom: 500px;height: 2px;width: 20px;background-color: black; left: -12px;">
                    <p id="valuelabel5">100%</p></div>

<div style="position:absolute;border: 2px solid chocolate;left:-120px;bottom: 200px;height: 15px; width: 15px; background-color: Thistle ;">
    <p id="multilabel">Linguistic</p></div>
<div style="position:absolute;border: 2px solid chocolate;left:-120px;bottom: 220px;height: 15px; width: 15px; background-color: Plum;">
    <p id="multilabel2">Mathematical/Logical</p></div>
<div style="position:absolute;border: 2px solid chocolate;left:-120px;bottom: 240px;height: 15px; width: 15px; background-color: Orchid;">
    <p id="multilabel3">Visual/Spatial</p></div>
<div style="position:absolute;border: 2px solid chocolate;left:-120px;bottom: 260px;height: 15px; width: 15px; background-color: Violet;">
    <p id="multilabel4">BodilyKinesthetic</p></div>
<div style="position:absolute;border: 2px solid chocolate;left:-120px;bottom: 280px;height: 15px; width: 15px; background-color: Fuchsia;">
    <p id="multilabel5">Musical</p></div>
<div style="position:absolute;border: 2px solid chocolate;left:-120px;bottom: 300px;height: 15px; width: 15px; background-color: mediumorchid;">
    <p id="multilabel6">Interpersonal</p></div>
<div style="position:absolute;border: 2px solid chocolate;left:-120px;bottom: 320px;height: 15px; width: 15px; background-color: mediumslateblue;">
    <p id="multilabel7">Intrapersonal</p></div>
<div style="position:absolute;border: 2px solid chocolate;left:-120px;bottom: 340px;height: 15px; width: 15px; background-color: slateblue;">
    <p id="multilabel8">Naturalist</p></div>
</div>

<p id="demo2" style="position: fixed;top: 46%; left: 50%; font-size: 40px;font-weight: bold;">Your result Will show here.</p>

	<script type="text/javascript">
 var score;
function calcscore() 
{
// open of my fucntion


 var answerbox = document.getElementById('answer');
  var score1 = 0;
  $("input[type=radio][data-score1]:checked").each(function(i, el) {
    score1 += +$(el).data("score1");
  });
  $("#score1").text(score1);

  var score2 = 0;
  $("input[type=radio][data-score2]:checked").each(function(i, el) {
    score2 += +$(el).data("score2");
  });
  $("#score2").text(score2);

  var score3 = 0;
  $("input[type=radio][data-score3]:checked").each(function(i, el) {
    score3 += +$(el).data("score3");
  });
  $("#score3").text(score3);

  var score4 = 0;
  $("input[type=radio][data-score4]:checked").each(function(i, el) {
    score4 += +$(el).data("score4");
  });
  $("#score4").text(score4);

  var score5 = 0;
  $("input[type=radio][data-score5]:checked").each(function(i, el) {
    score5 += +$(el).data("score5");
  });
  $("#score5").text(score5);

  var score6 = 0;
  $("input[type=radio][data-score6]:checked").each(function(i, el) {
    score6 += +$(el).data("score6");
  });
  $("#score6").text(score6);

  var score7 = 0;
  $("input[type=radio][data-score7]:checked").each(function(i, el) {
    score7 += +$(el).data("score7");
  });
  $("#score7").text(score7);

  var score8 = 0;
  $("input[type=radio][data-score8]:checked").each(function(i, el) {
    score8 += +$(el).data("score8");
  });
  $("#score8").text(score8);



var sumLing = score1;
var sumMath = score2;
var sumVisual = score3;
var sumBody = score4;
var sumMusic = score5;
var sumInter = score6;
var sumIntra = score7;
var sumNat = score8;




 // query css selectors flex-direction: column;  justify-content: flex-end; display: flex;
 document.querySelector(".bar1").style.cssText = " width: 25px; background-color: Thistle ; border: 4px solid Chocolate ; border-bottom:none;";
 document.querySelector(".bar1").style.height = sumLing +"px";

    
    document.querySelector(".bar2").style.cssText = "width: 25px; background-color: Plum ; border: 4px solid Chocolate  ; border-bottom:none;";
    document.querySelector(".bar2").style.height = sumMath +"px";

    document.querySelector(".bar3").style.cssText = "width: 25px; background-color: Orchid ; border: 4px solid Chocolate  ; border-bottom:none;";
    document.querySelector(".bar3").style.height = sumVisual +"px";

    document.querySelector(".bar4").style.cssText = "width: 25px; background-color: Violet ; border: 4px solid Chocolate  ; border-bottom:none;";
    document.querySelector(".bar4").style.height = sumBody +"px";

    document.querySelector(".bar5").style.cssText = "width: 25px; background-color: Fuchsia ; border: 4px solid Chocolate  ; border-bottom:none;";
    document.querySelector(".bar5").style.height = sumMusic  +"px";

    document.querySelector(".bar6").style.cssText = "width: 25px; background-color: MediumOrchid  ; border: 4px solid Chocolate  ; border-bottom:none;";
    document.querySelector(".bar6").style.height = sumInter  +"px";

    document.querySelector(".bar7").style.cssText = "width: 25px; background-color: MediumSlateBlue  ; border: 4px solid Chocolate ; border-bottom:none;";
    document.querySelector(".bar7").style.height = sumIntra  +"px";

    document.querySelector(".bar8").style.cssText = "width: 25px; background-color: SlateBlue  ; border: 4px solid Chocolate  ; border-bottom:none;";
    document.querySelector(".bar8").style.height = sumNat  +"px";
    

// query css selectors

/*
document.querySelector(".bar1").style.cssText = "height: 50px; background-color: blue; border: 2px solid black;";
document.querySelector(".bar1").style.width = score + "px";
*/

// close of my fucntion

var labelmult1 = document.getElementById("maindiv");

if (labelmult1.style.display === "block") {
    labelmult1.style.display = "none";
  } else {
    labelmult1.style.display = "block";
  }

var labelbig = document.getElementById("demo2");

if (labelbig.style.display === "none") {
    labelbig.style.display = "block";
  } else {
    labelbig.style.display = "none";
  }

}



// $("input[type=radio]").on("change", calcscore);


</script>




<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
<script type="text/javascript" src="sweetalert/js/sweetalert2.js"></script>
<script type="text/javascript" src="sweetalert/js/custom.js"></script>

</body>
</html>


