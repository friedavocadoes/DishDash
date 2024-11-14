<?php
session_start();
include './configs/config.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Get user input
$diet = $_POST['diet'];
$allergies = $_POST['allergies'];
$calories = $_POST['calories'];
$meals = $_POST['meals'];
$cuisine = $_POST['cuisine'];
$mealPlan = "";
// Prepare prompt for Gemini API
$message = "Generate a meal plan based on the following details:
- Dietary Preference: $diet
- Allergies: $allergies
- Caloric Intake: $calories kcal
- Number of Meals: $meals
- Preferred Cuisine: $cuisine";


$message = "Generate a structured JSON meal plan based on the following details:
{
    \"DietaryPreference\": $diet,
    \"Allergies\": $allergies,
    \"CaloricIntake\": $calories kcal,
    \"NumberOfMeals\": $meals,
    \"PreferredCuisine\": $cuisine
}
The JSON format should include:
- TotalCalories
- Cuisine
- Allergies
- Meals (array of objects)
    - MealType (e.g., Breakfast, Lunch, Dinner)
    - TotalMealCalories
    - Items (array of objects)
        - DishName
        - Calories
        - Notes (optional)
- OptionalSnacks (array of objects, optional)
    - DishName
    - Calories
heres a sample json:
{
  \"TotalCalories\": 2000,
  \"Cuisine\": \"Indian\",
  \"Allergies\": \"Nuts\",
  \"Meals\": [
    {
      \"MealType\": \"Breakfast\",
      \"TotalMealCalories\": 650,
      \"Items\": [
        { \"DishName\": \"Chana Masala with Roti\", \"Calories\": 350 },
        { \"DishName\": \"Masala Chai with Soy Milk\", \"Calories\": 150 },
        { \"DishName\": \"Banana\", \"Calories\": 150 }
      ]
    },
    {
      \"MealType\": \"Lunch\",
      \"TotalMealCalories\": 800,
      \"Items\": [
        { \"DishName\": \"Dal Makhani with Rice\", \"Calories\": 400 },
        { \"DishName\": \"Raita\", \"Calories\": 100 },
        { \"DishName\": \"Aloo Gobi\", \"Calories\": 200 },
        { \"DishName\": \"Salad with Lemon-Tahini Dressing\", \"Calories\": 100 }
      ]
    },
    {
      \"MealType\": \"Dinner\",
      \"TotalMealCalories\": 550,
      \"Items\": [
        { \"DishName\": \"Vegetable Biryani\", \"Calories\": 350 },
        { \"DishName\": \"Boondi Raita\", \"Calories\": 100 },
        { \"DishName\": \"Whole Wheat Chapati\", \"Calories\": 100 }
      ]
    }
  ],
  \"OptionalSnacks\": [
    { \"DishName\": \"Fruit salad with yogurt\", \"Calories\": 150 },
    { \"DishName\": \"Veggie sticks with hummus\", \"Calories\": 100 },
    { \"DishName\": \"Roasted chickpeas\", \"Calories\": 100 }
  ],
  \"Notes\": [
    \"This meal plan provides approximately 2000 calories per day.\",
    \"The dishes are vegetarian and do not contain nuts.\",
    \"The meals include a variety of nutrient-rich foods such as fruits, vegetables, whole grains, and legumes.\",
    \"The calorie intake can be adjusted based on individual needs and activity levels.\"
  ]
}

Strictly follow this format and the output should be the json alone

";
// Call Gemini API

$apiUrl = 'https://generativelanguage.googleapis.com/v1beta/models/gemini-pro:generateContent';


$data = json_encode([
    'contents' => [
        [
            'parts' => [
                [
                    'text' => "$message"
                ]
            ]
        ]
    ]
]);

$ch = curl_init($apiUrl . '?key=' . $apiKey);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json'
]);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

$response = curl_exec($ch);
$responseArray = json_decode($response, true);

if (isset($responseArray['candidates'][0]['content']['parts'][0]['text'])) {
    $mealPlanJson = $responseArray['candidates'][0]['content']['parts'][0]['text'];
    $mealPlan = str_replace(["```json", "```"], "", $mealPlanJson);

    $mealPlan = json_decode($mealPlan, true);
    // $mealPlan = $mealPlanJson;
} else {
    print_r($responseArray);
    echo "error";
}


curl_close($ch);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meal Plan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800">
    <?php include './components/navbar.php'; ?>

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold text-green-600 mb-8 text-center">Your Personalized Meal Plan</h1>



        <!-- <?php echo $mealPlan ?> -->


        <div class="bg-white p-6 shadow-md rounded">
            <!-- Meal Plan Header -->
            <h2 class="text-2xl font-bold text-green-600 mb-4">Meal Plan Overview</h2>
            <p><strong>Total Calories:</strong> <?php echo htmlspecialchars($mealPlan['TotalCalories']); ?> kcal</p>
            <p><strong>Cuisine:</strong> <?php echo htmlspecialchars($mealPlan['Cuisine']); ?></p>
            <p><strong>Allergies:</strong> <?php echo htmlspecialchars($mealPlan['Allergies']); ?></p>

            <!-- Meals -->
            <h3 class="text-xl font-semibold mt-6 mb-2">Meals</h3>
            <?php foreach ($mealPlan['Meals'] as $meal): ?>
                <div class="mb-4">
                    <h4 class="font-bold text-gray-800"><?php echo htmlspecialchars($meal['MealType']); ?>
                        (<?php echo htmlspecialchars($meal['TotalMealCalories']); ?> kcal)</h4>
                    <ul class="list-disc pl-6">
                        <?php foreach ($meal['Items'] as $item): ?>
                            <li>
                                <strong><?php echo htmlspecialchars($item['DishName']); ?></strong>
                                - <?php echo htmlspecialchars($item['Calories']); ?> kcal
                                <?php if (isset($item['Notes'])): ?>
                                    <span class="italic">(<?php echo htmlspecialchars($item['Notes']); ?>)</span>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>

            <!-- Snacks -->
            <?php if (!empty($mealPlan['OptionalSnacks'])): ?>
                <h3 class="text-xl font-semibold mt-6 mb-2">Optional Snacks</h3>
                <ul class="list-disc pl-6">
                    <?php foreach ($mealPlan['OptionalSnacks'] as $snack): ?>
                        <li>
                            <strong><?php echo htmlspecialchars($snack['DishName']); ?></strong>
                            - <?php echo htmlspecialchars($snack['Calories']); ?> kcal
                            <?php if (isset($snack['Notes'])): ?>
                                <span class="italic">(<?php echo htmlspecialchars($snack['Notes']); ?>)</span>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>


    </div>

    <?php include './components/footer.php'; ?>
</body>

</html>