<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Star Wars</title>
	<link href="css/bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
  <link rel="icon" href="starwarsicons-1-900x875.jpg">
</head>
<style>
/* Twitter*/
   	 #sochknop {
	 opacity: 0.7;
	 margin-bottom:20px;
	 margin-left:55px;
	 margin-top:45px;
	 -moz-transition: opacity 0.3s 0.05s ease;
	 -o-transition: opacity 0.3s 0.05s ease;
	 -webkit-transition: opacity 0.3s 0.05s ease;
	}
	#sochknop:hover {
	 margin-top:45px;
	 opacity: 1;
	}
	#sochknop span {
	 -o-margin-top:40px;
	 padding:0px 0px;

	 line-height:10px;
	 float:left;
}

	body {
    background-image: url(stars-sky-night-party-lights.jpg);
    background-attachment: fixed;
    overflow-x:hidden;
   }
   #mydiv{
   	background-image: url(ForceAwakens6.gif);
   	background-size: 100%;
   	background-repeat: no-repeat;
   }
   #layer {
    overflow: scroll; /* Добавляем полосы прокрутки */
    width: 100%; /* Ширина блока */
    height: 200px; /* Высота блока */
    padding: 5px; /* Поля вокруг текста */
    border: solid 1px black; /* Параметры рамки */
   } 
   #social-media-icons{
    margin-top: 3%;
    width: 100%;
   }
   #social-media-icons img{
    width: 3%;
   }
      #social-media-icons1{
    margin-top: 3%;
    width: 100%;
    margin-left: 37%;
   }
   #social-media-icons1 img{
    width: 3%;
    margin-left: 1%;
</style>
<body>
<div style="position:absolute; border: 1px solid white; z-index:2; width: 100%; left: -1px; height:30%; top:5900px; background-image: url(3-theories-about-star-wars-episode-7-the-force-awakens-you-don-t-know-the-power-of-the-664771.jpg); background-color:#000;  background-size:50%">
  <p style="color: gray; margin-top: 2%; text-align: center;">FOLLOW THE STAR WARS</p>
  <p style="color: gray; margin-top: 10%; text-align: center;">TM & © AlidarovFilm Ltd. All Rights Reserved</p>
  <div style="position: absolute; top: 10%;" id="social-media-icons1">
  <a href="https://www.youtube.com/user/starwars"><img src="downIcons/YouTube.png"/></a>
  <a href="https://www.facebook.com/StarWars/"><img src="downIcons/Facebook.png"/></a>
  <a href="https://plus.google.com/+StarWars"><img src="downIcons/Google+.png"/></a>
  <a href="https://www.instagram.com/starwars/"><img src="downIcons/Instagram.png"/></a>
  <a href="http://starwars.tumblr.com/"><img src="downIcons/Tumblr.png"/></a>
  <a href="https://twitter.com/starwars"><img src="downIcons/Twitter.png"/></a>
  </div>
  </div>
	<div class="row">
	<!--the black div under the corousel-->
	<div class="col-md-12 col-xs-12" style="position:fixed; background-color: black; width:90%; height:100%;left:5%; border: 1px white;"></div></div>
	<div style="position:absolute; width:100%; height:50%; background-color: white; top:0%" id="mydiv">
	<div class="col-md-12 col-xs-12" style="position:absolute; width:100%; height:10%; background-color:#292929; bottom:7%;">
   <a href="Star Wars.php"><button class="col-md-1 col-xs-1 btn btn-danger" style="position:absolute; left:0%; height:100%; width:20%; background-color:black;" type="button" aria-label="Left Align"><span style="color:#DF1F32;" class="glyphicon glyphicon-home" aria-hidden="true"></span>HOME</button></a>
    <a href="News +blog.php"><button class="col-md-1 col-xs-1 btn btn-danger" style="position:absolute; left:20%; height:100%; width:20%; background-color:black;" type="button" aria-label="Left Align"><span style="color:green;" class="glyphicon glyphicon-headphones" aria-hidden="true"></span> NEWS + BLOG</button></a>
    <a href="Films.php"><button class="col-md-1 col-xs-1 btn btn-primary" style="position:absolute; left:40%; height:100%; width:20%; background-color:black;" type="button" aria-label="Left Align"><span style="color:#92DF1F;" class="glyphicon glyphicon-fast-forward" aria-hidden="true"></span> FILMS</button></a>
    <a href="GamesStar.php"><button class="col-md-1 col-xs-1 btn btn-danger" style="position:absolute; left:60%; height:100%; width:20%; background-color:black;" type="button" aria-label="Left Align"><span style="color:#1FDECB;" class="glyphicon glyphicon-phone" aria-hidden="true"></span>GAMES + APPS</button></a>
    <a href="ForumMain.php"><button class="col-md-1 col-xs-1 btn btn-danger" style="position:absolute; left:80%; height:100%; width:20%; background-color:black;" type="button" aria-label="Left Align"><span style="color:#DF1F32;" class="glyphicon glyphicon-cloud" aria-hidden="true"></span> FORUM</button></a>
	</div>
    <div id="social-media-icons">
  <a href="https://www.youtube.com/user/starwars"><img src="Icons/YouTube.png"/></a>
  <a href="https://www.facebook.com/StarWars/"><img src="Icons/Facebook.png"/></a>
  <a href="https://plus.google.com/+StarWars"><img src="Icons/Google+.png"/></a>
  <a href="https://www.instagram.com/starwars/"><img src="Icons/Instagram.png"/></a>
  <a href="http://starwars.tumblr.com/"><img src="Icons/Tumblr.png"/></a>
  <a href="https://twitter.com/starwars"><img src="Icons/Twitter.png"/></a>
  <h3 style="color: white; display: inline-block;">|<small style="color: white;">Show Disney.com</small></h1>
  </div>
	<div style="position:absolute; width:100%; height:7%; background-color: black; bottom:0%;">
		<button style="position:absolute; left:5%; height:100%; background-color:black;" type="button" class="btn btn-default" aria-label="Left Align"><span style="color:#DF1F32;" class="glyphicon glyphicon-align-left" aria-hidden="true"></span></button>
		<p style="position:absolute; left:7.5%; top:20%; color:yellow;">STAR WARS: THE FORCE AWEKENS</p>
		<a href="#"><button style="position:absolute; color:black; left:88%; height:100%; width:7%; top:0%; background-color:yellow;" type="button" class="btn btn-danger">TICKETS</button></a>
	</div>
	</div>
	<div style="position:absolute; left:10%; width:80%; height: 30%; top:55%;" id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol style="position:absolute; width:100%; height:100%; top:800px; left:450px;" class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="48529_star_wars.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="1540-star-wars-1920x1080-movie-wallpaper.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
     <div class="item">
      <img src="Star-Wars-Episode-VII-The-Force-Awakens-Movie-poster-hd-Wallpaper-1920x1080.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    ...
  </div>

  <!-- Controls -->
  <a style="position:absolute; top:150%; left:-10%;" class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a style="position:absolute; top:150%; right:-10%;" class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<img style="position:absolute; width:180px; height:70px; top:47%; left:45%;" src="Starwars-logo.png">
<nav style="position:fixed; z-index:1; width:100%; background-color: black;" class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="Star Wars.php"><p style="color: yellow; font-family:Helvetica;">STAR WARS</p></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a style="color: blue;" href="index.php">LOG OUT<span class="sr-only">(current)</span></a></li>
        <li><a style="color: red; float: right;" href="RegistrationPage.php">REGISTRATION</a></li>
      </ul>
      <form class="navbar-form navbar-left" method="get" action="http://www.google.com/search">
        <div class="form-group">
          <input style="height: 30px; width: 300px;" type="text" name="q" placeholder="SEARCH STAR WARS IN GOOGLE...">
        </div>
        <button type="button" class="btn btn-default" aria-label="Left Align">
  <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
</button>
  <p style="position: absolute; top:15px; right: 140px; color: yellow; display: inline-block;">Account:</p>
  <a href="index2.php"><div style="position:absolute; top: 15px; right: 50px; color: yellow; display: inline-block;"><?php
  echo $_SESSION['login']; 
  error_reporting(0);
  ?></div>s
      </form>

      <!--Twitter-->
		<a style="position:absolute; top:5%;" href="https://twitter.com/share" class="twitter-share-button" data-via="OljasA">Tweet</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		<img style="position:absolute; left:50%; width:25%; height:135%; top:-15%;" src="SW.png"/>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div style="position:absolute; left:9%; top:1400px; background-color:black; width: 100%;" class="column">
<div class="col-sm-4 col-md-4">
    <div class="thumbnail">
      <img src="EPI_TPM_poster.png" alt="...">
      <div style="background-color:black;" class="caption" id="layer">
        <h3 style="color:yellow;">Star Wars: Episode I – The Phantom Menace</h3>
        <p style="color:white;">Star Wars Battlefront is an action shooter video game developed by EA DICE, with additional work from Criterion Games, and published by Electronic Arts. The game, based on the Star Wars franchise, is the third major release in the Star Wars: Battlefront sub-series, and is considered a reboot to the previous games, instead of a sequel. The game was released worldwide in November 2015, and received mixed reviews from critics. Despite this, the game was a commercial success, surpassing over 12 million copies sold.</p>
      </div>
    </div>
  </div>
  </div>
<div style="position:absolute; left:58%; top:1400px; background-color:black; width: 100%;" class="column">
<div class="col-sm-4 col-md-4">
    <div class="thumbnail">
      <img src="EPII_AotC_poster.png" alt="...">
      <div style="background-color:black;" class="caption" id="layer">
        <h3 style="color:yellow;">Star Wars: Episode II – Attack of the Clones</h3>
        <p style="color:white;">Star Wars Battlefront is an action shooter video game developed by EA DICE, with additional work from Criterion Games, and published by Electronic Arts. The game, based on the Star Wars franchise, is the third major release in the Star Wars: Battlefront sub-series, and is considered a reboot to the previous games, instead of a sequel. The game was released worldwide in November 2015, and received mixed reviews from critics. Despite this, the game was a commercial success, surpassing over 12 million copies sold.</p>
      </div>
    </div>
  </div>
  </div>
  <div style="position:absolute; left:9%; top:2600px; background-color:black; width: 100%;" class="column">
<div class="col-sm-4 col-md-4">
    <div class="thumbnail">
      <img src="sw1.jpg" alt="...">
      <div style="background-color:black;" class="caption" id="layer">
        <h3 style="color:yellow;">Star Wars: Episode III – Revenge of the Sith</h3>
        <p style="color:white;">Star Wars Battlefront is an action shooter video game developed by EA DICE, with additional work from Criterion Games, and published by Electronic Arts. The game, based on the Star Wars franchise, is the third major release in the Star Wars: Battlefront sub-series, and is considered a reboot to the previous games, instead of a sequel. The game was released worldwide in November 2015, and received mixed reviews from critics. Despite this, the game was a commercial success, surpassing over 12 million copies sold.</p>
      </div>
    </div>
  </div>
  </div>
  <div style="position:absolute; left:58%; top:2550px; background-color:black; width: 100%;" class="column">
<div class="col-sm-4 col-md-4">
    <div class="thumbnail">
      <img src="anewhopeposter.jpg" alt="...">
      <div style="background-color:black;" class="caption" id="layer">
        <h3 style="color:yellow;">Star Wars: Episode IV – A New Hope</h3>
        <p style="color:white;">Star Wars Battlefront is an action shooter video game developed by EA DICE, with additional work from Criterion Games, and published by Electronic Arts. The game, based on the Star Wars franchise, is the third major release in the Star Wars: Battlefront sub-series, and is considered a reboot to the previous games, instead of a sequel. The game was released worldwide in November 2015, and received mixed reviews from critics. Despite this, the game was a commercial success, surpassing over 12 million copies sold.</p>
      </div>
    </div>
  </div>
  </div>
  <div style="position:absolute; left:9%; top:3650px; background-color:black; width: 100%;" class="column">
<div class="col-sm-4 col-md-4">
    <div class="thumbnail">
      <img src="Star-Wars-Episode-V-The-Empire-Strikes-Back-5.jpg" alt="...">
      <div style="background-color:black;" class="caption" id="layer">
        <h3 style="color:yellow;">Star Wars: Episode V – The Empire Strikes Back</h3>
        <p style="color:white;">Star Wars Battlefront is an action shooter video game developed by EA DICE, with additional work from Criterion Games, and published by Electronic Arts. The game, based on the Star Wars franchise, is the third major release in the Star Wars: Battlefront sub-series, and is considered a reboot to the previous games, instead of a sequel. The game was released worldwide in November 2015, and received mixed reviews from critics. Despite this, the game was a commercial success, surpassing over 12 million copies sold.</p>
      </div>
    </div>
  </div>
  </div>
  <div style="position:absolute; left:58%; top:3650px; background-color:black; width: 100%;" class="column">
<div class="col-sm-4 col-md-4">
    <div class="thumbnail">
      <img src="star-wars-episode-vi--return-of-the-jedi.13947.jpg" alt="...">
      <div style="background-color:black;" class="caption" id="layer">
        <h3 style="color:yellow;">Star Wars: Episode VI – Return of the Jedi</h3>
        <p style="color:white;">Star Wars Battlefront is an action shooter video game developed by EA DICE, with additional work from Criterion Games, and published by Electronic Arts. The game, based on the Star Wars franchise, is the third major release in the Star Wars: Battlefront sub-series, and is considered a reboot to the previous games, instead of a sequel. The game was released worldwide in November 2015, and received mixed reviews from critics. Despite this, the game was a commercial success, surpassing over 12 million copies sold.</p>
      </div>
    </div>
  </div>
  </div>
  <div style="position:absolute; left:9%; top:4800px; background-color:black; width: 100%;" class="column">
<div class="col-sm-4 col-md-4">
    <div class="thumbnail">
      <img src="Star-Wars-The-Force-Awakens-DVD-Cover-UK.jpg" alt="...">
      <div style="background-color:black;" class="caption" id="layer">
        <h3 style="color:yellow;">Star Wars: Episode III – Revenge of the Sith</h3>
        <p style="color:white;">Star Wars Battlefront is an action shooter video game developed by EA DICE, with additional work from Criterion Games, and published by Electronic Arts. The game, based on the Star Wars franchise, is the third major release in the Star Wars: Battlefront sub-series, and is considered a reboot to the previous games, instead of a sequel. The game was released worldwide in November 2015, and received mixed reviews from critics. Despite this, the game was a commercial success, surpassing over 12 million copies sold.</p>
      </div>
    </div>
  </div>
  </div>
</body>
</html>
<!-- style="position:absolute; left:20%; height:100%; width:7%; background-color:black;" -->