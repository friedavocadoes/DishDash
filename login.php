<?php
session_start();
require './configs/config.php'; // Connect to the database

if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}

$err = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $username;
            header("Location: dashboard.php"); // Redirect to homepage
        } else {
            $err = "Invalid password.";
        }
    } else {
        $err = "User does not exist.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DishDash | Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800">
    <?php include './components/navbar.php'; ?>
    <!-- Login Form -->
    <section class="container mx-auto px-4 py-16">
        <h1 class="text-4xl font-bold text-green-600 text-center mb-8">Login</h1>
        <form method="POST" class="flex flex-col max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
            <input type="text" name="username" placeholder="Username"
                class="w-full p-2 mb-4 border border-gray-300 rounded">
            <input type="password" name="password" placeholder="Password"
                class="w-full p-2 mb-4 border border-gray-300 rounded">
            <span class="mx-auto text-red-600 mb-4"><?php echo $err ?></span>
            <button type="submit" class="w-full bg-green-600 text-white py-2 rounded">Login</button>
            <span class="mt-2 ml-1"><a href="register.php" class="text-blue-600 hover:text-blue-400">SignUp</a>
                instead?</span>
        </form>
    </section>

    <?php include './components/footer.php'; ?>


</body>

</html>