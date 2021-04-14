<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<p style="text-transform: uppercase;"></p>

<div class="questionCard" id="q1">
                <p>Do you like puzzles?</p>
                <input type="radio" name="a1" onclick="check('a1')" value="1"/>I love them
                <input type="radio" name="a1" onclick="check('a1')" value="2"/>No
                <input type="radio" name="a1" onclick="check('a1')" value="3"/>Sometimes
            </div>
            <div class="questionCard" id="q2">
                <p>
                2.</br>
                Blueberries cost more than strawberries.</br>
                Blueberries cost less than raspberries.</br>
                Raspberries cost more than strawberries and blueberries.</br>
                If the first two statements are true, the third statement is</p>
                <input type="radio" name="a2" onclick="check('a2')" value="1"/>True
                <input type="radio" name="a2" onclick="check('a2')" value="2"/>False
                <input type="radio" name="a2" onclick="check('a2')" value="3"/>Uncertain
            </div>
            <div class="questionCard" id="q3">
                <p>
                3.</br>
                All the trees in the park are flowering trees.</br>
                Some of the trees in the park are dogwoods.</br>
                All dogwoods in the park are flowering trees.</br>
                If the first two statements are true, the third statement is</p>
                <input type="radio" name="a3" onclick="check('a3')" value="1"/>True
                <input type="radio" name="a3" onclick="check('a3')" value="2"/>False
                <input type="radio" name="a3" onclick="check('a3')" value="3"/>Uncertain
            </div>



<script type="text/javascript">
	var score=0;
function check (name) {
    var methods = document.getElementsByName(name);
    for (var i=0; i<methods.length; i++) {
         if (methods[i].checked == 1) {
             score +=30;
             
            }
             if (methods[i].checked == 2) {
             score +=20;
             
            }

             if (methods[i].checked == 3) {
             score +=10;
             
            }
            alert(score);
   }
}

</script>
</body>
</html>