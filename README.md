# Blog System Project

This project is a simple blog system implemented in PHP with a MySQL database.

## Features

- User authentication: Register, log in, and log out securely.
- Dynamic blog post creation, editing, and deletion.
- User-friendly and responsive interface design.
- MySQL database integration for storing user information and blog posts.
- Password hashing for enhanced security.
- Form validation to ensure data integrity.

## Tech Stack

- PHP
- HTML
- CSS
- MySQL

## Getting Started

## Getting Started

1. Clone the repository:

   ```bash
   git clone https://github.com/your-username/blog-system.git
   
1. Import the database:

Create a MySQL database named blog_system.

Import the SQL file located in the database folder:

mysql -u your-username -p blog_system < database/blog_system.sql

2. Configure database connection:

Update the database connection details in db.php:

$server = "localhost";
$username = "your-username";
$password = "your-password";
$database = "blog_system";

3. Run the project:

Start a PHP development server:
