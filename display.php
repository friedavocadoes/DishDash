<!DOCTYPE html>
<html lang="en">

<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$output = "";
if (isset($_GET['response'])) {
    $output = $_GET['response'];
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DishDash | Find Recipe</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-50 text-gray-800">
    <?php include 'navbar.php'; ?>

    <div class="container flex flex-col mx-auto px-4 py-16">
        <h1 class="text-4xl font-bold text-green-600 text-center mb-8">Find a Recipe</h1>


        <div class="text-center">



            <form action="fetch_data.php" method="POST">
                <label for="query">What Recipe are you looking for?</label>
                <br><br>
                <input type="text" id="query" name="query"
                    class="w-1/5 bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-3 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                    placeholder="Type here..." />

                <br><br>
                <input onclick=clear name="submit" type="submit"
                    class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 cursor-pointer">
            </form>
        </div>
        <div class="mx-auto mt-5"><?php echo $output ?></div>
    </div>

    <?php include 'footer.php'; ?>

    <script>
        const button = document.getElementById("button");
        function clear() {
            <?php $output = " "; ?>
        }

    </script>
</body>



</html>