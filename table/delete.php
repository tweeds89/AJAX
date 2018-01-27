<?php

include 'connection.php';

$id = $_POST['id'];

$sql = "DELETE FROM users WHERE id ='$id'";

$result = mysqli_query($conn, $sql);
    if($result){
        echo 'Dane zostały usunięte';
    }