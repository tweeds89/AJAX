<?php

if( $_SERVER['REQUEST_METHOD'] === 'POST'){
    $number = $_POST['number'];
    $degrees = $_POST['degrees'];
    
    switch ($degrees){
        case 'celToFahr':
            echo $number.' st w skali Celsjusza to ok. '. $fahr = ($number * 2 + 32). ' st w skali Fahrenheita' ;
            break;
        
       case 'fahrToCel':
           echo $number. ' st w skali Fahrenheita to ok. '. $cel = (($number - 32)/2). ' st w skali Celsjusza';
           break;
    }   
}
  



