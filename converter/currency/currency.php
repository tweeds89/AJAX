<!DOCTYPE html>
<html>
  <head>      
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="
                sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="
                anonymous">                    
    </script>
    <script>
        $(document).ready(function(){
            $('#currency').on('submit', function(event){
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
            
            $('#ex_btn').on('click', function(){
               $("#ex_currency").load("currency/exchangeCurrency.php"); 
            });
        });      
    </script>
  </head>
  <body>   
      <div id="ex_currency">
          <form method="POST" id="currency">       
              Wprowadź aktualny kurs waluty w formacie (x,xx):
              <input type="number" step="0.01" name="exchange"/>
              <select name="currency">                
                      <?php
                      $array = ['EUR/PLN', 'USD/PLN', 'CHF/PLN', 'GBP/PLN'];
                      foreach ($array as $value) {
                          echo '<option value = "'.$value.'">'.$value.'</option>';
                      }?>                
              </select>
              <input type="submit" id="insert" value="Wprowadź"/>        
          </form> 
          <p>
          <input type="submit" id="ex_btn" value="Przejdź do wymiany walut"/> 
          </p>
      </div>
      <div id="insert"></div>
  </body>