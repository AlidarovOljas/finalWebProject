<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Account</title>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.css" rel="stylesheet">
  <link rel="icon" href="starwarsicons-1-900x875.jpg">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/font-awesome.min.css">	
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
	
</head>
<body>
<div style="width: 100%; height: 100%;" id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="star-wars-scout-trooper-1920x1080.jpg">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="Star-Wars-Episode-VII-The-Force-Awakens-Movie-poster-hd-Wallpaper-1920x1080.jpg">
      <div class="carousel-caption">
        ...
      </div>
    </div>
        <div class="item">
      <img src="w1920x1080_15527.jpg">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  <div style="position:absolute; top: 15px; right: 50px; color: yellow; display: inline-block;"><?php
  echo $_SESSION['login']; 
  echo $_SESSION["<img src=$url>"];
  ?></div>
</body>
</html>