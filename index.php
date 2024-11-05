<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DishDash</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-50 text-gray-800">

    <?php include 'navbar.php'; ?>

    <!-- Main Content -->
    <section class="container mx-auto px-4 py-16 text-center">
        <h1 class="text-4xl font-bold text-green-600 mb-4">Welcome to Your Personalized Meal Planner</h1>
        <p class="text-lg text-gray-600 mb-8">Get custom meal plans tailored to your preferences and dietary needs.
            Start planning healthy and delicious meals today!</p>
        <a href="login.php" class="bg-green-600 text-white px-6 py-3 rounded-md shadow hover:bg-green-700">Get
            Started</a>
    </section>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

</body>

</html>