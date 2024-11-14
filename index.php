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

    <!-- Hero Section -->
    <section class="container mx-auto px-4 py-16 text-center">
        <h1 class="text-5xl font-bold text-green-600 mb-4">Welcome to DishDash</h1>
        <p class="text-lg text-gray-600 mb-8">Your personalized meal planner to achieve a healthier, more organized
            lifestyle.</p>
        <a href="display.php" class="bg-green-600 text-white px-6 py-3 rounded-md shadow hover:bg-green-700">Get
            Started</a>
    </section>

    <!-- Benefits Section -->
    <section class="bg-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">Why Use DishDash?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-6 bg-gray-100 rounded shadow">
                    <h3 class="text-xl font-semibold text-green-600 mb-4">Personalized Meal Plans</h3>
                    <p class="text-gray-600">Get meal suggestions based on your dietary needs and preferences.</p>
                </div>
                <div class="p-6 bg-gray-100 rounded shadow">
                    <h3 class="text-xl font-semibold text-green-600 mb-4">Easy to Follow</h3>
                    <p class="text-gray-600">Each recipe is crafted to be simple, nutritious, and delicious.</p>
                </div>
                <div class="p-6 bg-gray-100 rounded shadow">
                    <h3 class="text-xl font-semibold text-green-600 mb-4">Save Time and Money</h3>
                    <p class="text-gray-600">Plan your meals efficiently to save on grocery expenses and reduce waste.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Meal Plans Section -->
    <section class="container mx-auto px-4 py-16 text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-8">Popular Meal Plans</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Sample Meal Plan Card -->
            <div class="p-6 bg-white shadow-lg rounded">
                <h3 class="text-xl font-bold text-gray-800">Balanced Diet</h3>
                <p class="text-gray-600 mt-2">A wholesome plan with proteins, carbs, and vegetables for a balanced diet.
                </p>
                <a href="#" class="text-green-600 mt-4 block">View Details</a>
            </div>
            <div class="p-6 bg-white shadow-lg rounded">
                <h3 class="text-xl font-bold text-gray-800">Low-Carb Plan</h3>
                <p class="text-gray-600 mt-2">Perfect for those looking to cut carbs while enjoying tasty meals.</p>
                <a href="#" class="text-green-600 mt-4 block">View Details</a>
            </div>
            <div class="p-6 bg-white shadow-lg rounded">
                <h3 class="text-xl font-bold text-gray-800">Vegan Essentials</h3>
                <p class="text-gray-600 mt-2">A plant-based plan that provides complete nutrition for vegans.</p>
                <a href="#" class="text-green-600 mt-4 block">View Details</a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="bg-gray-50 py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">What Our Users Say</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Sample Testimonial Card -->
                <div class="p-6 bg-white shadow-lg rounded">
                    <p class="text-gray-600">"DishDash has made meal planning so much easier and stress-free! The
                        recipes are easy to follow and delicious!"</p>
                    <h3 class="text-green-600 font-bold mt-4">- Alex Johnson</h3>
                </div>
                <div class="p-6 bg-white shadow-lg rounded">
                    <p class="text-gray-600">"A great tool for anyone who wants to eat healthier without spending hours
                        planning meals."</p>
                    <h3 class="text-green-600 font-bold mt-4">- Priya Kaur</h3>
                </div>
                <div class="p-6 bg-white shadow-lg rounded">
                    <p class="text-gray-600">"The customized meal plans fit my dietary needs perfectly. Highly
                        recommend!"</p>
                    <h3 class="text-green-600 font-bold mt-4">- Sarah Lee</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="bg-green-600 py-16 text-center text-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold mb-4">Ready to Start Your Meal Planning Journey?</h2>
            <p class="text-lg mb-8">Join thousands of others who are living healthier and more organized lives with
                DishDash.</p>
            <a href="register.php" class="bg-white text-green-600 px-6 py-3 rounded-md shadow hover:bg-gray-100">Sign Up
                Now</a>
        </div>
    </section>

    <?php include './components/footer.php'; ?>
</body>

</html>