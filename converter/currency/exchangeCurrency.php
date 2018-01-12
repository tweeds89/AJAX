<!DOCTYPE html>
<html>
  <head>
      <link rel="stylesheet" type="text/css" href="style.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>    
  </head>
  <body>
    <div id="calculate">
        <form method="POST" id="form-calculate">
          <?php
            $array = ['PLN', 'EUR', 'USD', 'CHF', 'GBP'];
          ?>
          Wymień:
          <input type="number" name="to_exchange" id="to_exchange" step="0.01"/>
          
          <select id="select1" name='select1'>
              <option>Waluta</option>
              <?php
                for ($i = 0; $i< count($array); $i++){
                  echo '<option value = "'.$array[$i].'">'.$array[$i].'</option>';  
                }
              ?>             
          </select>
          na
          <select id="select2" name="select2">
              <option>Waluta</option>
               <?php
                for ($i = 1; $i< count($array); $i++){
                  echo '<option value = "'.$array[$i].'">'.$array[$i].'</option>';  
               }?>
          </select>
          <select id="select3" name="select3">
              <option value = "PLN">PLN</option>;               
          </select>
          <p id="switch">
              <input type="submit" id="exchange-btn" value="Wymień"/>
          </p>
        </form>
    </div>
    <div id="accept"></div>
      
      <script>
          $(document).ready(function(){            
            $("#select1").change(function(){
                if($(this).val() == "PLN"){
                     $("#select2").show();
                     $("#select3").hide(); 
                    
                }else{
                    $("#select2").hide();
                    $("#select3").show();
                }               
            });
           
            $('#form-calculate').on('submit', function(event){
                event.preventDefault();
                 var form_data = $(this).serialize();
                
                    $.ajax({
                        url: "currency/calculate.php",
                        method: "POST",
                        data: form_data,
                        dataType: "html",
                        success: function(data){                       
                           $('#accept').html(data);                        
                       }                       
                    });
            });
          });
      </script>
  </body>
    
     