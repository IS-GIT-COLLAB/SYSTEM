<?php
$db_host      = ''; // Database host, e.g., 'localhost' or '
$db_user      = ''; // Database user, e.g., 'root'
$db_database  = ''; // Database name, e.g., 'my_database'
$db_pass      = ''; // Database password, e.g., 'password123'

$conn = new mysqli($db_host, $db_user, $db_pass, $db_database);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
