<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration Page</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/font-awesome.min.css">	
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
	
</head>
<body style="background-image: url(maxresdefault.jpg);">
<div style="margin-top: 20%;" class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div style="background-color: black;" class="panel panel-default">
        		<div style="background-color: black;" class="panel-heading">
			    		<h3 style="color: yellow;" class="panel-title">Sign up for Star Wars! <small style="color: white;">It's free!</small></h3>
			 			</div>
			 			<div class="panel-body">
			    		<form action="adduser.php" enctype="multipart/form-data" method="post" required>
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="username" id="first_name" class="form-control input-sm" placeholder="First Name" required>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="surname" id="last_name" class="form-control input-sm" placeholder="Last Name" required>
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
			    				<input type="text" name="login" id="email" class="form-control input-sm" placeholder="Login" required>
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password" required>
			    					</div>
			    				</div>
			    			</div>
			    			
			    			<a href="GamesStar.html"><input type="submit" value="Register" name="registr" class="btn btn-info btn-block"></a>
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>
</body>
</html>