<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>upload</title>
	<style>
	img{max-width: 100%; max-height: 100%; margin:0 auto;}
	</style>
</head>
<body style="background-image: url(darth.jpg);">
	<div style="position: absolute; top: 30%; left: 40%; width: 400px; height: 400px; background-color: black; border: 2px solid white;">
	<img src="SW.png">
	<form style="position: absolute; top: 40%; left: 10%; color: yellow;" action="toupload.php" method = "POST" enctype="multipart/form-data">
		<input type="file" name = "img"/>
		<input type="submit" value = "Send"/>
	</form>
	<br>
	<form style="position: absolute; top: 50%; left: 10%;" action="toshow.php" method="POST" enctype="multipart/form-data">
		<input type="submit" value="Show" name="show">
	</form>
	</div>
</body>
</html>