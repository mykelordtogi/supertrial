<!DOCTYPE html>
<html>
<head>
	<title>Make it Happen - Home Page</title>

  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Page Title</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <script src='main.js'></script>

</head>

<style type="text/css">
	

.hide
{
  
display: none;
}
.show
{
  display:block;
   
   
}
#visible
{
	display: block;
  position: absolute;
  top: 20%;
  left: 24.5%;
  font-size: 25px;

  cursor: pointer;
}

#mylist
{
  position: absolute;
  background-color:white;
  top:43%;
  left: 13.1%;
  font-size: 25px;
 width: 165px;
  text-align: center;
}
/*invisible incons*/
#invisible
{
  position: absolute;
  left: 150%;
  top: 50%;

}
#invisible3
{
  position: absolute;
  left: 150%;
  top: -400%;

}

#invisible2
{
  position: absolute;
  left: 148%;
  top: 400%;

}

#invisible4
{
  position: absolute;
  left: 319%;
  top: 50%;

}
#invisible5
{
  position: absolute;
  left: 275%;
  top: -400%;

}
#invisible6
{
  position: absolute;
  left: 275%;
  top: 402%;

}


ul.nav {

  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  }

li {
  float: right;
}


/*my tooltipts*/

/*tooltip1*/

.tooltip {
  position: absolute;
  display: inline-block;
  left: 150%;
  top: -100%;
  border-bottom: 1px dotted black;
  cursor: pointer;

}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  height: 50px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  position: absolute;
  z-index: 1;
top:-350%;
  left: 50%;
  margin-left: -130px;
 
  opacity: 0;
  transition: opacity 0.3s;
}

.tooltip .tooltiptext::after {
  content: "";
  position: absolute;
  text-align: center;
  top: 50%;
  left: 100%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}

/*tooltip1*/

/*tooltip2*/

.tooltip2 {
  position: absolute;
  display: inline-block;
  left: 100%;
  top: 1%;
  border-bottom: 1px dotted black;
  cursor: pointer;
}

.tooltip2 .tooltiptext2 {
  visibility: hidden;
  width: 120px;
  height: 50px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  position: absolute;
  z-index: 1;
bottom: -60px;
  left: 50%;
  margin-left: -130px;
 
  opacity: 0;
  transition: opacity 0.3s;
}

.tooltip2 .tooltiptext2::after {
  content: "";
  position: absolute;
  text-align: center;
  top: 50%;
  left: 100%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.tooltip2:hover .tooltiptext2 {
  visibility: visible;
  opacity: 1;
}

/*tooltop2*/

/*tooltop3*/
.tooltip3 {
  position: absolute;
  display: inline-block;
  left: 148%;
  top: 100%;
  border-bottom: 1px dotted black;
  cursor: pointer;
}

.tooltip3 .tooltiptext3 {
  visibility: hidden;
  width: 120px;
  height: 50px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  position: absolute;
  z-index: 1;
bottom: -180px;
  left: 50%;
  margin-left: -130px;
 
  opacity: 0;
  transition: opacity 0.3s;
}

.tooltip3 .tooltiptext3::after {
  content: "";
  position: absolute;
  text-align: center;
  top: 50%;
  left: 100%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.tooltip3:hover .tooltiptext3 {
  visibility: visible;
  opacity: 1;
}
/*tooltop3*/

/*tooltop4*/
.tooltip4 {
  position: absolute;
  display: inline-block;
  left: 334%;
  top: 1%;
  border-bottom: 1px dotted black;
  cursor: pointer;
}

.tooltip4 .tooltiptext4 {
  visibility: hidden;
  width: 142px;
  height: 50px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  position: absolute;
  z-index: 1;
bottom: -60px;
  left: 50%;
  margin-left: 100px;
 
  opacity: 0;
  transition: opacity 0.3s;
}

.tooltip4 .tooltiptext4::after {
  content: "";
  position: absolute;
  text-align: center;
  top: 25px;
  right: 97%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.tooltip4:hover .tooltiptext4 {
  visibility: visible;
  opacity: 1;
}
/*tooltop4*/

/*tooltop5*/
.tooltip5 {
  position: absolute;
  display: inline-block;
  left: 290%;
  top: -100%;
  border-bottom: 1px dotted black;
  cursor: pointer;
}

.tooltip5 .tooltiptext5 {
  visibility: hidden;
  width: 142px;
  height: 50px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  position: absolute;
  z-index: 1;
bottom: 60px;
  left: 50%;
  margin-left: 120px;
 
  opacity: 0;
  transition: opacity 0.3s;
}

.tooltip5 .tooltiptext5::after {
  content: "";
  position: absolute;
  text-align: center;
  top: 25px;
  right: 97%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.tooltip5:hover .tooltiptext5 {
  visibility: visible;
  opacity: 1;
}
/*tooltop5*/

/*tooltop6*/
.tooltip6 {
  position: absolute;
  display: inline-block;
 left: 290%;
  top: 102%;
  border-bottom: 1px dotted black;
  cursor: pointer;
}

.tooltip6 .tooltiptext6 {
  visibility: hidden;
  width: 142px;
  height: 50px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  position: absolute;
  z-index: 1;
bottom: -170px;
  left: 50%;
  margin-left: 110px;
 
  opacity: 0;
  transition: opacity 0.3s;
}

.tooltip6 .tooltiptext6::after {
  content: "";
  position: absolute;
  text-align: center;
  top: 25px;
  right: 97%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.tooltip6:hover .tooltiptext6 {
  visibility: visible;
  opacity: 1;
}
/*tooltop6*/

.overlay {
  height: 0%;
  width: 100%;
  position: fixed;
  z-index: 1;
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
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}

/*3*/
.overlay3 {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  right: 0;
  /** it was left: 0, now it opens from right **/
  top: 0;
  background-color: rgb(0, 0, 0);
  background-color: rgba(0, 0, 0, 0.9);
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content3 {
  position: relative;
  top: 25%;
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
}

.overlay3 a:hover,
.overlay3 a:focus {
  color: #f1f1f1;
}

.overlay3 .closebtn3 {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay3 a {
    font-size: 20px
  }
  .overlay3 .closebtn3 {
    font-size: 40px;
    top: 15px;
    right: 35px;
  }
}
/*4*/

.overlay4 {
  height: 0%;
  width: 100%;
  position: fixed;
  z-index: 1;
  bottom: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-y: hidden;
  transition: 0.5s;
}

.overlay-content4 {
  position: relative;
  top:40%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay4 a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay4 a:hover, .overlay4 a:focus {
  color: #f1f1f1;
}

.overlay4 .closebtn4 {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay4 {overflow-y: auto;}
  .overlay4 a {font-size: 20px}
  .overlay4 .closebtn4 {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}

/*5*/
.overlay5 {
  height: 0%;
  width: 100%;
  position: fixed;
  z-index: 1;
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
}

.overlay5 a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
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
  .overlay5 a {font-size: 20px}
  .overlay5 .closebtn5 {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}


</style>
<link rel="stylesheet" type="text/css" href="mystyle.css">


<body>

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
   <a href="">Take a test</a>
  </div>
</div>

<div id="myNav2" class="overlay2">
  <a href="javascript:void(0)" class="closebtn2" onclick="closeNav2()">&times;</a>
  <div class="overlay-content2">
   <a href="">Take a test</a>
  </div>
</div>

<div id="myNav3" class="overlay3">
  <a href="javascript:void(0)" class="closebtn3" onclick="closeNav3()">&times;</a>
  <div class="overlay-content3">
   <a href="">Take a test</a>
  </div>
</div>

<div id="myNav4" class="overlay4">
  <a href="javascript:void(0)" class="closebtn4" onclick="closeNav4()">&times;</a>
  <div class="overlay-content4">
   <a href="bwahaha.php">Take a test</a>
  </div>
</div>

<div id="myNav5" class="overlay5">
  <a href="javascript:void(0)" class="closebtn5" onclick="closeNav5()">&times;</a>
  <div class="overlay-content5">
   <a href="withascore.php">Take a test</a>
  </div>
</div>


<img class="mymenu" src="standing.png" id="visible"></p>



<ul id="mylist">
	<div class="tooltip column">
  <span class="tooltiptext">IQ and EQ Test</span>
   <li id="invisible3" class="hide"><a onclick="openNav()"><figure><img src="icon1.png" id="myimage1"></figure></a></li><br>
</div>

	<div class="tooltip2 column">
  <span class="tooltiptext2">Career Path</span>
  <li id="invisible" class="hide"><a onclick="openNav2()"><figure><img src="icon2.png"></figure></a></li><br>
</div>

	<div class="tooltip3 column">
  <span class="tooltiptext3">Personality Test</span>
   <li id="invisible2" class="hide"><a onclick="openNav4()"><figure><img src="icon3.png"></figure></a></li><br>
</div>

<div class="tooltip4 column">
  <span class="tooltiptext4">Competencies <br>and skills</span>
   <li id="invisible4" class="hide"><a onclick="openNav3()"><figure><img src="icon4.png"></figure></a></li><br>
</div>

	<div class="tooltip5 column">
  <span class="tooltiptext5">Psychology</span>
  <li id="invisible5" class="hide"><a onclick="openNav()"><figure><img src="icon5.png"></figure></a></li><br>
</div>

<div class="tooltip6 column">
  <span class="tooltiptext6">Multiple<br>Intelligence</span>
   <li id="invisible6" class="hide"><a onclick="openNav4multiple()"><figure><img src="icon6.png"></figure></a></li><br>
</div>
        
</ul>


<script type="text/javascript" src="myjs.js"></script>
<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>

<script type="text/javascript">
  $(function()
  {
    $("#visible").click(function()
{
  $('#invisible').toggleClass("show");
}
      )
  });

  $(function()
  {
    $("#visible").click(function()
{
  $('#invisible2').toggleClass("show");
}
      )
  });

  $(function()
  {
    $("#visible").click(function()
{
  $('#invisible3').toggleClass("show");
}
      )
  });

    $(function()
  {
    $("#visible").click(function()
{
  $('#invisible4').toggleClass("show");
}
      )
  });
      $(function()
  {
    $("#visible").click(function()
{
  $('#invisible5').toggleClass("show");
}
      )
  });

        $(function()
  {
    $("#visible").click(function()
{
  $('#invisible6').toggleClass("show");
}
      )
  });
  </script>


</body>
</html>