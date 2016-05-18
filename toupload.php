<?php
session_start();
include 'connection.php';
if (!isset($_POST['submit'])) {
	header("Location:Log In.php");
}

$login = $_SESSION['login'];
$sql="SELECT * from users WHERE login=\"$login\" ";
$row = mysqli_fetch_assoc(mysqli_query($conn,$sql));
$id = $row['id'];
$f_name = "images/";
$p_name = $id.$count."_image.jpg";
$full_path = $f_name.$p_name;

if(is_uploaded_file($_FILES['img']['tmp_name'])){
	move_uploaded_file($_FILES['img']['tmp_name'], $full_path);
	$sql = "INSERT INTO pictures (userid, url) values ('".$id."','".$full_path."')";
	mysqli_query($conn, $sql);
 	header("Location:index2.php");
}
?>