<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ajax_table";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Wystąpił błąd: " . $conn->connect_error);
}