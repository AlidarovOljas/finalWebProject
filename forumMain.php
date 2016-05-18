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
  <link rel="icon" href="starwarsicons-1-900x875.jpg">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/font-awesome.min.css">	 
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
  @media screen and *(max-width: 720px){  
    .asd{
      visibility: hidden;
    }
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
   	background-image: url(giphy8.gif);
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
   }
</style>
<body>
<div style="position:absolute; border: 1px solid white; z-index:2; width: 100%; left: -1px; height:30%; top:2100px; background-image: url(3-theories-about-star-wars-episode-7-the-force-awakens-you-don-t-know-the-power-of-the-664771.jpg); background-color:#000;  background-size:50%">
  <p style="color: gray; margin-top: 2%; text-align: center;">FOLLOW THE STAR WARS</p>
  <p style="color: gray; margin-top: 10%; text-align: center;">TM & © Lucasfilm Ltd. All Rights Reserved</p>
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
	<div class="col-md-12 col-xs-12" style="position:fixed; background-color: black; width:90%; height:100%;left:5%; border: 1px white;"><div>
  </div></div></div>
	<div style="position:absolute; width:100%; height:50%; background-color: white; top:0%" id="mydiv">
	<div class="col-md-12 col-xs-12" style="position:absolute; width:100%; height:10%; background-color:#292929; bottom:7%;">
   <a href="Star Wars.php"><button class="col-md-1 col-xs-1 btn btn-danger" style="position:absolute; left:0%; height:100%; width:20%; background-color:black;" type="button" aria-label="Left Align"><span style="color:#DF1F32;" class="glyphicon glyphicon-home" aria-hidden="true"></span>HOME</button></a>
    <a href="News +blog.php"><button class="col-md-1 col-xs-1 btn btn-danger" style="position:absolute; left:20%; height:100%; width:20%; background-color:black;" type="button" aria-label="Left Align"><span style="color:green;" class="glyphicon glyphicon-headphones" aria-hidden="true"></span> NEWS + BLOG</button></a>
    <a href="Films.php"><button class="col-md-1 col-xs-1 btn btn-danger" style="position:absolute; left:40%; height:100%; width:20%; background-color:black;" type="button" aria-label="Left Align"><span style="color:#92DF1F;" class="glyphicon glyphicon-fast-forward" aria-hidden="true"></span> FILMS</button></a>
    <a href="GamesStar.php"><button class="col-md-1 col-xs-1 btn btn-danger" style="position:absolute; left:60%; height:100%; width:20%; background-color:black;" type="button" aria-label="Left Align"><span style="color:#1FDECB;" class="glyphicon glyphicon-phone" aria-hidden="true"></span>GAMES + APPS</button></a>
    <a href="ForumMain.php"><button class="col-md-1 col-xs-1 btn btn-primary" style="position:absolute; left:80%; height:100%; width:20%; background-color:black;" type="button" aria-label="Left Align"><span style="color:#DF1F32;" class="glyphicon glyphicon-cloud" aria-hidden="true"></span> FORUM</button></a>
    </div>
    <div id="social-media-icons">
  <a href="https://www.youtube.com/user/starwars"><img src="Icons/YouTube.png"/></a>
  <a href="https://www.facebook.com/StarWars/"><img src="Icons/Facebook.png"/></a>
  <a href="https://plus.google.com/+StarWars"><img src="Icons/Google+.png"/></a>
  <a href="https://www.instagram.com/starwars/"><img src="Icons/Instagram.png"/></a>
  <a href="http://starwars.tumblr.com/"><img src="Icons/Tumblr.png"/></a>
  <a href="https://twitter.com/starwars"><img src="Icons/Twitter.png"/></a>
  <a href="http://www.disney.com/"></a><h3 style="color: white; display: inline-block;">|<small style="color: white;">Show Disney.com</small></h3></a>
  </div>
	<div style="position:absolute; width:100%; height:7%; background-color: black; bottom:0%;">
		<button style="position:absolute; left:5%; height:100%; background-color:black;" type="button" class="btn btn-default" aria-label="Left Align"><span style="color:#DF1F32;" class="glyphicon glyphicon-align-left" aria-hidden="true"></span></button>
		<p style="position:absolute; left:7.5%; top:20%; color:yellow;">STAR WARS: THE FORCE AWEKENS</p>
		<a href="#"><button style="position:absolute; color:black; left:88%; height:100%; width:7%; top:0%; background-color:yellow;" type="button" class="btn btn-danger">TICKETS</button></a>
	</div>
	</div>

<img style="position:absolute; width:180px; height:70px; top:54%; left:45%;" src="Starwars-logo.png">
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
  ?></div></a>
      </form>

      <!--Twitter-->
		<a style="position:absolute; top:5%;" href="https://twitter.com/share" class="twitter-share-button" data-via="OljasA">Tweet</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		<img class= "asd" style="position:absolute; left:50%; width:25%; height:135%; top:-15%;" src="SW.png"/>
    </div>

  </div>
</nav>
  </div>
  <div style="position: absolute; text-align: center; width: 90%; top: 650px; left: 5%; color: white;">
  <?php 
  session_start();
  error_reporting(0);
  if ($_SESSION['login']!=NULL) {
    $log=$_SESSION['login'];
  }

if(isset($_GET['idtheme'])){
  $idTH = $_GET['idtheme'];
}else{
  $idTH=0;
}
$conn = mysqli_connect('localhost','root','','database2') or die("Unable to connect");

 ?>
 <?php 
  if ($log=="AlidarovOljas") {
  ?>
<h3 style="color: yellow;">ADD THEME</h3>

<form method="post">
        <input style="color: black;" type="text" name="theme"></input>
        <input style="color: black;" type="submit" name="sub2" value="Theme"></input>
</form>
<?php 
  }

 ?>
<?php 
  if(isset($_POST['sub2'])){
    $theme = $_POST['theme'];

    $sql4 = "INSERT INTO forum VALUES (null,'$theme')";
    if($res4 = mysqli_query($conn,$sql4)){
      echo "ADDED! $sql4";
    }
  }
 ?>

<h3 style="color: yellow;">THEMES</h3>

 <?php

$sql = "SELECT * from forum";
  if ($res = mysqli_query($conn, $sql)) {
    while ($row = $res->fetch_assoc()) {
      echo "<a href=forumMain.php?idtheme=".$row['id'].">".$row['nametheme']."</a><br>";
    }
  }
  
 ?>

<?php 
  if($idTH!=0){
    $sql1 = "SELECT * from forum WHERE id='$idTH'";
      if ($res1 = mysqli_query($conn, $sql1)) {
        while ($row1 = $res1->fetch_assoc()) {
          echo "<h3 style='color: yellow;'>Your Selected(forum theme): ".$row1['nametheme']." !</h3>";
        }
      }
        
      ?>
      <form method="post">
        <textarea style="color: black; width: 1700px;" name="com"></textarea>
        <input style="color: black;" type="submit" name="sub1" value="Say!"></input>
      </form>
      <?php 
        if (isset($_POST['sub1'])) {
          $comm = $_POST['com'];
          $ldt = date("Y-m-d H:i:s");
          $sql2 = "INSERT INTO innerforum VALUES (null, $idTH, '$log', '$comm', '$ldt')";
          if($res2 = mysqli_query($conn,$sql2)){        
            echo "<br>YOUR COMMEND WAS ADDED!<br>";
          }

        }
       ?>
      <?php
      $sql3 = "SELECT * from innerforum WHERE fid='$idTH' order by ldate ASC";
      if ($res3 = mysqli_query($conn, $sql3)) {
        echo "<table >";
        while ($row3 = $res3->fetch_assoc()) {
          echo "<tr><td>Who:</td><td>".$row3['ulog']."</td><td>Time:</td><td> ".$row3['ldate']."</td></tr><tr><td> What:</td><td colspan=3>".$row3['commend']."</td></tr><tr><td colspan=4 ></td></tr></div>";
        }
        echo "</table>";
      }

      
      
  }else{
    echo "<h3>PLEASE CHOOSE THEME</h3>";
  }
 ?>

</div>
</body>
</html>