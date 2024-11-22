<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DishDash | About Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .gradient-bg {
            background: linear-gradient(to bottom right, #a0c4ff, #a1d7f7);
        }
    </style>
</head>

<body class="gradient-bg text-gray-800">

    <!-- Navbar -->
    <?php include './components/navbar.php'; ?>

    <!-- About Section -->
    <section class="container flex flex-col px-6 py-16 mt-16">
        <!-- Section Title -->
        <div class="text-center mb-12">
            <h1 class="text-5xl font-extrabold text-blue-700 mb-4">Meet the Team</h1>
            <p class="text-lg text-gray-700 max-w-xl mx-auto">
                At DishDash, we're passionate about making healthy eating easy and accessible for everyone. Our team
                combines creativity, technology, and care to craft a seamless meal-planning experience.
            </p>
        </div>

        <!-- Team Members -->
        <div class="grid grid-cols-1 md:grid-cols-2 md:mx-auto lg:gap-20 lg:mx-52 gap-12 items-center mx-auto">
            <!-- Team Member 1 -->
            <div class="text-center bg-white shadow-lg rounded-lg p-6 hover:shadow-xl transition">
                <img src="assets/gautham.jpg" alt="Gautham"
                    class="w-36 h-36 rounded-full mx-auto mb-6 border-4 border-blue-600">
                <h2 class="text-2xl font-bold text-gray-800">Gautham</h2>
                <p class="text-blue-600 text-sm font-medium mb-4">Co-founder & Developer</p>
                <p class="text-gray-600 text-sm">
                    The tech genius behind DishDash, Gautham ensures that our platform is fast, reliable, and
                    user-friendly.
                </p>
            </div>
            <!-- Team Member 2 -->
            <div class="text-center bg-white shadow-lg rounded-lg p-6 hover:shadow-xl transition">
                <img src="assets/palak.jpg" alt="Palak"
                    class="w-36 h-36 rounded-full mx-auto mb-6 border-4 border-rose-600">
                <h2 class="text-2xl font-bold text-gray-800">Palak</h2>
                <p class="text-rose-600 text-sm font-medium mb-4">Co-founder & Designer</p>
                <p class="text-gray-600 text-sm">
                    The creative mind behind our beautiful designs, Palak ensures DishDash looks and feels amazing.
                </p>
            </div>
        </div>

        <!-- Vision Section -->
        <div class="mt-16 bg-blue-100 rounded-lg p-8">
            <h2 class="text-3xl font-bold text-center text-blue-700 mb-4">Our Vision</h2>
            <p class="text-center text-lg text-gray-700 max-w-3xl mx-auto">
                We believe in creating a world where healthy living is simple, enjoyable, and personalized. Through
                AI-powered meal planning, we aim to make nutrition accessible to all while embracing individuality.
            </p>
        </div>
    </section>

    <!-- Footer -->
    <?php include './components/footer.php'; ?>

</body>

</html>