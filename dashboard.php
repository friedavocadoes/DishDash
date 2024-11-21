<?php
session_start();
include './configs/config.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];

$sql = "SELECT username, email, weight, height, age, gender, activity_level FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
if (!$stmt) {
    die("Error preparing statement: " . $conn->error);
}
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
    <?php include './components/navbar.php'; ?>

    <h1 class="text-4xl font-bold text-green-600 text-center mt-10">Dashboard</h1>
    <div class="container mx-auto px-4 py-16 pt-10 flex flex-col md:flex-row gap-8">
        <aside class="flex flex-col w-full md:w-1/4 bg-white p-6 shadow-md rounded">
            <img src="https://via.placeholder.com/150" alt="Profile Picture"
                class="rounded-full w-24 mx-auto mb-4 mt-10">
            <h2 class="text-center text-2xl font-semibold"><?php echo htmlspecialchars($user['username']); ?></h2>
            <p class="text-center text-gray-600 mb-4"><?php echo htmlspecialchars($user['email']); ?></p>
            <a href="logout.php" class="mx-auto">
                <button class="mt-12 bg-red-500 hover:bg-red-800 p-2 px-3 rounded-lg">Logout</button>
            </a>
        </aside>

        <section class="w-full md:w-3/4 bg-white shadow-md rounded p-8">
            <h1 class="text-3xl font-bold text-green-600 mb-4">Health Information</h1>
            <form action="update_health.php" method="POST">
                <div class="mb-4">
                    <label for="age" class="block text-gray-700 font-semibold">Age:</label>
                    <input type="number" id="age" name="age" min="0"
                        value="<?php echo htmlspecialchars($user['age'] ?? ''); ?>"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded" placeholder="Enter your age">
                </div>
                <div class="mb-4">
                    <label for="gender" class="block text-gray-700 font-semibold">Gender:</label>
                    <select id="gender" name="gender" class="mt-1 block w-full p-2 border border-gray-300 rounded">
                        <option value="">Select Gender</option>
                        <option value="Male" <?php echo (isset($user['gender']) && $user['gender'] == 'Male') ? 'selected' : ''; ?>>Male</option>
                        <option value="Female" <?php echo (isset($user['gender']) && $user['gender'] == 'Female') ? 'selected' : ''; ?>>Female</option>
                        <option value="Other" <?php echo (isset($user['gender']) && $user['gender'] == 'Other') ? 'selected' : ''; ?>>Other</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="weight" class="block text-gray-700 font-semibold">Weight (kg):</label>
                    <input type="text" id="weight" name="weight"
                        value="<?php echo htmlspecialchars($user['weight'] ?? ''); ?>"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded"
                        placeholder="Enter your weight in kg">
                </div>
                <div class="mb-4">
                    <label for="height" class="block text-gray-700 font-semibold">Height (cm):</label>
                    <input type="text" id="height" name="height"
                        value="<?php echo htmlspecialchars($user['height'] ?? ''); ?>"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded"
                        placeholder="Enter your height in cm">
                </div>
                <div class="mb-4">
                    <label for="activity_level" class="block text-gray-700 font-semibold">Activity Level:</label>
                    <select id="activity_level" name="activity_level"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded">
                        <option value="">Select Activity Level</option>
                        <option value="Sedentary" <?php echo (isset($user['activity_level']) && $user['activity_level'] == 'Sedentary') ? 'selected' : ''; ?>>Sedentary</option>
                        <option value="Lightly Active" <?php echo (isset($user['activity_level']) && $user['activity_level'] == 'Lightly Active') ? 'selected' : ''; ?>>Lightly Active</option>
                        <option value="Moderately Active" <?php echo (isset($user['activity_level']) && $user['activity_level'] == 'Moderately Active') ? 'selected' : ''; ?>>Moderately Active
                        </option>
                        <option value="Very Active" <?php echo (isset($user['activity_level']) && $user['activity_level'] == 'Very Active') ? 'selected' : ''; ?>>Very Active</option>
                        <option value="Super Active" <?php echo (isset($user['activity_level']) && $user['activity_level'] == 'Super Active') ? 'selected' : ''; ?>>Super Active</option>
                    </select>
                </div>
                <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Save
                    Details</button>
            </form>
        </section>
    </div>

    <?php include './components/footer.php'; ?>

</body>

</html>