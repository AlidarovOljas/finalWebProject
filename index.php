<!doctype html>
<html lang="en">
<head>
  	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOGIN TO Star Wars</title>
	<link href="css/bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<style>
	body {
  background: url('video.png');
  background-size: cover;
}

.bgvideo {
  position: fixed;
  left: -9%;
  bottom: -19%;
  min-width: 125%;
  min-height: 125%;
  width: auto;
  height: auto;
  z-index: -9999;
}
.a{
	color:yellow;
}
</style>
<body>
<img style="position:absolute; width:200px; height;300px; top:42%; left:45%;" src="Jd6eU4K.png">
  <video autoplay loop muted class="bgvideo" id="bgvideo">
   <source src="starwarstrailer2.mp4" type="video/mp4"></source>
  </video>
  <form style="position: absolute; top:50%; width:20%; left:38%;" class="form-horizontal" action="login.php" enctype="multipart/form-data" method="post">
  <div class="form-group">
    <label style="color:#000000" for="inputEmail3" class="col-sm-2 control-label"></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Write the e-mail or the Username..." name="login">
    </div>
  </div>
  <div class="form-group">
    <label style="color:#000000" for="inputPassword3" class="col-sm-2 control-label"></label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Write the Password..." name="password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label style="color:#000000">
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">

    <input style="position:absolute; top:75%; left:55%;" type="submit" name="submit" value="Login" >
    </div>

  <a style="position:absolute; top:68%; left:75%;" href="registrationpage.php">Registration</a>
  </div>

</form>

</div>
</body>
</html>