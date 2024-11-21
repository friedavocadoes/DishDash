<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<nav class="bg-white shadow-material fixed top-0 left-0 w-full z-50">
    <div class="container mx-auto px-8 py-4 flex justify-between items-center">
        <!-- Logo -->
        <a href="index.php" class="text-2xl font-semibold text-blue-600 hover:text-blue-700 transition">
            DishDash
        </a>

        <!-- Navigation Links -->
        <ul class="hidden md:flex space-x-8">
            <li><a href="index.php" class="text-gray-700 hover:text-blue-600 transition">Home</a></li>
            <li><a href="planner.php" class="text-gray-700 hover:text-blue-600 transition">Create a Plan</a></li>
            <li><a href="display.php" class="text-gray-700 hover:text-blue-600 transition">Find a Recipe</a></li>
            <li><a href="meal_plans.php" class="text-gray-700 hover:text-blue-600 transition">Meal Plans</a></li>
            <li><a href="about.php" class="text-gray-700 hover:text-blue-600 transition">About</a></li>
        </ul>

        <!-- User Menu -->
        <ul class="flex items-center space-x-6">
            <?php if (isset($_SESSION['username'])): ?>
                <li class="relative group">
                    <!-- Username with Dropdown -->
                    <span class="text-gray-700 cursor-pointer hover:text-blue-600 transition">
                        <?php echo htmlspecialchars($_SESSION['username']); ?>
                    </span>
                    <div
                        class="hidden group-hover:block absolute right-0 mt-2 w-40 bg-white rounded-lg shadow-material">
                        <a href="dashboard.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-50 transition">Dashboard</a>
                        <a href="logout.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-50 transition">Logout</a>
                    </div>
                </li>
            <?php else: ?>
                <li>
                    <a href="login.php"
                       class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow-material hover:bg-blue-700 transition">
                        Login/Register
                    </a>
                </li>
            <?php endif; ?>
        </ul>

        <!-- Hamburger Menu for Mobile -->
        <div class="md:hidden">
            <button id="mobile-menu-button" class="text-gray-700 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16m-7 6h7"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden bg-white shadow-md md:hidden">
        <ul class="flex flex-col space-y-4 px-8 py-4">
            <li><a href="index.php" class="text-gray-700 hover:text-blue-600 transition">Home</a></li>
            <li><a href="planner.php" class="text-gray-700 hover:text-blue-600 transition">Create a Plan</a></li>
            <li><a href="display.php" class="text-gray-700 hover:text-blue-600 transition">Find a Recipe</a></li>
            <li><a href="meal_plans.php" class="text-gray-700 hover:text-blue-600 transition">Meal Plans</a></li>
            <li><a href="about.php" class="text-gray-700 hover:text-blue-600 transition">About</a></li>
            <?php if (isset($_SESSION['username'])): ?>
                <li><a href="dashboard.php" class="text-gray-700 hover:text-blue-600 transition">Dashboard</a></li>
                <li><a href="logout.php" class="text-gray-700 hover:text-blue-600 transition">Logout</a></li>
            <?php else: ?>
                <li><a href="login.php" class="text-gray-700 hover:text-blue-600 transition">Login/Register</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>

<script>
    // Mobile Menu Toggle
    const menuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    menuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
