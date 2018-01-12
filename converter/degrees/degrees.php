<!DOCTYPE html>
<html>
  <head>       
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="
                sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="
                anonymous">                    
    </script>
    <script>
        $(document).ready(function(){
            $("#form-convert").on('submit', function(event){ 
                event.preventDefault();
                var form_data = $(this).serialize();
                  $.ajax({
                    url:"degrees/degreesConvert.php",
                    method:"POST",
                    data:form_data,
                    dataType: "html",
                    success: function(data){
                       $('#display').html(data);
                    }
                  });
            });
        });
    </script>
  </head>
  <body>
      <div class="form-convert">        
         <form method="POST" id="form-convert">      
             <input type="number" step="0.001" name="amount" class="amount" id="amount" placeholder="Podaj liczbę stopni"/>
             <select name="unit" id="unit">           
                <?php
                $array=['Celsius to Fahrenheit', 'Fahrenheit to Celsius'];
                  foreach($array as $result){
                    echo '<option value ="'.$result.'">'.$result.'</option>';
                } ?>    
            </select>
            <p>
                <input type="submit" id="calc-button" value="Przelicz"/>
            </p>   
         </form>          
      </div>
      <div id="display"></div>
      <div>
        <p>
           <a href="index.php">Strona główna</a>
        </p>
      </div>
  </body>
</html>


