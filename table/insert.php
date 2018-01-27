<?php

include 'connection.php';

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];

$sql = "INSERT INTO users (first_name, last_name) VALUES ('$first_name', '$last_name')";

$result = mysqli_query($conn, $sql);
    if($result){
        echo 'Dane zostały wpisane';
    }