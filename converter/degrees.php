<!DOCTYPE html>
<html>
  <head>       
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="
                sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="
                anonymous">                    
    </script>
    <script>
        $(document).ready(function(){
            $("#convert").on('submit', function(event){ 
                event.preventDefault();
                var form_data = $(this).serialize();
                  $.ajax({
                    url:"degreesConvert.php",
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
      <div>        
         <form method="POST" id="convert">  
            Podaj liczbę stopni:
            <input type="number" name="number" class="number" id="number"/>
             <select name="degrees" id="degrees">           
                <?php
                $array=['celToFahr', 'fahrToCel'];
                  foreach($array as $result){
                    echo '<option value ="'.$result.'">'.$result.'</option>';
                } ?>    
            </select>
                <input type="submit" id="button" value="Przelicz"/>
            </form>          
      </div>
      <div id="display"></div>
  </body>
</html>


