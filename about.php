<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DishDash | About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-50 text-gray-800">

    <!-- Navbar -->
    <?php include 'navbar.php'; ?>

    <!-- About Section -->
    <section class="container mx-auto px-4 py-16">
        <h1 class="text-4xl font-bold text-green-600 text-center mb-8">About Us</h1>
        <div class="flex flex-col md:flex-row justify-center items-center space-y-8 md:space-y-0 md:space-x-12">
            <!-- Team Members -->
            <div class="text-center">
                <img src="gautham.jpg" alt="Gautham" class="w-40 h-40 rounded-full mx-auto mb-4">
                <h2 class="text-2xl font-semibold">Gautham</h2>
                <p class="text-gray-600">Co-founder & Developer</p>
            </div>
            <div class="text-center">
                <img src="palak.jpg" alt="Palak" class="w-40 h-40 rounded-full mx-auto mb-4">
                <h2 class="text-2xl font-semibold">Palak</h2>
                <p class="text-gray-600">Co-founder & Designer</p>
            </div>
        </div>
        <p class="text-center text-lg text-gray-700 mt-8 max-w-2xl mx-auto">
            We are Gautham and Palak, a passionate two-person team dedicated to helping people make healthy meal choices
            effortlessly. Our goal is to empower you with customized meal plans tailored to your tastes, dietary
            preferences, and goals, all powered by AI.
        </p>
    </section>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

</body>

</html>