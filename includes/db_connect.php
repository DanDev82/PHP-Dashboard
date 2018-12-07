<?php

  $db = 'esp';
  $host = 'localhost';
  $username = 'root';
  $password = '';

  $conn = mysqli_connect($host, $username, $password, $db);

  if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
}

?>






