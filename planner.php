<?php
session_start();
include './configs/config.php';

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
    <title>Meal Planner</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800">
    <?php include './components/navbar.php'; ?>

    <div class="container mx-auto px-4 py-8 flex">
        <!-- Sidebar -->
        <aside class="w-1/4 bg-white shadow-md rounded p-6">
            <h2 class="text-2xl font-semibold text-green-600 mb-4">User Info</h2>
            <p class="text-gray-700">Logged in as:</p>
            <p class="font-semibold"><?php echo htmlspecialchars($username); ?></p>
        </aside>

        <!-- Main Content -->
        <section class="w-3/4 bg-white shadow-md rounded p-8 ml-8">
            <h1 class="text-3xl font-bold text-green-600 mb-4">Plan Your Meals</h1>

            <!-- Meal Planning Form -->
            <form id="mealPlannerForm" action="meal_planner.php" method="POST">
                <!-- Dietary Preference -->
                <div class="mb-4">
                    <label for="diet" class="block text-gray-700 font-semibold">Dietary Preference:</label>
                    <select id="diet" name="diet" class="mt-1 block w-full p-2 border border-gray-300 rounded">
                        <option value="">Select a diet</option>
                        <option value="Vegetarian">Vegetarian</option>
                        <option value="Vegan">Vegan</option>
                        <option value="Keto">Keto</option>
                        <option value="Paleo">Paleo</option>
                        <option value="Omnivorous">Omnivorous</option>
                    </select>
                </div>

                <!-- Allergies -->
                <div class="mb-4">
                    <label for="allergies" class="block text-gray-700 font-semibold">Allergies:</label>
                    <input type="text" id="allergies" name="allergies" placeholder="e.g., Nuts, Gluten, Dairy"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded">
                </div>

                <!-- Caloric Intake -->
                <div class="mb-4">
                    <label for="calories" class="block text-gray-700 font-semibold">Caloric Intake (kcal):</label>
                    <input type="number" id="calories" name="calories" placeholder="e.g., 2000"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded">
                </div>

                <!-- Number of Meals -->
                <div class="mb-4">
                    <label for="meals" class="block text-gray-700 font-semibold">Number of Meals:</label>
                    <input type="number" id="meals" name="meals" placeholder="e.g., 3"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded">
                </div>

                <!-- Preferred Cuisine -->
                <div class="mb-4">
                    <label for="cuisine" class="block text-gray-700 font-semibold">Preferred Cuisine:</label>
                    <input type="text" id="cuisine" name="cuisine" placeholder="e.g., Indian, Italian, Chinese"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded">
                </div>

                <!-- Submit Button -->
                <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Generate Meal
                    Plan</button>
            </form>
        </section>
    </div>

    <?php include './components/footer.php'; ?>
</body>

</html>