<?php
// Database configuration
$host = 'localhost';
$user = 'root';      // Change to your username
$pass = '';          // Change to your password
$db   = 'tastybites';

// Create connection and select database
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create booking table if not exists (short version)
$conn->query("CREATE TABLE IF NOT EXISTS bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    booking_date DATETIME NOT NULL,
    noOfPeople INT NOT NULL,
    specialRequest TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)") or die("Error creating table: " . $conn->error);

$conn->query("CREATE TABLE IF NOT EXISTS contacts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  subject VARCHAR(255) NOT NULL,
  message TEXT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)") or die("Error creating table: " . $conn->error);


?>