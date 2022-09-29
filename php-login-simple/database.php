<?php

$server = 'us-cdbr-east-06.cleardb.net';
$username = 'b745adefd9c8f9';
$password = 'e5f4734c';
$database = 'heroku_1bf355e7e5cd68b';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
