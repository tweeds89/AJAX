<!DOCTYPE html>
<html>
    <head>             
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        <div id="live_data"></div>
        <script>
            $(document).ready(function(){
                //pobieram dane z tabeli i wyświetlam pod divem
                function takeData(){
                    $.ajax({
                        url:"select.php",
                        method:"POST",
                        success: function(data){
                            $('#live_data').html(data);
                        }
                    });
                }
                takeData();
 
                //event do zapisania danych do bazy po kliknięciu
                $(document).on('click', '#add_btn', function(){ 
                    var first_name = $('#first_name').html();
                    var last_name = $('#last_name').html();
                    if(first_name == ''){
                        alert("Uzupełnij imię!");  
                        return false;
                    }
                    if(last_name == ''){
                        alert("Uzupełnij nazwisko!"); 
                        return false;
                    }
                    //Jeśli oba parametry są podane zostaje wysłane żądanie do insert.php
                    $.ajax({
                        url:"insert.php",
                        method:"POST",
                        data:{first_name: first_name, last_name: last_name},
                        dataType:"text",
                        success:function(data){
                            alert(data);
                            takeData();
                        }
                    });
                });               
            });       
        </script>       
    </body>
</html>
