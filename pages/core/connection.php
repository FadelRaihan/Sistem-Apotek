<?php
date_default_timezone_set('Asia/Jakarta');

$databaseHost = 'localhost';
$databaseName = 'db_apotek';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
 
?>