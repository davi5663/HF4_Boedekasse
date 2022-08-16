<?php
$API_KEY = "zij1ZnrKTw6RD9bw";
$API_SECRET = "DTQdqOmfknViNr3mKmnJKPtDlAvYJGvn";
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