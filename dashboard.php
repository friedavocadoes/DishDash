<?php
session_start();
include 'config.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];

$sql = "SELECT username, email, weight, height, other_health_details FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$user = $stmt->get_result()->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800">
    <?php include 'navbar.php'; ?>


    <h1 class="text-4xl font-bold text-green-600 text-center mt-10">Dashboard</h1>
    <div class="container mx-auto px-4 py-16 pt-10 flex">


        <aside class="flex flex-col w-1/4 bg-white p-6 shadow-md rounded">
            <img src="https://via.placeholder.com/150" alt="Profile Picture"
                class="rounded-full w-24 mx-auto mb-4 mt-10">
            <h2 class="text-center text-2xl font-semibold"><?php echo htmlspecialchars($user['username']); ?></h2>
            <p class="text-center text-gray-600 mb-4"><?php echo htmlspecialchars($user['email']); ?></p>
            <a href="logout.php" class="mx-auto"><button
                    class=" mt-12 bg-red-500 hover:bg-red-800 p-2 px-3 rounded-lg">Logout</button></a>
        </aside>


        <section class="w-3/4 bg-white shadow-md rounded p-8 ml-8">
            <h1 class="text-3xl font-bold text-green-600 mb-4">Health Information</h1>


            <form action="update_health.php" method="POST">
                <div class="mb-4">
                    <label for="weight" class="block text-gray-700 font-semibold">Weight (kg):</label>
                    <input type="text" id="weight" name="weight"
                        value="<?php echo htmlspecialchars($user['weight'] ?? ''); ?>"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded">
                </div>

                <div class="mb-4">
                    <label for="height" class="block text-gray-700 font-semibold">Height (cm):</label>
                    <input type="text" id="height" name="height"
                        value="<?php echo htmlspecialchars($user['height'] ?? ''); ?>"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded">
                </div>

                <div class="mb-4">
                    <label for="other_health_details" class="block text-gray-700 font-semibold">Other Health
                        Details:</label>
                    <textarea id="other_health_details" name="other_health_details"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded"><?php echo htmlspecialchars($user['other_health_details'] ?? ''); ?></textarea>
                </div>

                <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Save
                    Details</button>
            </form>
        </section>
    </div>

    <?php include 'footer.php'; ?>

</body>

</html>