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



## Opening the Website
#### Once the Database and Table is created, open http://localhost/project/index.php on a browser.
