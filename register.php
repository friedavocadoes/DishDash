<?php
session_start();
require './configs/config.php';

if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}

$err = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $err = "Username or email already exists.";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $hashed_password);

        if ($stmt->execute()) {
            $_SESSION['username'] = $username;
            header("Location: index.php");
        } else {
            $err = "Registration failed.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DishDash | Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800">
    <?php include './components/navbar.php'; ?>

    <section class="container mx-auto px-4 py-16">
        <h1 class="text-4xl font-bold text-green-600 text-center mb-8">Register</h1>
        <form method="POST" class="flex flex-col max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
            <input type="text" name="username" placeholder="Username"
                class="w-full p-2 mb-4 border border-gray-300 rounded">
            <input type="email" name="email" placeholder="Email" class="w-full p-2 mb-4 border border-gray-300 rounded">
            <input type="password" name="password" placeholder="Password"
                class="w-full p-2 mb-4 border border-gray-300 rounded">
            <span class="mx-auto text-red-600 mb-4"><?php echo $err ?></span>
            <button type="submit" class="w-full bg-green-600 text-white py-2 rounded">Register</button>

            <span class="mt-2 ml-1"><a href="login.php" class="text-blue-600 hover:text-blue-400">Log In</a>
                instead?</span>
        </form>
    </section>

    <?php include './components/footer.php'; ?>

</body>

</html>