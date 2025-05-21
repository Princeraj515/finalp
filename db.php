<?php
// db.php — Database connection file

// Replace these with your actual InfinityFree MySQL credentials
$host = 'sql312.infinityfree.com';     // e.g., sql304.infinityfree.com
$db   = 'if0_39044245_College_Alumni';       // your actual DB name
$user = 'if0_39044245';                // your DB username
$pass = 'xfOcq3Shwnre';               // your DB password

$conn = new mysqli($host, $user, $pass, $db);

// Check for connection error
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
