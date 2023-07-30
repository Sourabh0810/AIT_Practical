<?php
$servername = "localhost";
$username = "root";
$password = "123456789";
$dbname = "mydatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create table
$sql = "CREATE TABLE IF NOT EXISTS employee_info (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    contact_no VARCHAR(15) NOT NULL,
    designation VARCHAR(50) NOT NULL,
    department VARCHAR(50) NOT NULL,
    salary FLOAT(10, 2) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'employee_info' created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
