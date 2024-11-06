# Setting Up & Opening
#### Setting up the project includes 3 main stages
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
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );
   ```

## Installing a PHP package manager (for Gemini API integration support)
1. In your project's terminal, run the following lines of code:
   
   ```shell
   php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
   php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
   php composer-setup.php
   php -r "unlink('composer-setup.php');"
   ```

## Opening the Website
#### Once the Database and Table is created, open http://localhost/project/index.php on a browser.
