<?php 

include_once 'connection.php';

$queryselect = $link->query("select * from tb_accounts");
while($registros = $queryselect->fetch_assoc()){
	$email = $registros['email'];
	$name = $registros['name'];
	$password = $registros['password'];

	echo "<tr>";
	echo "<td>$email</td></br><td>$name</td></br><td>$password</td></br>";
	echo "</tr>";
}

?>