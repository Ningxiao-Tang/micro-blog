<?php
include 'db.php';

$sql = "CREATE DATABASE IF NOT EXISTS blog_db";

USE blog_db;

$sql = "CREATE TABLE IF NOT EXISTS blogs (
  id INT AUTO_INCREMENT PRIMARY KEY, 
  title VARCHAR(255) NOT NULL,
  image_url VARCHAR(255) NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

$sql = "CREATE TABLE IF NOT EXISTS admins (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password varchar(255) not NULL
)";

$sql = "INSERT INTO admins (username, password,) VALUES ('admin', SHA2('12345',256))";

$sql = "INSERT INTO blogs (title, content)
VALUES ('About Me', 'First blog post.')";

$sql = "INSERT INTO blogs (title, content)
VALUES ('Hot to Start Your Blog Website', 'A personal blog coulb be an exellent tool for building your personal brand.')";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Add code to handle adding a blog post here
}

$conn->close();
?>
