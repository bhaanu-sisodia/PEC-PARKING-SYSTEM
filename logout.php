<?php
session_start();

// Optional: Fetch user info before logout (for logging purposes)
$userId = $_SESSION['user_id'] ?? null;
$username = $_SESSION['username'] ?? null;
$name = $_SESSION['name'] ?? null;

// Optional: log or store logout activity
// file_put_contents('logout_log.txt', "User $username (ID: $userId) logged out at " . date('Y-m-d H:i:s') . "\n", FILE_APPEND);

// Clear session variables
session_unset();
session_destroy();

// Redirect to login
header("Location: index.php");
exit;
