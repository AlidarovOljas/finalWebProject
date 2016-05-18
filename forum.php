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
<h3>ADD THEME</h3>

<form method="post">
				<input type="text" name="theme"></input>
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

<h3>THEMES</h3>

 <?php

$sql = "SELECT * from forum";
	if ($res = mysqli_query($conn, $sql)) {
		while ($row = $res->fetch_assoc()) {
			echo "<a href=forum.php?idtheme=".$row['id'].">".$row['nametheme']."</a><br>";
		}
	}
	
 ?>

<?php 
	if($idTH!=0){
		$sql1 = "SELECT * from forum WHERE id='$idTH'";
			if ($res1 = mysqli_query($conn, $sql1)) {
				while ($row1 = $res1->fetch_assoc()) {
					echo "<h3>Your Selected(forum theme): ".$row1['nametheme']." !</h3>";
				}
			}
				
			?>
			<form method="post">
				<textarea name="com"></textarea>
				<input style="color: black;" type="submit" name="sub1" value="Say!"></input>
			</form>
			<?php 
				if (isset($_POST['sub1'])) {
					$comm = $_POST['com'];
					$ldt = date("Y-m-d H:i:s");
					$sql2 = "INSERT INTO innerforum VALUES (null, $idTH, '$log', '$comm', '$ldt')";
					if($res2 = mysqli_query($conn,$sql2)){				
						echo "<br>ADDED!<br>";
					}

				}
			 ?>
			<?php
			$sql3 = "SELECT * from innerforum WHERE fid='$idTH' order by ldate ASC";
			if ($res3 = mysqli_query($conn, $sql3)) {
				echo "<table >";
				while ($row3 = $res3->fetch_assoc()) {
					echo "<tr><td>Who:</td><td>".$row3['ulog']."</td><td>Time:</td><td> ".$row3['ldate']."</td></tr><tr><td> What:</td><td colspan=3>".$row3['commend']."</td></tr><tr><td colspan=4 ></td></tr>";
				}
				echo "</table>";
			}

			
			
	}else{
		echo "<h3>PLEASE CHOOSE THEME</h3>";
	}
 ?>

