<head>

<META name="viewport" content="initial-scale=0.66, user-scalable=no">

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
  bottom:0;
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