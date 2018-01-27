<?php
include 'connection.php'; 
    
$sql = "CREATE TABLE users(
id INT AUTO_INCREMENT PRIMARY KEY,
first_name VARCHAR(50) NOT NULL,
last_name VARCHAR(50) NOT NULL
)";

if ($conn->query($sql) == TRUE) {
    echo "Tabela users została stworzona";
} else {
    echo "Nie udało się utworzyć tabeli: " . $conn->error;
}

$conn->close();