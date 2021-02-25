<!DOCTYPE html>
<html>
<head>
	<title></title>

<style type="text/css">body {
  font-family: sans-serif;
  background: white;
}
h2 {
  margin: 5px 0;
}
#wrapper {
  width: 1000px;
  height: 1000px;
  margin: 0 auto;
  background:bisque;
  padding: 10px 15px;
  border-radius: 10px;
  border: 4px solid black;
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
  background: green;
}
#reset {
  background: red;

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
  padding: 100px;
}</style>

</head>
<body>
<div id="wrapper">
  <h1>What kind of person are you?</h1>
  <p>Take this questionnaire to find out!</p>
  
  <form id="quiz">
    <!-- Question 1 -->
    <h2>The end of the world is coming, if you can save only 1 animal, which one will you pick?</h2>
    <!-- Here are the choices for the first question. Each input tag must have the same name. For this question, the name is q1. -->
    <!-- The value is which answer the choice corresponds to. -->
    <label><input type="radio" name="q1" value="c1">
      Rabit
    </label><br />
    <label><input type="radio" name="q1" value="c2">
      Sheep
    </label><br />
    <label><input type="radio" name="q1" value="c3">
      Deer
    </label><br />
    <label><input type="radio" name="q1" value="c4">
      Horse
    </label><br />

    <!-- Question 2 -->
    <h2>If you had to be an animal which animal are you?</h2>
    <!-- Here are the choices for the second question. Notice how each input tag has the same name (q2), but a different name than the previous question. -->
    <label><input type="radio" name="q2" value="c1">
      Dog
    </label><br />
    <label><input type="radio" name="q2" value="c2">
      Cat
    </label><br />
    <label><input type="radio" name="q2" value="c3">
      Horse
    </label><br />
    <label><input type="radio" name="q2" value="c4">
      Snake
    </label><br />
    
    <!-- Question 3 -->
    <h2>If you have the power to make one species disappear forever, which one will that be?</h2>
    <!-- Choices for the third question -->
    <label><input type="radio" name="q3" value="c1">
      Lion
    </label><br />
    <label><input type="radio" name="q3" value="c2">
      Snake
    </label><br />
    <label><input type="radio" name="q3" value="c3">
      Crocodile
    </label><br />
    <label><input type="radio" name="q3" value="c4">
      Shark 
    </label><br />
    
    <!-- Question 4 -->
    <h2>If one animal could speak, which one would it be?</h2>
    <!-- Choices for the fourth question -->
    <label><input type="radio" name="q4" value="c1">
      Sheep
    </label><br />
    <label><input type="radio" name="q4" value="c2">
      Horse
    </label><br />
    <label><input type="radio" name="q4" value="c3">
      Rabit
    </label><br />
    <label><input type="radio" name="q4" value="c4">
      Bird
    </label><br />
    
    
  </form>


  <button type="submit" id="submit" onclick="tabulateAnswers();">Submit Your Answers</button>
  <button type="reset" id="reset" onclick="resetAnswer();"><a href="bwahaha.html">Reset</a></button>

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
      if (choices[i].value == 'c4') {
        c4score = c4score + 1;
      }
      // If you add more choices and outcomes, you must add another if statement below.
    }
  }
  
  // Find out which choice got the highest score.
  // If you add more choices and outcomes, you must add the variable here.
  var maxscore = Math.max(c1score,c2score,c3score,c4score);
  
  // Display answer corresponding to that choice
  var answerbox = document.getElementById('answer');


  if (c1score == maxscore) { // If user chooses the first choice the most, this outcome will be displayed.
    answerbox.innerHTML = "You are a person who is like cold as ice in the outside but warm in the inside. You are loyal and faithful, but arrogant and with authoritative behavior. You can know what other person is thinking even they didnt say a word.";
  }
  if (c2score == maxscore) { // If user chooses the second choice the most, this outcome will be displayed.
    answerbox.innerHTML = "You are an obedient and warm person. Stylish but emotional and moody. You love to talk about secrets, like no secrets kept in you.";
  }
  if (c3score == maxscore) { // If user chooses the third choice the most, this outcome will be displayed.
    answerbox.innerHTML = "Elegant and well-mannered. You are optimistive but sometimes ruthless to things. Being in a relationship makes you feel warm and always in love";
  }
  if (c4score == maxscore) { // If user chooses the fourth choice the most, this outcome will be displayed.
    answerbox.innerHTML = "Unbriddle, free-spirited and carefree. You are a flexible person with insecurities. You are still looking for a long lasting relationship";
  }
  // If you add more choices, you must add another response below.
}

// program the reset button
function resetAnswer() {
  var answerbox = document.getElementById('answer');
  answerbox.innerHTML = "Your result will show up here!";
}

</script>

</body>
</html>