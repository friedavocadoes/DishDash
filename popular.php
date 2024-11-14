<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DishDash | Popular Meal Plans</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800">


    <?php include './components/navbar.php'; ?>


    <section class="container mx-auto px-40 py-20">
        <h1 class="text-4xl font-bold text-green-600 text-center mb-16">Popular Meal Plans</h1>
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">

            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-2xl font-semibold text-green-600 mb-4">Mediterranean Delight</h2>
                <p class="text-gray-700">A balanced meal plan inspired by the flavors of the Mediterranean. Includes
                    lots of fresh vegetables, whole grains, and lean proteins.</p>
                <ul class="mt-4 text-gray-600">
                    <li>• Grilled Salmon with Quinoa Salad</li>
                    <li>• Greek Yogurt with Honey & Nuts</li>
                    <li>• Olive Oil & Garlic Stir-fried Veggies</li>
                </ul>
            </div>


            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-2xl font-semibold text-green-600 mb-4">Vegan Power</h2>
                <p class="text-gray-700">A plant-based meal plan rich in fiber, vitamins, and plant proteins to keep you
                    energized and healthy.</p>
                <ul class="mt-4 text-gray-600">
                    <li>• Lentil & Spinach Salad</li>
                    <li>• Chickpea Stir-fry with Vegetables</li>
                    <li>• Smoothie with Almond Milk, Berries, & Banana</li>
                </ul>
            </div>


            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-2xl font-semibold text-green-600 mb-4">High-Protein Fitness Plan</h2>
                <p class="text-gray-700">Designed for those looking to build muscle and stay lean. Includes high-protein
                    options and energy-packed meals.</p>
                <ul class="mt-4 text-gray-600">
                    <li>• Chicken Breast with Brown Rice & Veggies</li>
                    <li>• Greek Yogurt with Berries & Almonds</li>
                    <li>• Egg White Omelette with Spinach</li>
                </ul>
            </div>
        </div>
    </section>


    <?php include './components/footer.php'; ?>

</body>

</html>