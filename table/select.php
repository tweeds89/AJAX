<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html>
    <head>  
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div>
            <table>
                <tr>
                    <th width="100px">Nr</th>
                    <th width="350px">Imię</th>
                    <th width="350px">Nazwisko</th>
                    <th width="150px">Dodaj/Usuń</th>
                </tr>
<?php
//tutaj jest wysyłane zapytanie z funkcji takeData. Pobierane sa dane z bazy,
//konwertowane do tabeli i odsyłane do funkcji takeData
$sql = "SELECT * FROM ajax_table ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0){
       while($row = mysqli_fetch_array($result)){ 
        echo '
        <tr class = "numeric">
            <td></td>
            <td class="first_name">' .$row["first_name"].'</td>
            <td class="last_name">' .$row["last_name"].'</td>
            <td><button type="submit" name="delete_btn" class="delete_btn" data-id="'.$row['id'].'">Usuń</button></td>                          
        </tr>';
       }
        echo '
        <tr>
            <td></td>
            <td id="first_name" contenteditable></td>
            <td id="last_name" contenteditable></td>
            <td><button type="submit" name="add_btn" class="add_btn">Dodaj</button>                        
        </tr>';                    
    }else{
       echo '
          <tr>
            <td></td>
            <td id="first_name" contenteditable></td>
            <td id="last_name" contenteditable></td>
            <td><button type="submit" name="add_btn" class="add_btn">Dodaj</button>                        
        </tr>';        
    }?>
            </table>
        </div>
    </body>
</html>