<!DOCTYPE html>
<html>
    <head>             
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <title>Dodawanie komentarzy</title>
    </head>
    <body>
        <h2>Dodawaj/odpowiadaj na komentarze</h2>
        <div class="container">
            <form method="POST" id="comment_form">
                <div class="form-group">
                    <input type="text" name="comment_name" id="comment_name" placeholder="Twoje imię"/>
                </div>
                <div class="form-group">
                    <textarea name="comment_content" id="comment_content" placeholder="Napisz komentarz"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" id="submit" value="Dodaj"/>
                </div>        
            </form>
            <span id="comment_message"></span>
            <br/>
            <div id="display_comment"></div>
        </div>
        <script>
            $(document).ready(function(){
                $('comment_form').on('submit' function(){
                    
                });
            }
       
        </script>       
    </body>
</html>
