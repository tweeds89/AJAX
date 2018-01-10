<?php

if( $_SERVER['REQUEST_METHOD'] === 'POST'){
    $amount = $_POST['amount'];
    $unit = $_POST['unit'];
    
   if($amount !=''){
    switch ($unit){
       case 'Celsius to Fahrenheit':
            echo $amount.' st w skali Celsjusza to ok. '. $fahr = ($amount * 2 + 32). ' st w skali Fahrenheita' ;
            break;
        
       case 'Fahrenheit to Celsius':
           echo $amount. ' st w skali Fahrenheita to ok. '. $cel = (($amount - 32)/2). ' st w skali Celsjusza';
           break;
    }  
   }else{
      echo 'Uzupełnij liczbę stopni!';
   }
}

  



