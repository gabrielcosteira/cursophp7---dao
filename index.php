<?php
	require_once("config.php");

	$root = new usuario();

	$root-> loadbyId(1);

	echo $root;
?>