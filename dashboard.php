<?php
// dashboard.php
session_start();
require_once 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Optional: Fetch additional user data from DB if needed
// $stmt = $conn->prepare("SELECT email FROM users WHERE id = ?");
// $stmt->bind_param("i", $_SESSION['user_id']);
// $stmt->execute();
// $stmt->bind_result($email);
// $stmt->fetch();
// $stmt->close();
?>

<h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
<p>This is your dashboard.</p>
<a href="logout.php">Logout</a>
