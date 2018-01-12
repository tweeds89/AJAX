<!DOCTYPE html>
<html>
  <head>      
    <link rel="stylesheet" type="text/css" href="../style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="
                sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="
                anonymous">                    
    </script>
    <script>
        $(document).ready(function(){
      
            $('#insert-new-exchange').on('click', function(){
               $("#insert-exchange").load("currency/currency.php"); 
            });
            
             $('#currency-exchange').on('click', function(){
               $("#insert-exchange").load("currency/exchangeCurrency.php"); 
            });
        });      
    </script>
  </head>
  <body>   
      <div id="insert-exchange">          
        <p>
          <input type="submit" id="insert-new-exchange" value="Wprowadź aktualne kursy walut"/> 
        </p>
        <p>
          <input type="submit" id="currency-exchange" value="Przejdź do wymiany walut"/> 
        </p>        
      </div>
      <div>
        <p>
          <a href="currency/exchangeTable.php">Zobacz tabele z kursami</a>
        </p>
        <p>
          <a href="index.php">Strona główna</a>
        </p>
      </div>       
  </body>