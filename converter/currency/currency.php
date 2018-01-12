<!DOCTYPE html>
<html>
  <head>      
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="
                sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="
                anonymous">                    
    </script>
    <script>
        $(document).ready(function(){
            $('#form-insert-exchange').on('submit', function(event){
                event.preventDefault();
                var form_data = $(this).serialize();
                   $.ajax({
                       url: "currency/insertCurrency.php",
                       method: "POST",
                       data: form_data,
                       dataType: "html",
                       success: function(data){
                           alert(data);                         
                       }                     
                   });
            });
            
            $('#currency-exchange').on('click', function(){
               $("#insert-exchange").load("currency/exchangeCurrency.php"); 
            });
        });      
    </script>
  </head>
  <body>   
      <div id="insert-exchange">
          <form method="POST" id="form-insert-exchange">       
              <p>
                Wprowadź aktualny kurs waluty w formacie (X,XX):
              </p>
              <input type="number" step="0.01" name="actual_exchange"/>
              <select name="currency_list" id="currency-list">                
                 <?php
                   $array = ['EUR/PLN', 'USD/PLN', 'CHF/PLN', 'GBP/PLN'];
                     foreach ($array as $value) {
                        echo '<option value = "'.$value.'">'.$value.'</option>';
                     }?>                
              </select>
              <p>
                <input type="submit" id="insert-to-db" value="Wprowadź"/>    
              </p>
          </form> 
          <p>
            <input type="submit" id="currency-exchange" value="Przejdź do wymiany walut"/> 
          </p>
      </div>
      <div id="insert"></div>
  </body>