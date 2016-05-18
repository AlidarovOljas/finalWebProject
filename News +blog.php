<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NEWS AND BLOG</title>
  <link href="css/bootstrap.css" rel="stylesheet">
  <link rel="icon" href="starwarsicons-1-900x875.jpg">
    <link href="style.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
  
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
    background-image: url(ForceAwakens1.gif);
    background-size: 100%;
    background-repeat: no-repeat;
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
<div style="position:absolute; border: 1px solid white; z-index:2; width: 100%; left: -1px; height:30%; top:2100px; background-image: url(3-theories-about-star-wars-episode-7-the-force-awakens-you-don-t-know-the-power-of-the-664771.jpg); background-color:#000;  background-size:50%">
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
    <a href="News +blog.php"><button class="col-md-1 col-xs-1 btn btn-primary" style="position:absolute; left:20%; height:100%; width:20%; background-color:black;" type="button" aria-label="Left Align"><span style="color:green;" class="glyphicon glyphicon-headphones" aria-hidden="true"></span> NEWS + BLOG</button></a>
    <a href="Films.php"><button class="col-md-1 col-xs-1 btn btn-danger" style="position:absolute; left:40%; height:100%; width:20%; background-color:black;" type="button" aria-label="Left Align"><span style="color:#92DF1F;" class="glyphicon glyphicon-fast-forward" aria-hidden="true"></span> FILMS</button></a>
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
<img style="position:absolute; width:130px; height:50px; top:47%; left:47%;" src="Starwars-logo.png">

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
      <a class="navbar-brand" href="Star Wars.php"><p style="color: yellow;">STAR WARS</p></a>
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
  ?></div>
      </form>

      <!--Twitter-->
    <a style="position:absolute; top:5%;" href="https://twitter.com/share" class="twitter-share-button" data-via="OljasA">Tweet</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    <img style="position:absolute; left:50%; width:25%; height:135%; top:-15%;" src="SW.png"/>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div style="position:absolute; left:10%; top:1400px; background-color:black; width: 100%;" class="row">
<div class="col-sm-4 col-md-4">
    <div class="thumbnail">
      <img src="TFA-kylo-1536x864-572453668527.jpg" alt="...">
      <div style="background-color:black;" class="caption">
        <h3 style="color:yellow;">JOURNEYING THROUGH DISNEY INFINITY 3.0‘S STAR WARS: THE FORCE AWAKENS PLAY SET</h3>
        <p style="color:white;">The Disney Infinity series takes you through the gamut of Disney-owned franchises, and that now includes Star Wars with Disney Infinity 3.0. While I’d dabbled in previous iterations, 3.0 got its hooks into me good, and I tore through The Force Awakens content shortly after seeing the movie. If you haven’t played it, allow me to walk you through some of its coolest parts, giving you a taste of what you’re in for.</p>
        <p><a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-facetime-video" aria-hidden="true"></span> Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
  <div style="position:absolute; top: -885px; left: 1%; background-color: black; width:100%;" class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="is-snoke-actually-this-prequel-character-to-be-introduced-in-star-wars-rebels-804352.jpg" alt="...">
      <div style="background-color: black;" class="caption">
        <h3 style="color: yellow">DARTH MAUL</h3>
        <p style="color:white">Maul was born to Mother Talzin and raised as a Nightbrother on Dathomir, before being taken by Darth Sidious as an apprentice. He trained under Sidious into adulthood, and was sent to kill Jedi Master Qui-Gon Jinn and his apprentice Obi-Wan Kenobi to prevent them from interfering with Sidious' plans. Maul killed Jinn, but was cut in half by Kenobi, and was sent plummeting into a reactor shaft.

Fueled by his anger and hatred, Maul survived and ended up on Lotho Minor, where he lived in insanity for nearly twelve years. He was found by his brother, Savage Opress, and his mind was restored by Talzin. He sought to build a crime empire, forming the Shadow Collective with the Death Watch and eventually becoming the ruler of Mandalore and the Death Watch, achieving the latter through murder of Pre Viszla. However, Sidious learned of his return and decided he was a threat to the Rule of Two, taking on his former apprentice in battle. Sidious killed Opress and captured Maul, as he had use for his former apprentice still.

Maul eventually managed to escape Sidious' clutches and waged war on Sidious and his apprentice Dooku with Talzin and the Shadow Collective's help. However, the Shadow Collective was decimated and the Sith discovered Talzin and killed her. The remaining Mandalorians then took Maul away.</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
</div>
 <div style="position:absolute; top: -885px; left: 49%; background-color: black; width:100%;" class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="3-theories-about-star-wars-episode-7-the-force-awakens-you-don-t-know-the-power-of-the-664771.jpg" alt="...">
      <div style="background-color: black;" class="caption">
        <h3 style="color: yellow">DARTH VADER</h3>
        <p style="color:white">Anakin Skywalker was a Force-sensitive human male who served the Galactic Republic as a Jedi Knight, and later the Galactic Empire as the Sith Lord Darth Vader. Believed to have been conceived by the Force, he was born to Shmi Skywalker into a life of slavery on the Outer Rim world of Tatooine. At a young age, Skywalker was discovered by the Jedi Order, who freed Anakin from slavery and brought the boy into their community; hailing Skywalker as the Chosen One of Jedi prophecy, destined to defeat the Sith and bring balance to the Force.

In the years leading up to the devastating, galaxy-wide conflict known as the Clone Wars, Anakin was apprenticed to Obi-Wan Kenobi. Following the events of the Battle of Geonosis, -- the opening salvo which sparked the Clone War -- Skywalker secretly married his childhood love, Senator Padmé Amidala. As the war progressed, Skywalker saw very little of Amidala, prizing the moments the two were able to share with one another. Early in the course of the war, the Jedi High Council assigned Anakin a Padawan of his own, Ahsoka Tano; a gifted student who, much to Skywalker's chagrin, eventually left the Order.</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
</div>
  <div style="position:absolute; left:49%; top:0px; background-color:black; width: 100%;" class="row">
<div class="col-sm-4 col-md-4">
    <div class="thumbnail">
      <img src="EP7_IA_30964_R-1536x864.jpg" alt="...">
      <div style="background-color:black;" class="caption">
        <h3 style="color:yellow;">IMAGINING A DAY OF SCAVENGING ON JAKKU</h3>
        <p style="color:white;">Sun, miles of sand and not a tourists in sight…if that sounds like your ultimate winter vacation spot, then you’ll love to let your mind wander through the desert junkyards of Jakku!

It’s often said that “life is what happen when you’re making other plans.” Nobody plans to get stuck somewhere, but it’s often those unplanned adventures that make the best stories. Getting marooned on Jakku, like Rey in The Force Awakens, may seem like a miserable fate, but perhaps it could be fun (sometimes, anyway) if you could learn to make the most of it? Using your imagination could even lead you to some interesting places…</p>
        <p><a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-facetime-video" aria-hidden="true"></span> Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
  </div>
  </div>
  <div style="position: absolute; left:5%; top:1285px; color:white; width:90%; height:5%; background-color: black; text-align:center; "><hr><b>NEWS AND OUR BLOG //
  <hr></div>
  <img style="position:absolute; top:550px; left:44%;" src="kylo_ren_s_lightsaber_pixel_art_by_darbyarby-d9jgtmo.png">
<img style="position:absolute; top:1400px; left:48%;" src="lightsaber.png">
</body>
</html>
<!-- style="position:absolute; left:20%; height:100%; width:7%; background-color:black;" -->