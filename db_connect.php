<?php
// Database configuration
$host = 'sql200.infinityfree.com';
$user = 'if0_41877292';      // Change to your username
$pass = 'fINiy4Ii2omVph';          // Change to your password
$db   = 'if0_41877292_tastybites';

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

$conn->query("CREATE TABLE IF NOT EXISTS orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    phone_number VARCHAR(20) NOT NULL,
    address TEXT NOT NULL,
    landmark VARCHAR(100),
    amount DECIMAL(10,2) NOT NULL,
    payment_type ENUM('card', 'cod') NOT NULL,
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)") or die("Error creating table: " . $conn->error);

// Save order function
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save_order'])) {
    $full_name = $_POST['full_name'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $landmark = $_POST['landmark'];
    $amount = $_POST['amount'];
    $payment_type = $_POST['payment_type'];
    
    $stmt = $conn->prepare("INSERT INTO orders (full_name, phone_number, address, landmark, amount, payment_type) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssds", $full_name, $phone_number, $address, $landmark, $amount, $payment_type);
    
    if ($stmt->execute()) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "error" => $conn->error]);
    }
    $stmt->close();
    $conn->close();
    exit();
}

?>