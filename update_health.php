<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $other_health_details = $_POST['other_health_details'];

    $sql = "UPDATE users SET weight = ?, height = ?, other_health_details = ? WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ddss", $weight, $height, $other_health_details, $username);

    if ($stmt->execute()) {
        header("Location: dashboard.php?success=1");
    } else {
        header("Location: dashboard.php?error=1");
    }
}
?>