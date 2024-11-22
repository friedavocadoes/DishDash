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
    <style>
        .gradient-bg {
            background: linear-gradient(to top right, #6EE7B7, #3B82F6);
        }
    </style>
</head>

<body class="gradient-bg text-gray-800">

    <!-- Navbar -->
    <?php include './components/navbar.php'; ?>

    <div class="container mx-auto px-20 py-8 flex mt-24">
        <!-- Sidebar -->
        <aside class="w-1/4 bg-indigo-100 backdrop-blur-lg bg-opacity-45 shadow-lg rounded-sm p-10 pt-16 mr-8">
            <h2 class="text-2xl font-semibold text-indigo-600 mb-4">Create a Custom Meal</h2>
            <p class="text-gray-700 mb-6">
                Use Gemini to create a personalized meal plan for the day! Just fill in the details and let us do the
                work.
            </p>
            <p class="text-sm text-gray-500">Ensure you fill in all fields to get the best meal recommendations tailored
                to your preferences.</p>
        </aside>

        <!-- Main Content -->
        <section class="w-3/4 bg-gray-200 backdrop-blur-md bg-opacity-65 shadow-lg rounded-sm p-16">
            <h1 class="text-3xl font-bold text-indigo-600 mb-6 text-center">Plan Your Meals</h1>

            <!-- Meal Planning Form -->
            <form id="mealPlannerForm" action="meal_planner.php" method="POST">

                <!-- Dietary Preference -->
                <div class="mb-6">
                    <label for="diet" class="block text-gray-700 font-semibold mb-2">Dietary Preference:</label>
                    <select id="diet" name="diet"
                        class="mt-1 block w-full p-4 border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option value="">Select a diet</option>
                        <option value="Vegetarian">Vegetarian</option>
                        <option value="Vegan">Vegan</option>
                        <option value="Keto">Keto</option>
                        <option value="Paleo">Paleo</option>
                        <option value="Omnivorous">Omnivorous</option>
                    </select>
                </div>

                <!-- Allergies -->
                <div class="mb-6">
                    <label for="allergies" class="block text-gray-700 font-semibold mb-2">Allergies:</label>
                    <input type="text" id="allergies" name="allergies" placeholder="e.g., Nuts, Gluten, Dairy"
                        class="mt-1 block w-full p-4 border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>

                <!-- Caloric Intake -->
                <div class="mb-6">
                    <label for="calories" class="block text-gray-700 font-semibold mb-2">Caloric Intake (kcal):</label>
                    <input type="number" id="calories" name="calories" placeholder="e.g., 2000"
                        class="mt-1 block w-full p-4 border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>

                <!-- Number of Meals -->
                <div class="mb-6">
                    <label for="meals" class="block text-gray-700 font-semibold mb-2">Number of Meals:</label>
                    <input type="number" id="meals" name="meals" placeholder="e.g., 3"
                        class="mt-1 block w-full p-4 border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>

                <!-- Preferred Cuisine -->
                <div class="mb-6">
                    <label for="cuisine" class="block text-gray-700 font-semibold mb-2">Preferred Cuisine:</label>
                    <input type="text" id="cuisine" name="cuisine" placeholder="e.g., Indian, Italian, Chinese"
                        class="mt-1 block w-full p-4 border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>

                <!-- Submit Button -->
                <div class="flex justify-center">
                    <button type="submit"
                        class="bg-indigo-800 text-white text-lg font-semibold py-3 px-6 rounded-lg hover:opacity-80 transition duration-300">
                        Generate Meal Plan
                    </button>
                </div>
            </form>
        </section>
    </div>

    <!-- Footer -->
    <?php include './components/footer.php'; ?>

</body>

</html>