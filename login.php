<?php
session_start();
require 'connectdb.php'; // Include database connection

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($email) || empty($password)) {
        echo json_encode(["success" => false, "message" => "All fields are required."]);
        exit;
    }

    // Check if user exists
    $stmt = $conn->prepare("SELECT user_id, first_name, last_name, password_hash, role FROM Users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    
    if (!$user || !password_verify($password, $user['password_hash'])) {
        echo json_encode(["success" => false, "message" => "Invalid email or password."]);
        exit;
    }

    // Set session variables
    $_SESSION['user_id'] = $user['user_id'];
    $_SESSION['name'] = $user['first_name'] . " " . $user['last_name'];
    $_SESSION['role'] = $user['role'];

    echo json_encode(["success" => true, "message" => "Login successful!", "role" => $user['role']]);
    exit;
}
?>
