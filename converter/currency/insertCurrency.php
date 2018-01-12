<?php

include 'connection.php';

if( $_SERVER['REQUEST_METHOD'] === 'POST'){
    $exchange = $_POST['actual_exchange'];
    $currency = $_POST['currency_list'];
    $date = date("Y-m-d");

    switch ($currency) {
        case 'EUR/PLN':
            $sql = "INSERT INTO EUR (exchange, date) VALUES ('$exchange', '$date')";
            $result = mysqli_query($conn, $sql);
                if($result){
                    echo 'Dane zostały wpisane';
                }else{
                    echo 'Wystąpił błąd. Sprawdź czy dzisiejszy kurs nie został już wprowadzony';
                }
           break;
           
        case 'USD/PLN':
            $sql = "INSERT INTO USD (exchange, date) VALUES ('$exchange', '$date')";
            $result = mysqli_query($conn, $sql);
                if($result){
                    echo 'Dane zostały wpisane';
                }else{
                    echo 'Wystąpił błąd. Sprawdź czy dzisiejszy kurs nie został już wprowadzony';
                }
           break;
           
        case 'GBP/PLN':
            $sql = "INSERT INTO GBP (exchange, date) VALUES ('$exchange', '$date')";
            $result = mysqli_query($conn, $sql);
                if($result){
                    echo 'Dane zostały wpisane';
                }else{
                    echo 'Wystąpił błąd. Sprawdź czy dzisiejszy kurs nie został już wprowadzony';
                }
            break;
           
        case 'CHF/PLN':
            $sql = "INSERT INTO CHF (exchange, date) VALUES ('$exchange', '$date')";
            $result = mysqli_query($conn, $sql);
                if($result){
                    echo 'Dane zostały wpisane';
                }else{
                    echo 'Wystąpił błąd. Sprawdź czy dzisiejszy kurs nie został już wprowadzony';
                }
           break;
    }
}
    
     