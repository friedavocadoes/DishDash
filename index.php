<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DishDash - Premium Meal Planning</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes gradientFlow {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .gradient-animation {
            background: linear-gradient(90deg, #007BFF, #6C63FF, #FF6F91);
            background-size: 300% 300%;
            animation: gradientFlow 8s ease infinite;
        }

        .glass {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .button-gradient {
            background: linear-gradient(90deg, #FF7A18, #AF002D, #319197);
            transition: all 0.3s ease-in-out;
        }

        .button-gradient:hover {
            background: linear-gradient(270deg, #FF7A18, #AF002D, #319197);
            transform: translateY(-3px);
            box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body class="bg-gray-900 text-white font-sans">
    <?php include './components/navbar.php'; ?>

    <!-- Hero Section -->
    <section class="relative gradient-animation text-center py-20 mt-16">
        <div class="container mx-auto">
            <h1 class="text-6xl font-extrabold mb-6 leading-tight">
                Revolutionize <span class="text-yellow-400">Meal Planning</span>
            </h1>
            <p class="text-lg text-gray-200 mb-8 max-w-lg mx-auto">
                The perfect tool to simplify your life and make eating healthy a breeze. Join thousands of users
                improving their meals with DishDash.
            </p>
            <a href="display.php"
                class="px-8 py-4 rounded-full button-gradient text-white font-bold text-lg inline-block">
                Discover Now
            </a>
        </div>
        <img src="./assets/1.jpg" alt="Meal Planning Hero Image" class="absolute bottom-0 right-0 max-w-md">
    </section>

    <!-- Features Section -->
    <section id="features" class="py-16 bg-gray-800 text-center">
        <div class="container mx-auto px-8">
            <h2 class="text-4xl font-bold mb-10 text-white">Features You'll Love</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="p-8 rounded-lg glass shadow-lg">
                    <img src="./assets/personal.png" alt="Personalized Plans" class="h-20 mx-auto mb-4">
                    <h3 class="text-2xl font-semibold text-yellow-400 mb-2">Personalized Plans</h3>
                    <p class="text-gray-300">Plans designed just for you, tailored to your health goals and taste.</p>
                </div>
                <div class="p-8 rounded-lg glass shadow-lg">
                    <img src="./assets/time.png" alt="Time Efficiency" class="h-20 mx-auto mb-4">
                    <h3 class="text-2xl font-semibold text-yellow-400 mb-2">Save Time & Money</h3>
                    <p class="text-gray-300">Effortlessly plan meals to fit your schedule and your budget.</p>
                </div>
                <div class="p-8 rounded-lg glass shadow-lg">
                    <img src="./assets/smart.png" alt="Smart Recipes" class="h-20 mx-auto mb-4">
                    <h3 class="text-2xl font-semibold text-yellow-400 mb-2">Effortless Recipes</h3>
                    <p class="text-gray-300">Enjoy step-by-step guides to make cooking enjoyable and easy.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Trending Articles -->
    <section id="articles" class="py-16 bg-gray-900">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold text-white mb-8">Trending Articles</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:scale-105 transform transition-all">
                    <img src="./assets/article-1.jpg" alt="Article" class="rounded-lg mb-4">
                    <h3 class="text-xl font-bold text-blue-400">10 Meal Prep Tips You’ll Love</h3>
                    <p class="text-gray-400">Master the art of meal prep with these expert tricks.</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:scale-105 transform transition-all">
                    <img src="./assets/article-2.jpg" alt="Article" class="rounded-lg mb-4">
                    <h3 class="text-xl font-bold text-blue-400">Plant-Based Diets Demystified</h3>
                    <p class="text-gray-400">Explore the benefits of a plant-based lifestyle.</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:scale-105 transform transition-all">
                    <img src="./assets/article-3.jpg" alt="Article" class="rounded-lg mb-4">
                    <h3 class="text-xl font-bold text-blue-400">Brain-Boosting Superfoods</h3>
                    <p class="text-gray-400">Discover the top foods for sharper focus and memory.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include "./components/footer.php" ?>
</body>

</html>