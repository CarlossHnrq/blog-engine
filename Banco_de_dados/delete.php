<?php 
include_once 'connection.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
$querydelete = $link->query("delete from tb_accounts where id='$id'");

if(mysqli_affected_rows($link) > 0 ){
	header("location:../");
}

?>