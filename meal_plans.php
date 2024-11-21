<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meal Plans - DishDash</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">
    <?php include './components/navbar.php'; ?>

    <section class="container mx-auto px-4 py-16">
        <h1 class="text-4xl font-bold text-green-600 mb-8 text-center">Explore Our Meal Plans</h1>
        <p class="text-lg text-gray-600 text-center mb-16">
            Choose from our expertly crafted meal plans designed to meet your health and lifestyle goals.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Meal Plan 1 -->
            <div class="p-6 bg-white shadow-lg rounded">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Balanced Diet Plan</h2>
                <p class="text-gray-600 mb-4">
                    A wholesome plan combining proteins, healthy carbs, and veggies for balanced nutrition.
                </p>
                <h3 class="text-lg font-semibold text-green-600">Sample Meals:</h3>
                <ul class="list-disc list-inside text-gray-600 mt-2">
                    <li>Grilled chicken with quinoa and steamed broccoli</li>
                    <li>Vegetable stir-fry with brown rice</li>
                    <li>Greek yogurt with fresh berries</li>
                </ul>
            </div>

            <!-- Meal Plan 2 -->
            <div class="p-6 bg-white shadow-lg rounded">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Weight Loss Plan</h2>
                <p class="text-gray-600 mb-4">
                    A calorie-conscious plan with portion-controlled meals to help you lose weight effectively.
                </p>
                <h3 class="text-lg font-semibold text-green-600">Sample Meals:</h3>
                <ul class="list-disc list-inside text-gray-600 mt-2">
                    <li>Grilled salmon with roasted asparagus</li>
                    <li>Mixed green salad with a light vinaigrette</li>
                    <li>Overnight oats with chia seeds and almond milk</li>
                </ul>
            </div>

            <!-- Meal Plan 3 -->
            <div class="p-6 bg-white shadow-lg rounded">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">High Protein Plan</h2>
                <p class="text-gray-600 mb-4">
                    A protein-rich plan for muscle building and maintaining energy levels.
                </p>
                <h3 class="text-lg font-semibold text-green-600">Sample Meals:</h3>
                <ul class="list-disc list-inside text-gray-600 mt-2">
                    <li>Egg white omelette with spinach and feta</li>
                    <li>Turkey burger with a side of sweet potato fries</li>
                    <li>Protein smoothie with whey, banana, and almond butter</li>
                </ul>
            </div>

            <!-- Meal Plan 4 -->
            <div class="p-6 bg-white shadow-lg rounded">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Vegan Plan</h2>
                <p class="text-gray-600 mb-4">
                    A plant-based plan offering complete nutrition for vegans.
                </p>
                <h3 class="text-lg font-semibold text-green-600">Sample Meals:</h3>
                <ul class="list-disc list-inside text-gray-600 mt-2">
                    <li>Lentil curry with basmati rice</li>
                    <li>Avocado toast with cherry tomatoes</li>
                    <li>Chickpea and quinoa salad</li>
                </ul>
            </div>

            <!-- Meal Plan 5 -->
            <div class="p-6 bg-white shadow-lg rounded">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Low-Carb Plan</h2>
                <p class="text-gray-600 mb-4">
                    A low-carb plan perfect for reducing sugar and maintaining a healthy weight.
                </p>
                <h3 class="text-lg font-semibold text-green-600">Sample Meals:</h3>
                <ul class="list-disc list-inside text-gray-600 mt-2">
                    <li>Cauliflower rice stir-fry with tofu</li>
                    <li>Zucchini noodles with marinara sauce</li>
                    <li>Grilled steak with sautéed mushrooms</li>
                </ul>
            </div>

            <!-- Meal Plan 6 -->
            <div class="p-6 bg-white shadow-lg rounded">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Mediterranean Plan</h2>
                <p class="text-gray-600 mb-4">
                    A heart-healthy plan inspired by the traditional Mediterranean diet.
                </p>
                <h3 class="text-lg font-semibold text-green-600">Sample Meals:</h3>
                <ul class="list-disc list-inside text-gray-600 mt-2">
                    <li>Hummus and veggie platter</li>
                    <li>Grilled fish with olive oil and lemon</li>
                    <li>Whole grain pasta with cherry tomatoes and basil</li>
                </ul>
            </div>
        </div>
    </section>

    <?php include './components/footer.php'; ?>
</body>
</html>
