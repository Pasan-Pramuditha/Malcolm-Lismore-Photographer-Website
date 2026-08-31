# Malcolm Lismore Photography Website

This is the official website developed for "Malcolm Lismore Photography". The project provides a platform for the photographer to showcase their services, pricing, and portfolio.

## Features

* **Home Page:** An attractive and responsive landing page.
* **About:** Information about the photographer and their journey.
* **Prices:** Details on the services provided and their pricing packages.
* **Gallery:** Categorized portfolios showcasing different photography styles:
  * Landscape
  * Wildlife
  * Weddings & Events
* **Contact Us:** A contact form that allows customers to easily send inquiries or messages.
* **User Authentication:** Secure Login and Logout functionality for administration.

## Technologies Used

* **Frontend:** HTML5, CSS3 (Bootstrap, AOS Animations), JavaScript (SweetAlert2)
* **Backend:** PHP
* **Database:** MySQL

## How to Run the Project

Since this project uses PHP and MySQL, you need a local web server environment like XAMPP, WAMP, or MAMP to run it.

1. Clone this repository or download it as a ZIP file to your local machine.
2. Install [XAMPP](https://www.apachefriends.org/) or [WAMP](https://www.wampserver.com/en/) and start the **Apache** and **MySQL** services.
3. **Database Setup:**
   * Open your web browser and navigate to `http://localhost/phpmyadmin/`.
   * Create a new database for the project (e.g., `malcolm_photography`).
   * You can create the required tables by running the SQL queries provided in the **Database Schema** section below.
   * *Note: Make sure to update the database connection settings (hostname, username, password, database name) in your PHP configuration file (like `login.php` and `Contact.php`) to match your local setup.*
4. Copy the entire project folder into the `htdocs` directory (if using XAMPP) or the `www` directory (if using WAMP).
5. Open your web browser and visit `http://localhost/Malcolm-Lismore-Photographer-Website` (or your specific folder name) to view the website.

## Database Schema (SQL Queries)

You can run the following SQL queries in your database (e.g., via phpMyAdmin) to create the necessary tables for the project:

```sql
-- Create the database
CREATE DATABASE IF NOT EXISTS malcolm_photography;
USE malcolm_photography;

-- Create the users table for user authentication
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create the messages table to store contact form submissions
CREATE TABLE IF NOT EXISTS messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    enquiry_type VARCHAR(50),
    event_date DATE,
    location VARCHAR(255),
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

## Author

* **Pasan Pramuditha** - [GitHub Profile](https://github.com/Pasan-Pramuditha)
