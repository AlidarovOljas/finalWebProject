<?php 
session_start();
include 'connection.php';
if (isset($_POST['submit'])) {
	$login = $_POST['login'];
	$password = $_POST['password'];
	// $name = $_POST['name'];
	// $surname = $_POST['surname'];
	$sql = "SELECT * from users where login=\"$login\" AND password=\"$password\" ";
	$res = mysqli_query($conn, $sql);
	if (mysqli_num_rows($res)>0) {
		$_SESSION['login'] = $login;
		$row = mysqli_fetch_assoc($res);
		$_SESSION['name'] = $row['name'];
		$_SESSION['surname'] = $row['surname'];
		$_SESSION['password'] = $row['password'];
		// $_SESSION['name'] = $name;
		// $_SESSION['surname'] = $surname;
		// $_SESSION['password'] = $password;
		// echo $name;
		header('location:Star Wars.php');
	}
	else{
		header('location:Log In.php');}
}
?>
