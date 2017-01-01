<?php
	$dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
	$dbname = 'final';
    $db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die('Error with MySQL connection');
	mysqli_set_charset($db, "utf8");
?>