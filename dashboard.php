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
    <title>DishDash | User Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-r from-blue-100 via-indigo-100 to-white text-gray-800">
    <?php include './components/navbar.php'; ?>

    <div class="container mx-auto px-6 py-16 mt-12">
        <h1 class="text-4xl font-bold text-center text-indigo-800 mb-12">Welcome to Your Dashboard</h1>

        <!-- Dashboard Wrapper -->
        <div class="flex flex-col md:flex-row gap-8">
            <!-- Profile Sidebar -->
            <aside class="flex flex-col w-full md:w-1/4 bg-white shadow-lg rounded-lg p-20">
                <div class="flex flex-col items-center">
                    <img src="https://via.placeholder.com/150" alt="Profile Picture"
                        class="rounded-full w-32 h-32 mb-6">
                    <h2 class="text-2xl font-semibold text-gray-800"><?php echo htmlspecialchars($user['username']); ?>
                    </h2>
                    <p class="text-gray-600 mb-4"><?php echo htmlspecialchars($user['email']); ?></p>
                    <a href="logout.php" class="w-full">
                        <button
                            class="w-full bg-red-500 text-white py-2 px-4 rounded-lg shadow-md hover:bg-red-600 transition duration-300">
                            Logout
                        </button>
                    </a>
                </div>
            </aside>

            <!-- Health Information Section -->
            <section class="w-full md:w-3/4 bg-white shadow-lg rounded-lg p-8">
                <h2 class="text-3xl font-bold text-indigo-800 mb-6">Health Information</h2>
                <form action="update_health.php" method="POST" class="flex flex-col space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Age Input -->
                        <div class="mb-4">
                            <label for="age" class="block text-gray-700 font-semibold">Age</label>
                            <input type="number" id="age" name="age" min="0"
                                value="<?php echo htmlspecialchars($user['age'] ?? ''); ?>"
                                class="mt-1 block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                placeholder="Enter your age">
                        </div>
                        <!-- Gender Input -->
                        <div class="mb-4">
                            <label for="gender" class="block text-gray-700 font-semibold">Gender</label>
                            <select id="gender" name="gender"
                                class="mt-1 block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                <option value="">Select Gender</option>
                                <option value="Male" <?php echo (isset($user['gender']) && $user['gender'] == 'Male') ? 'selected' : ''; ?>>Male</option>
                                <option value="Female" <?php echo (isset($user['gender']) && $user['gender'] == 'Female') ? 'selected' : ''; ?>>Female</option>
                                <option value="Other" <?php echo (isset($user['gender']) && $user['gender'] == 'Other') ? 'selected' : ''; ?>>Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Weight Input -->
                        <div class="mb-4">
                            <label for="weight" class="block text-gray-700 font-semibold">Weight (kg)</label>
                            <input type="text" id="weight" name="weight"
                                value="<?php echo htmlspecialchars($user['weight'] ?? ''); ?>"
                                class="mt-1 block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                placeholder="Enter your weight in kg">
                        </div>
                        <!-- Height Input -->
                        <div class="mb-4">
                            <label for="height" class="block text-gray-700 font-semibold">Height (cm)</label>
                            <input type="text" id="height" name="height"
                                value="<?php echo htmlspecialchars($user['height'] ?? ''); ?>"
                                class="mt-1 block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                placeholder="Enter your height in cm">
                        </div>
                    </div>

                    <div class="mb-6">
                        <label for="activity_level" class="block text-gray-700 font-semibold">Activity Level</label>
                        <select id="activity_level" name="activity_level"
                            class="mt-1 block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            <option value="">Select Activity Level</option>
                            <option value="Sedentary" <?php echo (isset($user['activity_level']) && $user['activity_level'] == 'Sedentary') ? 'selected' : ''; ?>>Sedentary</option>
                            <option value="Lightly Active" <?php echo (isset($user['activity_level']) && $user['activity_level'] == 'Lightly Active') ? 'selected' : ''; ?>>Lightly Active</option>
                            <option value="Moderately Active" <?php echo (isset($user['activity_level']) && $user['activity_level'] == 'Moderately Active') ? 'selected' : ''; ?>>Moderately Active
                            </option>
                            <option value="Very Active" <?php echo (isset($user['activity_level']) && $user['activity_level'] == 'Very Active') ? 'selected' : ''; ?>>Very Active</option>
                            <option value="Super Active" <?php echo (isset($user['activity_level']) && $user['activity_level'] == 'Super Active') ? 'selected' : ''; ?>>Super Active</option>
                        </select>
                    </div>

                    <button type="submit"
                        class="w-1/3 mx-auto bg-indigo-900 text-white py-3 rounded-xl shadow-md hover:bg-indigo-700 transition duration-300">
                        Save Details
                    </button>
                </form>
            </section>
        </div>
    </div>

    <?php include './components/footer.php'; ?>
</body>

</html>