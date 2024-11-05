<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<nav class="bg-white shadow">
    <div class="container mx-auto px-16 py-6 flex justify-between items-center">

        <a href="index.php" class="text-2xl font-semibold text-green-600">DishDash</a>


        <ul class="flex space-x-10 mx-auto">
            <li><a href="index.php" class="text-gray-700 hover:text-green-600">Home</a></li>
            <li><a href="popular.php" class="text-gray-700 hover:text-green-600">Popular Plans</a></li>
            <li><a href="about.php" class="text-gray-700 hover:text-green-600">About</a></li>
        </ul>

        <ul>
            <?php if (isset($_SESSION['username'])): ?>

                <li class="relative group inline-block">
                    <span class="text-gray-700 cursor-pointer hover:text-green-600">
                        <?php echo htmlspecialchars($_SESSION['username']); ?>
                    </span>

                    <!-- Dropdown content -->
                    <div
                        class="absolute right-0 hidden group-hover:block bg-white border border-gray-200 rounded shadow-md">
                        <a href="logout.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</a>
                    </div>




                </li>

            <?php else: ?>
                <li><a href="login.php" class="text-gray-700 hover:text-green-600">Login/Register</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>