<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<head>
	<title></title>
</head>
<body>
<?php

$file = fopen("comments.txt","r");


$count=0;
while(! feof($file))
  {
  	$str=fgets($file);
  	echo "$str<br>";
  	// s$count=1;
  }
// echo "$count comments so far";

fclose($file);
?>
</body>
</html>