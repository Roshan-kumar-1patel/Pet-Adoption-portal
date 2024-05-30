Pet Adoption Portal:
Welcome to the Pet Adoption Portal! This project aims to provide a platform where users can adopt pets, and shelters can list pets available for adoption. It is developed using PHP and is designed to be a user-friendly and efficient solution for pet adoption.

Features:
User Registration and Login: Users can create an account, log in, and manage their profiles.
Pet Listings: Shelters can list pets available for adoption with details such as breed, age, and adoption status.
Search and Filter: Users can search and filter pets based on various criteria such as type, breed, age, and location.
Adoption Requests: Users can submit adoption requests for pets they are interested in.
Admin Panel: Admins can manage users, pets, and adoption requests through an intuitive admin panel.
Technologies Used
Backend: PHP
Frontend: HTML, CSS, JavaScript
Database: MySQL
Server: Apache (using XAMPP for local development)

Installation:
To set up the project locally, follow these steps:

Clone the repository:

Copy code:
git clone https://github.com/Roshan-kumar-1patel/Pet-Adoption-portal.git

Navigate to the project directory:
cd Pet-Adoption-portal

Set up XAMPP:

Download and install XAMPP.
Start Apache and MySQL from the XAMPP control panel.
Create a database:

Open phpMyAdmin and create a new database (drool_db).
Import the provided SQL file (database.sql) into the newly created database.
Configure the database connection:

Open config.php and update the database configuration details:
php
Copy code
define('SITEURL', 'http://localhost:82/drool_demo/'); //change 82 to 80
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'drool_db');

Run the application:

Place the project folder in the htdocs directory of XAMPP.
Open a web browser and navigate to http://localhost/Pet-Adoption-portal.

Usage
Register an Account: Sign up for a new account or log in with existing credentials.
Browse Pets: View the list of available pets and use the search and filter options to find pets that meet your criteria.
Adopt a Pet: Submit an adoption request for the pet you are interested in.
Admin Management: If you are an admin, log in to the admin panel to manage users, pets, and adoption requests.

Admin : roshan
password: admin
