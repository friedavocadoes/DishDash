<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<nav class="bg-gray-900 shadow-md fixed top-0 left-0 w-full z-50">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <!-- Logo -->
        <a href="index.php" class="text-3xl font-bold text-gradient hover:opacity-90 transition">
            DishDash
        </a>

        <!-- Desktop Navigation Links -->
        <ul class="hidden md:flex space-x-8 items-center">
            <li><a href="index.php" class="text-gray-300 hover:text-yellow-400 transition">Home</a></li>
            <li><a href="planner.php" class="text-gray-300 hover:text-yellow-400 transition">Create a Plan</a></li>
            <li><a href="display.php" class="text-gray-300 hover:text-yellow-400 transition">Find a Recipe</a></li>
            <li><a href="meal_plans.php" class="text-gray-300 hover:text-yellow-400 transition">Meal Plans</a></li>
            <li><a href="about.php" class="text-gray-300 hover:text-yellow-400 transition">About</a></li>
        </ul>

        <!-- User Menu -->
        <ul class="flex items-center space-x-6">
            <?php if (isset($_SESSION['username'])): ?>
                <li class="relative group">
                    <!-- Username with Dropdown -->
                    <span class="text-gray-300 cursor-pointer hover:text-yellow-400 transition" id="user-menu-trigger">
                        <?php echo htmlspecialchars($_SESSION['username']); ?>
                    </span>
                    <div class="hidden group-hover:block absolute right-0 mt-2 w-40 bg-gray-800 rounded-lg shadow-lg"
                        id="user-dropdown">
                        <a href="dashboard.php"
                            class="block px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-yellow-400 transition">
                            Dashboard
                        </a>
                        <a href="logout.php"
                            class="block px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-yellow-400 transition">
                            Logout
                        </a>
                    </div>
                </li>
            <?php else: ?>
                <li>
                    <a href="login.php"
                        class="px-5 py-2 bg-gradient-to-r from-yellow-400 to-yellow-600 text-gray-900 font-semibold rounded-lg shadow-md hover:opacity-90 transition">
                        Login/Register
                    </a>
                </li>
            <?php endif; ?>
        </ul>

        <!-- Hamburger Menu for Mobile -->
        <button id="mobile-menu-button" class="md:hidden text-gray-300 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden bg-gray-900 shadow-lg md:hidden">
        <ul class="flex flex-col space-y-4 px-6 py-4">
            <li><a href="index.php" class="text-gray-300 hover:text-yellow-400 transition">Home</a></li>
            <li><a href="planner.php" class="text-gray-300 hover:text-yellow-400 transition">Create a Plan</a></li>
            <li><a href="display.php" class="text-gray-300 hover:text-yellow-400 transition">Find a Recipe</a></li>
            <li><a href="meal_plans.php" class="text-gray-300 hover:text-yellow-400 transition">Meal Plans</a></li>
            <li><a href="about.php" class="text-gray-300 hover:text-yellow-400 transition">About</a></li>
            <?php if (isset($_SESSION['username'])): ?>
                <li><a href="dashboard.php" class="text-gray-300 hover:text-yellow-400 transition">Dashboard</a></li>
                <li><a href="logout.php" class="text-gray-300 hover:text-yellow-400 transition">Logout</a></li>
            <?php else: ?>
                <li><a href="login.php" class="text-gray-300 hover:text-yellow-400 transition">Login/Register</a></li>
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

    // Keep dropdown open on hover
    const userMenuTrigger = document.getElementById('user-menu-trigger');
    const userDropdown = document.getElementById('user-dropdown');

    let dropdownTimeout;

    userMenuTrigger.addEventListener('mouseenter', () => {
        clearTimeout(dropdownTimeout);
        userDropdown.classList.remove('hidden');
    });

    userDropdown.addEventListener('mouseenter', () => {
        clearTimeout(dropdownTimeout);
    });

    userMenuTrigger.addEventListener('mouseleave', () => {
        dropdownTimeout = setTimeout(() => {
            userDropdown.classList.add('hidden');
        }, 300);
    });

    userDropdown.addEventListener('mouseleave', () => {
        dropdownTimeout = setTimeout(() => {
            userDropdown.classList.add('hidden');
        }, 300);
    });
</script>