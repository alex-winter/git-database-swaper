<?php
	require('database.class.php');
	$server = Server::get();

	$database = $_POST['database'];

	$server->exec("DROP DATABASE $database")
?>