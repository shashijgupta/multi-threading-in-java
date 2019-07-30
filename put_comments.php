<!DOCTYPE html>
<html>
<head>
	<title>
		COMMENT</title>
		
		 <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="sty.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style> body{background-image: url("start-projects-back.jpg");
  background-attachment: fixed;
  }</style>
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
      <a class="navbar-brand" href="index.html">HOME</a>
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

<h1><br><br><br></h1>
<div style="font-size: 50px;color: white;">
<?php
$first=$_POST["name"];
$comm=$_POST["comments"];
echo "Thank You ";
echo $first;
echo " for your review";
$file=fopen("comments.txt","a");
fwrite($file,"<div class=\"card bg-light text-dark\" style=\"width: 70%\" ><div class= \"card-body\" style=\"background-color:  #e6e6e6\">".$comm."</div><div class=\"card-footer\" style=//\"background-color: #b3b3b3\">-".$first."</div></div>");

fclose($file); 
?>
</div>
</body>
</html>
