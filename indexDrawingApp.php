<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<title>
			
		</title>
	</head>

<style type="text/css">
	@import url('http://fonts.googleapis.com/css?family=Mukta');



body{
	margin:0px;
	padding:30px;
	font-family: "Mukta";
	overflow:hidden;
	background:#313131;
}
canvas{
	box-shadow: -3px 2px 9px 6px black;
	cursor: pointer;
}
.tools{
	display:flex;
	justify-content: center;
}
.tools .color-field{
	height:40px;
	width:40px;
	min-height:40px;
	min-width:40px;
	cursor: pointer;
	display: inline-block;
	border-radius: 50%;
	border:2px solid white;
	align-self: center;
	margin: 0 15px;
}
.tools .square{
	height:40px;
	width:40px;
	min-height:40px;
	min-width:40px;
	display: inline-block;
	border-radius: 20%;
	border:2px solid white;
	align-self: center;
	margin: 0 15px;
}
.tools .button{
	align-self: center;
	width:100px;
	height:40px;
	border:2px solid white;
	cursor: pointer;
	color:white;
	background:#222;
	font-weight:bold;
	margin:0 15px;
}
.tools .a{
	padding-top:10px;
}
.color-picker{
	align-self:center;
	margin: 0 10px;
	height: 50px;
}
.pen-range{
	align-self:center;
	margin: 0 10px;
}
	
</style>


	<body>
		<div class="field">
			<canvas id="canvas"></canvas>
			<div class="tools">
				<button type="button" class="button" id="download">save</button>
				<button onClick="undoStroke()" type="button" class="button" id="undo">undo</button>
				<button onClick="clearStrokes()" type="button" class="button" id="clear">clear</button>
				<button onClick="eraser()" type="button" class="button" id="eraser">eraser</button>
				<button onClick="brushC()" type="button" class="button" id="brush">brush</button>
				<div onClick="changeColor(this)" class="color-field" style="background:red;"></div>
				<div onClick="changeColor(this)" class="color-field" style="background:blue;"></div>
				<div onClick="changeColor(this)" class="color-field" style="background:green;"></div>
				<div onClick="changeColor(this)" class="color-field" style="background:yellow;"></div>
				<div id="currentcolor" class="square" style="background:black"></div>

				<input onInput="brushColor=this.value" type="color" class="color-picker"  id="cPick" value="brushColor();">
				<input type="range" min="1" max="100" name="pen-range" onInput="draw_width=this.value" value=2>
			</div>
		</div>
	</body>
		<script type="text/javascript">
			const canvas = document.getElementById("canvas");
canvas.width = window.innerWidth - 60;
canvas.height = window.innerHeight - 100;

let context = canvas.getContext("2d");
context.fillStyle = "#FFFFFF";
context.fillRect(0,0, canvas.width, canvas.height);

const download = document.getElementById('download');
const colorPicker = document.querySelector('.color-picker');
var brushColor= "#FF0000";//pencolor
var pBColor =0;
var save=0;
let draw_width= "2";//pensize
let is_drawing=false;//pendown

let resore_array=[];
let index =-1;

function currentColor(){
	document.getElementById('currentcolor').style.background=context.strokeStyle;
}

function changeColor(element){
	context.strokeStyle=element.style.background;
	currentColor();
}

colorPicker.addEventListener('change',event=>{
	context.strokeStyle=event.target.value;
	currentColor();
})

canvas.addEventListener("touchstart", start,false);
canvas.addEventListener("touchmove", draw,false);
canvas.addEventListener("mousedown", start,false);
canvas.addEventListener("mousemove", draw,false);

canvas.addEventListener("touchend", stop, true);
canvas.addEventListener("mouseup", stop, true);
canvas.addEventListener("mouseout", stop, true);

download.addEventListener('click', function(e) {
	var link = document.createElement('a');
	link.download = 'download.png';
	link.href = canvas.toDataURL()
	link.click();
	link.delete;
  });

function eraser(){
	
		pBColor=context.strokeStyle;
		
		context.strokeStyle="white";
	
}
function brushC(){
	context.strokeStyle=pBColor;	
}

function start(event){
	
	is_drawing = true;
	context.beginPath();
	context.moveTo(event.clientX - canvas.offsetLeft, 
				   event.clientY - canvas.offsetTop);
	event.preventDefault();
}
function draw(event){
	if(is_drawing){
		context.lineTo(event.clientX - canvas.offsetLeft, 
				       event.clientY - canvas.offsetTop);
		context.stokeStyle = brushColor;
		context.lineWidth = draw_width;
		context.lineCap = "round";
		context.lineJoin = "round";
		context.stroke();
		}	
		event.preventDefault();
}
function stop(event){
	if(is_drawing){
	context.stroke();
	context.closePath();
	is_drawing=false;
	}
	event.preventDefault();
	if(event.type!="mouseout"){
		resore_array.push(context.getImageData(0,0, canvas.width, canvas.height));
	index += 1;
	}
}
function clearStrokes(){
	context.fillStyle = "white";
	context.fillRect(0,0, canvas.width, canvas.height);
	resore_array=[];
	index =-1;
}
function undoStroke(){
	if(index==-1){
		clearStrokes();
	}
	else{
	index-=1;
	resore_array.pop();
	context.putImageData(resore_array[index],0,0);
	}
}

		</script>
</html>