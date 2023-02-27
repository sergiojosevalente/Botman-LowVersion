<?php

$host = "localhost";
$user = "odp";
$pass = "@odp#2023";
$db   = "dbodp";

// $host = "localhost";
// $user = "root";
// $pass = "";
// $db   = "get_attached";

$mysqli = new mysqli($host, $user, $pass, $db);

if (mysqli_connect_errno()) {
    error_log("Error: Could not connect to database.");
    exit;
}
