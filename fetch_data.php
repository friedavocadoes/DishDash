<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['query'];

    try {

        // The alternative method includes replacing the below line with your api key in quotes.
        $apiKey = getenv("GEM_API_KEY");

        $apiUrl = 'https://generativelanguage.googleapis.com/v1beta/models/gemini-pro:generateContent';

        $message = "Generate HTML for a proper recipe card with nutrition facts in a table on the right side for $name as a webpage element. If $name is not a food item or has no recipe, return an error message. The output should be plain HTML without any ```html or code block formatting, and should only include the raw HTML without any additional explanations or markdown. use tailwind css to design the element. Note that it is to be included in an already existing html page, so format accordingly, do not use any background colors.";


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
            $text = $responseArray['candidates'][0]['content']['parts'][0]['text'];
            $text = str_replace(["```html", "```"], "", $text);
            header("Location: display.php?response=" . urlencode($text));

        } else {
            print_r($responseArray);
            echo "error";
        }


        curl_close($ch);


    } catch (Exception $e) {
        echo $e->getMessage();
    }

}