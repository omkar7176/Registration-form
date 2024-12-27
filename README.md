# Registration Form Project

This project is a simple registration form that allows users to register by providing their first name, last name, mobile number, and password. Additionally, users can log in using their Google, Facebook, or Apple ID. The registration details are saved in a MySQL database using PHP.

## Features

- User registration with first name, last name, mobile number, and password.
- Social login options: Google, Facebook, and Apple ID.
- Data is stored in a MySQL database.

## Technologies Used

- HTML
- CSS
- PHP
- MySQL

## Prerequisites

- A web server (e.g., Apache, Nginx) with PHP support.
- MySQL database server.
- A local development environment (e.g., XAMPP, MAMP, WAMP) or a live server.

## Setup Instructions

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/yourusername/registration-form-project.git
   cd registration-form-project

2. **Create a MySQL Database:**
   - Open your MySQL client (e.g., phpMyAdmin).
   - Create a new database (e.g., registration_db).
   - Run the following SQL command to create a users table:

   ```bash
   CREATE TABLE users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    mobile VARCHAR(15) NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );

 3. **Configure Database Connection:**
    - Open the PHP file where the database connection is established (e.g., db.php).
    - Update the database credentials:

    ```bash
    $servername = "localhost"; // or your server name
    $username = "your_db_username";
    $password = "your_db_password";
    $dbname = "registration_db";

## Usage
1. Fill in the registration form with your details.
2. Click the "Submit" button to register.
3. Use the social login buttons to log in with Google, Facebook, or Apple ID (implementations for these logins are not included in this project).

## License
This project is licensed under the MIT License. See the LICENSE file for details.


   
