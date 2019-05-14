<?php

if (isset($_POST['bio-submit'])) {

	require 'connection.php';

	$bio = $_POST['bio'];

	$queryupdate = "UPDATE users set bio='$bio'";
	$stmt = mysqli_stmt_init($conn);

}
