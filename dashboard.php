<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-50 text-gray-800">
    <?php include 'navbar.php'; ?>


    <!-- Dashboard Page Content -->
    <section class="container mx-auto px-4 py-16">
        <h1 class="text-4xl font-bold text-green-600 text-center mb-8">Welcome to Your Dashboard</h1>
        <div class="text-center">
            <p class="text-xl">Hello, <span class="font-semibold"><?php echo htmlspecialchars($username); ?></span>! You
                are successfully logged in.</p>
        </div>
        <div class="mt-8 text-center">
            <a href="logout.php" class="text-green-600 underline">Logout</a>
        </div>
    </section>
    <?php include 'footer.php'; ?>


</body>

</html>