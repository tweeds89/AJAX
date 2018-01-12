<!DOCTYPE html>
<html>
    <head>             
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <title>Przeliczanie jednostek</title>
    </head>
    <body>     
      <div id="show">
          <h2>Przeliczaj jednostki</h2>
        <select name="first" id="first">
            <option value="none">Wybierz akcję</option>
            <option value="degrees">Przeliczanie stopni</option>
            <option value="currency">Wymiana walut</option>           
        </select>
        </div>
        <br/>
        <script>                
           $(document).ready(function(){
                $("#first").change(function(){
                    if($(this).val() == "degrees"){
                      $.ajax({
                        url:"degrees/degrees.php",
                        method:"POST",
                        success: function(data){
                            $('#show').html(data);
                        }
                      });
                    }else if($(this).val() == "currency"){
                      $.ajax({
                        url:"currency/chooseAction.php",
                        method:"POST",
                        success: function(data){
                            $('#show').html(data);
                        }
                      }); 
                   }
                });              
            });      
        </script>       
    </body>
</html>
