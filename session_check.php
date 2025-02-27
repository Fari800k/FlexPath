<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit;
}

// Role-based access control
$currentPage = basename($_SERVER['PHP_SELF']);

if ($currentPage == "admin-dashboard.php" && $_SESSION['role'] !== "admin") {
    header("Location: trainer-dashboard.php");
    exit;
}

if ($currentPage == "trainer-dashboard.php" && $_SESSION['role'] !== "trainer") {
    header("Location: admin-dashboard.php");
    exit;
}

if ($currentPage == "client-dashboard.php" && $_SESSION['role'] !== "client"){
    header("Location: client-dashboard.php"); 
}
?>

