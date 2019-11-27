<?php
	session_start();
	header('Content-type: text/html; charset=utf-8');
	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
	$servername = "localhost";
	$username = "victor_root";
	$password = "psrmpartidunionist";

	try {
		$conn = new PDO("mysql:host=$servername;dbname=victor_votare;charset=utf8", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	}
?>