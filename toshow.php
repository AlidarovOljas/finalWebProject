<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
  <link rel="icon" href="starwarsicons-1-900x875.jpg">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
	<title>Account</title>
	<style type="text/css">
	#image img{
 border: 1px solid #85A0C9; border-radius: 300px; -webkit-border-radius: 600px; -moz-border-radius: 300px; width: 200px; height: 200px;
	}
	</style>
</head>
<body id="image" style="background-image: url(ItmVuT6.jpg); color: white;">
<div style="position: absolute; top: 25%; left: 43%;">
<?php
session_start();
include 'connection.php';
$login = $_SESSION['login'];
$sql = " SELECT * from users WHERE login=\"$login\" ";
$l = mysqli_fetch_assoc(mysqli_query($conn,$sql));
$userid = $l['id'];
$sql2 = "SELECT * from pictures where userid='".$userid."' ";
$row = mysqli_fetch_assoc(mysqli_query($conn,$sql2));
$url = $row['url'];
if (isset($_POST['show'])) {
	echo "<img src=$url>";
}
?>
</div>
<div style="position:absolute; border: 1px solid white; z-index:2; width: 100%; left: -1px; height:30%; top:680px; background-image: url(3-theories-about-star-wars-episode-7-the-force-awakens-you-don-t-know-the-power-of-the-664771.jpg); background-color:#000;  background-size:50%">
  <p style="color: gray; margin-top: 2%; text-align: center;">FOLLOW THE STAR WARS</p>
  <p style="color: gray; margin-top: 10%; text-align: center;">TM & © AlidarovFilm Ltd. All Rights Reserved</p>
  </div>
  </div>
<h1 style="position: absolute; top: 100px; left: 610px; color: yellow;">WELCOME TO STAR WARS <?php echo $_SESSION['login'];?>!</h1>
<p style="position: absolute; top: 500px; left: 520px; color: white;">Login: <?php echo $_SESSION['login'];?></p>
<p style="position: absolute; top: 520px; left: 520px; color: white;">Name: <?php echo $_SESSION['name'];?></p>
<p style="position: absolute; top: 540px; left: 520px; color: white;">Surname: <?php echo $_SESSION['surname'];?></p>
<p style="position: absolute; top: 560px; left: 520px; color: white;">Password: <?php echo $_SESSION['password'];?></p>
<a href="index2.php"><input style="position: absolute; top: 650px; left: 700px;" type="submit" value="Back" name="login"></input></a>
<a href="Star Wars.php"><input style="position: absolute; top: 650px; left: 1100px;" type="submit" value="Main Page" name="login"></input></a>
</body>
</html>