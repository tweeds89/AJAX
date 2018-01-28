<?php
include 'connection.php'; 
    
$sql = "CREATE TABLE EUR(
id INT AUTO_INCREMENT PRIMARY KEY,
exchange FLOAT NOT NULL,
date DATE NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabela EUR została stworzona <br>";
} else {
    echo "Nie udało się utworzyć tabeli: " . $conn->error;
}

$sql = "CREATE TABLE USD(
id INT AUTO_INCREMENT PRIMARY KEY,
exchange FLOAT NOT NULL,
date DATE NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabela USD została stworzona <br>";
} else {
    echo "Nie udało się utworzyć tabeli: " . $conn->error;
}

$sql = "CREATE TABLE GBP(
id INT AUTO_INCREMENT PRIMARY KEY,
exchange FLOAT NOT NULL,
date DATE NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabela GBP została stworzona <br>";
} else {
    echo "Nie udało się utworzyć tabeli: " . $conn->error;
}

$sql = "CREATE TABLE CHF(
id INT AUTO_INCREMENT PRIMARY KEY,
exchange FLOAT NOT NULL,
date DATE NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabela CHF została stworzona <br>";
} else {
    echo "Nie udało się utworzyć tabeli: " . $conn->error;
}

$conn->close();