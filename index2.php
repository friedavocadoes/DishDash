<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DishDash - Your Personalized Meal Planner</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800">
    <?php include './components/navbar.php'; ?>

    <section
        class="relative h-screen flex items-center z-40 justify-center text-center bg-[url('./assets/bg.jpg')] bg-cover bg-center">
        <div class="bg-black bg-opacity-50 p-8 rounded-lg shadow-lg">
            <h1 class="text-5xl font-extrabold text-white mb-4">Welcome to DishDash</h1>
            <p class="text-lg text-gray-200 mb-8">Your personalized meal planner to achieve a healthier, more organized
                lifestyle.</p>
            <a href="display.php"
                class="bg-green-600 text-white px-6 py-3 rounded-md shadow hover:bg-green-700 transition">
                Get Started
            </a>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="container mx-auto px-8 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">Why Use DishDash?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="p-6 bg-gray-50 rounded-lg shadow-lg hover:shadow-2xl transition">
                    <h3 class="text-xl font-semibold text-green-600 mb-4">Personalized Meal Plans</h3>
                    <p class="text-gray-600">Get meal suggestions based on your dietary needs and preferences.</p>
                </div>
                <div class="p-6 bg-gray-50 rounded-lg shadow-lg hover:shadow-2xl transition">
                    <h3 class="text-xl font-semibold text-green-600 mb-4">Easy to Follow</h3>
                    <p class="text-gray-600">Each recipe is crafted to be simple, nutritious, and delicious.</p>
                </div>
                <div class="p-6 bg-gray-50 rounded-lg shadow-lg hover:shadow-2xl transition">
                    <h3 class="text-xl font-semibold text-green-600 mb-4">Save Time and Money</h3>
                    <p class="text-gray-600">Plan your meals efficiently to save on grocery expenses and reduce waste.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-8 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">Popular Meal Plans</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition">
                    <h3 class="text-xl font-bold text-gray-800">Balanced Diet</h3>
                    <p class="text-gray-600 mt-2">A wholesome plan with proteins, carbs, and vegetables for a balanced
                        diet.</p>
                    <a href="#" class="text-green-600 mt-4 block hover:underline">View Details</a>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition">
                    <h3 class="text-xl font-bold text-gray-800">Low-Carb Plan</h3>
                    <p class="text-gray-600 mt-2">Perfect for those looking to cut carbs while enjoying tasty meals.</p>
                    <a href="#" class="text-green-600 mt-4 block hover:underline">View Details</a>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition">
                    <h3 class="text-xl font-bold text-gray-800">Vegan Essentials</h3>
                    <p class="text-gray-600 mt-2">A plant-based plan that provides complete nutrition for vegans.</p>
                    <a href="#" class="text-green-600 mt-4 block hover:underline">View Details</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include './components/footer.php'; ?>
</body>


</html>
