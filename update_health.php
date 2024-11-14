<?php
session_start();
include './configs/config.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];

$weight = $_POST['weight'] ?? null;
$height = $_POST['height'] ?? null;
$age = $_POST['age'] ?? null;
$gender = $_POST['gender'] ?? null;
$activity_level = $_POST['activity_level'] ?? null;

$sql = "UPDATE users SET weight = ?, height = ?, age = ?, gender = ?, activity_level = ? WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ddssss", $weight, $height, $age, $gender, $activity_level, $username);

if (!$stmt->execute()) {
    echo "Error updating details: " . $conn->error;
} else {
    header("Location: dashboard.php");
}
$stmt->close();
$conn->close();