<?php

$host = 'localhost';
$user = 'root';
$pass = 'qth1999ha!!';
$db_name = 'blog';

$conn = new MySQLi($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die('Database connection error: ' . $conn->connect_error);
}
