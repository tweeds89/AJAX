<!DOCTYPE html>
<html>
  <head>
      
  </head>
  <body>
      <div id="final">
<?php
include 'connection.php';

if( $_SERVER['REQUEST_METHOD'] === 'POST'){
    
    $toExchange = $_POST['to_exchange'];
    $select1 = $_POST['select1'];
    $select2 = $_POST['select2'];
    $select3 = $_POST['select3'];
    
   echo "Czy zgadzasz się wymienić $toExchange $select1 na ";
    
    switch ($select1) {
               
        case 'USD':
            $sql = "SELECT * FROM USD ORDER BY date DESC LIMIT 1";
            $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){                       
                        echo $toExchange * $row['exchange']. ' PLN po kursie '. $row['exchange'].'? (kurs na dzień: '. $row['date'].')';
                    }
                }
            break;
            
        case 'GBP':
            $sql = "SELECT * FROM GBP ORDER BY date DESC LIMIT 1";
            $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){                       
                        echo $toExchange * $row['exchange']. ' PLN po kursie '. $row['exchange'].'? (kurs na dzień: '. $row['date'].')';
                    }
                }
            break;
            
        case 'EUR':
            $sql = "SELECT * FROM EUR ORDER BY date DESC LIMIT 1";
            $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){                       
                        echo $toExchange * $row['exchange']. ' PLN po kursie '. $row['exchange'].'? (kurs na dzień: '. $row['date'].')';
                    }
                }
            break;
            
        case 'CHF':
            $sql = "SELECT * FROM CHF ORDER BY date DESC LIMIT 1";
            $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){                       
                        echo $toExchange * $row['exchange']. ' PLN po kursie '. $row['exchange'].'? (kurs na dzień: '. $row['date'].')';
                    }
                }
            break;
    }
    
    switch ($select2) {
      
        case 'USD':
            $sql = "SELECT * FROM USD ORDER BY date DESC LIMIT 1";
            $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){                       
                        echo round($toExchange / $row['exchange'], 2). ' USD po kursie '. $row['exchange'].'? (kurs na dzień: '. $row['date'].')';
                    }
                }
            break;
            
        case 'GBP':
            $sql = "SELECT * FROM GBP ORDER BY date DESC LIMIT 1";
            $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){                       
                        echo round($toExchange / $row['exchange'], 2). ' GBP po kursie '. $row['exchange'].'? (kurs na dzień: '. $row['date'].')';
                    }
                }
            break;
            
        case 'CHF':
            $sql = "SELECT * FROM CHF ORDER BY date DESC LIMIT 1";
            $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){                       
                        echo round($toExchange / $row['exchange'], 2). ' CHF po kursie '. $row['exchange'].'? (kurs na dzień: '. $row['date'].')';
                    }
                }
            break;
            
        case 'EUR':
            $sql = "SELECT * FROM EUR ORDER BY date DESC LIMIT 1";
            $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){                       
                        echo round($toExchange / $row['exchange'], 2). ' EUR po kursie '. $row['exchange'].'? (kurs na dzień: '. $row['date'].')';
                    }
                }
            break;       
    }  
}
?>
          <p>
            <button id="agree">TAK</button>
            <button id="update">Zaktualizuj kurs</button>
          </p>
    </div>
    <div>
      
<script>
$(document).ready(function(){
    $('#agree').on('click', function(){
        alert('Kwota została wymieniona');      
    });
    
    $('#update').on('click', function(){
         $.ajax({
            url:"currency/currency.php",
            method:"POST",
            success: function(data){
                $('#final').html(data);
            }
         });     
    });
});
</script>

   


