<?php
session_start();

if (isset($_POST['bio-submit'])) {

	require 'connection.php';

	$bio = $_POST['bio'];
	$idusers = $_SESSION['userid'];

	$sql = "SELECT biousers, idusers FROM users";
	
	$sql = "UPDATE users 
			SET biousers = '$bio'
			WHERE idusers = '$idusers'";

	if (empty($bio)) {
		echo "You didn't write anything";
	}
	else{
		if ($conn->query($sql) === TRUE) {
			header("Location: ../profile.php");
			exit();
			echo "Your bio has benn successefuly changed";
		}
		else{
			echo "Error: ". $sql ."</br>" . $conn->error;
			header("Location: ../edit-profile.php");
			exit();
		}
	}
}
if (isset($_POST['bio-cancel'])) {
	header("Location: ../profile.php");
	exit();
}
?>