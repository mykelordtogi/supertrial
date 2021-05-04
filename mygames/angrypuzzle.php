<!DOCTYPE html>
<html>
<head>
	<title>PUZZLE</title>
	<style>

* {
  box-sizing: border-box;
}
body {
 font-family: sans-serif;
  background-image: url("assets/img/hero-bg.png");
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: scroll;
}
.column {
  float: left;
  width: 38%;
  padding: 10px;
  height: 510px;
}
.column img{
  width: 155px;
  height: 155px;
}
.column div {
  height: 155px;
  width: 155px;
  border: 1px dashed gray;
  display: inline-block;
  margin: 0;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}

button {
   border: none;
  background-color: gray;
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

</style>

 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">




</head>
<body>


  <button  style="position: absolute; top: 30%; left: 75%;" onclick="location.href = 'https://practice4you.herokuapp.com/mygames/puzzlegame.php' ">Back and Rechoose</button>
<button style="position: absolute; top: 40%; left: 75%;" onclick="location.href = 'https://practice4you.herokuapp.com/mygames/puzzlegame.php' ">FINISH</button>




<div class="row">
  <div class="column" style="background-color:black;">
    <img id="drag1" src="puzzle/angry/a1.png" draggable="true" ondragstart="drag(event)">
    <img id="drag2" src="puzzle/angry/a2.png" draggable="true" ondragstart="drag(event)">
    <img id="drag3" src="puzzle/angry/a3.png" draggable="true" ondragstart="drag(event)">
    <img id="drag4" src="puzzle/angry/a4.png" draggable="true" ondragstart="drag(event)">
    <img id="drag5" src="puzzle/angry/a5.png" draggable="true" ondragstart="drag(event)">
    <img id="drag6" src="puzzle/angry/a6.png" draggable="true" ondragstart="drag(event)">
    <img id="drag7" src="puzzle/angry/a7.png" draggable="true" ondragstart="drag(event)">
    <img id="drag8" src="puzzle/angry/a8.png" draggable="true" ondragstart="drag(event)">
    <img id="drag9" src="puzzle/angry/a9.png" draggable="true" ondragstart="drag(event)">
  </div>
  <div class="column" style="background-color:black;">
    <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    <div id="div3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    <div id="div4" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    <div id="div5" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    <div id="div6" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    <div id="div7" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    <div id="div8" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    <div id="div9" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
  </div>
</div>

<script type="text/javascript">
	
function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}
</script>
</body>
</html>
