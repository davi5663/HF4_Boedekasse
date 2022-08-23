<?php
$API_KEY = "WsGzwgwinKE8u3Nx";
$API_SECRET = "Fp5Nm0KFRKPfVuoRW5qtlXMIHqRcuEK9";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "finedb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully <br> <br> <br>";