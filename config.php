<?php 
	session_start();


    $db = mysqli_connect('localhost', 'root', '', 'beadando');

	if (!$db) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
?>