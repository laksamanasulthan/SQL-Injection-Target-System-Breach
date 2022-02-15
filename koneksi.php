<?php 
$koneksi = new mysqli("localhost","root","","sistem_keamanan");

// Check connection
if ($koneksi -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
} 

?>