<!DOCTYPE html>
<html>
<head>
	<title>
		HOME</title>
		<link rel="stylesheet" href="sty.css">
		 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="index.php">HOME</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><A href="about.html">ABOUT ME</A></li>
        <li><A href="projects.html">PROJECTS</A></li>
        <li><A href="cs251.html">CS251</A></li>
        <li><A href="acad.html">ACADEMICS</A></li>
        <li><A href="contact.html">CONTACT</A></li>
        <li><A href="comment.html">COMMENT</A></li>
        <li><A href="reviews.php">REVIEWS</A></li>
       </ul>
    </div>
  </div>
</nav>


	<div id="start">
	<div>
	<br><br>
      	<h1 style="font-family: trajan-pro-3, serif;
      			margin-left:100px;
				font-style: normal;
				font-weight: 800;
				align-content: right;
				color:#fff;"
				>Winter isn't the only thing that's coming!!!<br>Here comes my webpage.</h1>
	</div></div>


	<A NAME="intro"><div id="intro">     
	<div class="container-fluid">
  	<div class="row">
    <div class="col-sm-4 col-md-5 col-lg-5" >
       <div id="mypcs" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#mypcs" data-slide-to="0" class="active"></li>
    <li data-target="#mypcs" data-slide-to="1"></li>
    <li data-target="#mypcs" data-slide-to="2"></li>
    <li data-target="#mypcs" data-slide-to="3"></li>
  </ol>
  <style>
    .car{
    max-height: 450px;
    min-height: 450px;
    max-width: 500px;
    min-width: 500px;
    margin: 0px;
    opacity: 1}</style>
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img class="car" src="1.jpg">
    </div>

    <div class="item">
      <img class="car" src="2.jpg">
    </div>

    <div class="item">
      <img class="car" src="3.jpg">
    </div>
    <div class="item">
      <img class="car" src="4.jpg">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#mypcs" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#mypcs" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

    <div class="col-sm-8 col-md-7 col-lg-7">
  
		<h2 style="font-family: trajan-pro-3, serif;
					font-size: 70px">Shashij Gupta</h2>

		<div class="popup" onclick="myFunction()" style="font-family: trajan-pro-3, serif;
					font-size: 50px">"I am the sword in the darkness."
  				<span class="popuptext" id="myPopup" >I am a TV series lover and a gym enthusiast.</span>
			</div>
			</div>
			</div>
			</div>
			</div>

<script>
// When the user clicks on div, open the popup
function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
</script>

<h1>
<?php
$file=fopen("count.txt","r");
$x=fread($file,filesize("count.txt"));
$x=$x+1;
fclose($file);
$file=fopen("count.txt","w");
fwrite($file, $x);
fclose($file);
echo "Hit counter : $x";
?>
</h1>
</body>
</html>