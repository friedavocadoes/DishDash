<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DishDash - Your Meal, Your Way</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom Material Shadows */
        .shadow-material {
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1), 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .shadow-material-hover:hover {
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.15), 0px 6px 12px rgba(0, 0, 0, 0.15);
        }

        /* Hover Effects */
        .hover-scale:hover {
            transform: scale(1.05);
            transition: transform 0.2s ease;
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-900">
    <?php include './components/navbar.php'; ?>

    <!-- Hero Section -->
    <section class="relative bg-white shadow-material">
        <div class="container mx-auto flex flex-col lg:flex-row items-center justify-between px-8 py-16">
            <div class="max-w-lg mb-12 lg:mb-0">
                <h1 class="text-5xl font-bold text-gray-800 leading-tight mb-6">
                    Welcome to <span class="text-blue-600">DishDash</span>
                </h1>
                <p class="text-lg text-gray-600 mb-8">
                    Simplify your life with smarter meal planning. Designed for your health, budget, and taste.
                </p>
                <a href="display.php"
                    class="bg-blue-600 text-white px-6 py-3 rounded-lg shadow-material hover:bg-blue-700 transition">
                    Get Started
                </a>
            </div>
            <img src="./assets/modern-food.svg" alt="Modern Food Illustration" class="max-w-md lg:max-w-lg">
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto text-center px-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">Why Choose DishDash?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-8 bg-white rounded-lg shadow-material hover-scale">
                    <img src="./assets/icon-1.svg" alt="Personalized Plans" class="w-16 h-16 mx-auto mb-4">
                    <h3 class="text-xl font-semibold text-blue-600 mb-4">Tailored Meal Plans</h3>
                    <p class="text-gray-600">Customized meal plans designed for your unique dietary needs and goals.</p>
                </div>
                <div class="p-8 bg-white rounded-lg shadow-material hover-scale">
                    <img src="./assets/icon-2.svg" alt="Time Efficiency" class="w-16 h-16 mx-auto mb-4">
                    <h3 class="text-xl font-semibold text-blue-600 mb-4">Save Time & Money</h3>
                    <p class="text-gray-600">Plan ahead, minimize waste, and stick to your grocery budget.</p>
                </div>
                <div class="p-8 bg-white rounded-lg shadow-material hover-scale">
                    <img src="./assets/icon-3.svg" alt="Smart Recipes" class="w-16 h-16 mx-auto mb-4">
                    <h3 class="text-xl font-semibold text-blue-600 mb-4">Easy-to-Follow Recipes</h3>
                    <p class="text-gray-600">Simple, step-by-step recipes that anyone can follow and enjoy.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Dynamic Articles Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800">Trending Reads</h2>
                <p class="text-lg text-gray-600">Stay informed and inspired with our latest articles.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-material p-6 hover-scale">
                    <img src="./assets/article-1.jpg" alt="Article 1" class="rounded-lg mb-4">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Top 10 Meal Prep Tips</h3>
                    <p class="text-gray-600 mb-4">Discover efficient ways to prep your meals for the week.</p>
                    <a href="#" class="text-blue-600 font-semibold hover:underline">Read More</a>
                </div>
                <div class="bg-white rounded-lg shadow-material p-6 hover-scale">
                    <img src="./assets/article-2.jpg" alt="Article 2" class="rounded-lg mb-4">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">The Rise of Plant-Based Eating</h3>
                    <p class="text-gray-600 mb-4">Explore the benefits and recipes of a plant-based diet.</p>
                    <a href="#" class="text-blue-600 font-semibold hover:underline">Read More</a>
                </div>
                <div class="bg-white rounded-lg shadow-material p-6 hover-scale">
                    <img src="./assets/article-3.jpg" alt="Article 3" class="rounded-lg mb-4">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Foods That Boost Focus</h3>
                    <p class="text-gray-600 mb-4">Eat smarter with these brain-boosting superfoods.</p>
                    <a href="#" class="text-blue-600 font-semibold hover:underline">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-blue-600 text-white text-center">
        <div class="container mx-auto px-8">
            <h2 class="text-4xl font-bold mb-6">Take Control of Your Meals</h2>
            <p class="text-lg font-light mb-8">Join thousands of users planning better meals with DishDash.</p>
            <a href="register.php"
                class="bg-white text-blue-600 px-6 py-3 rounded-lg shadow-material hover:bg-gray-50 font-semibold transition">
                Sign Up Today
            </a>
        </div>
    </section>

    <!-- Footer -->
    <?php include './components/footer.php'; ?>
</body>

</html>
