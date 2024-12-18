# Setting Up & Opening DishDash
#### Setting up the project includes 3 main stages:
1. [Cloning the Repository](#Cloning-the-Repository).
2. [Creating the Database and Table](#Creating-the-Database-and-Table).
3. [Adding Gemini API to environment variables](#Adding-Gemini-API-to-environment-variables).

**Finally, you can [Open the Website](#Opening-the-Website).**

## Cloning the Repository
1. Make sure [XAMPP](https://www.apachefriends.org/) is installed and start the `Apache Server` and `MySQL Server`.
2. Go to `C:\xampp\htdocs` and open a Terminal window in the directory (`Alt + D` on the directory, type `cmd` and press enter).
3. Clone the repository to that directory:
   
   ```git
   git clone "https://github.com/friedavocadoes/DishDash"
   ```

## Creating the Database and Table
1. Open http://localhost/phpmyadmin/
2. Click on `Databases`.
3. Create a Database with the name `dishdash`.
4. Click on `SQL`.
5. Copy the following SQL Query and click `Go`:
   
   ```sql
   CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    weight DECIMAL(5, 2) DEFAULT NULL, 
    height DECIMAL(4, 1) DEFAULT NULL, 
    age INT DEFAULT NULL,              
    gender ENUM('Male', 'Female', 'Other') DEFAULT NULL, 
    activity_level ENUM('Sedentary', 'Lightly Active', 'Moderately Active', 'Very Active', 'Super Active') DEFAULT NULL, 
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );

   ```

## Adding Gemini API to environment variables
####  This project uses Gemini to pull recipes which requires Gemini API to be set in your environment variables.
1. Get an API key from [Gemini API Docs](https://aistudio.google.com/app/apikey).
2. Set the API key as `GEM_API_KEY` in the environment variables.
   Open Terminal as Admin and enter the following (replace the `xxxx` with your Gemini API Key):
   
   ```bash
   setx GEM_API_KEY "xxxx" /M
   ```
3. Restart your computer for the environment variable changes to be reflected.
> [!TIP]
> You can alternatively just edit the `$apiKey` variable in the `fetch_data.php` and `meal_planner.php` files.
   
## Opening the Website
#### Once the Database and Table is created, open http://localhost/DishDash/index.php on a browser.
