<?php echo "HEllO";?>

<?php 
session_start();
include 'connection.php';

if (isset($_POST['registr'])) {
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$username = $_POST['username'];
	$login = $_POST['login'];
	$password = $_POST['password'];
	$sql = "INSERT INTO users (login, password, name, surname) VALUES ('".$login."', '".$password."', '".$username."','".$surname."' )";
	if (mysqli_query($conn, $sql)) {
		$_SESSION['login'] = $login;
    	header('location: index2.php');
	} else {
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}else{
	// header('location: registrationpage.php');
	echo "error no post is set";
}
?>