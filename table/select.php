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
                    <th>Id</th>
                    <th>Imię</th>
                    <th>Nazwisko</th>
                    <th>Dodaj/Usuń</th>
                </tr>
<?php
//tutaj jest wysyłane zapytanie z funkcji takeData. Pobierane sa dane z bazy,
//konwertowane do tabeli i odsyłane do funkcji takeData
$sql = "SELECT * FROM ajax_table ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0){
       while($row = mysqli_fetch_array($result)){ 
        echo '
        <tr>
            <td>' .$row["id"].'</td>
            <td class="first_name">' .$row["first_name"].'</td>
            <td class="last_name">' .$row["last_name"].'</td>
            <td><button type="submit" name="delete_btn" class="delete_btn">x</button></td>                          
        </tr>';
       }
        echo '
        <tr>
            <td></td>
            <td id="first_name" contenteditable></td>
            <td id="last_name" contenteditable></td>
            <td><button type="submit" name="add_btn" id="add_btn">+</button>                        
        </tr>';                    
    }else{
       echo '<tr><td>Baza jest pusta</td></tr>';      
    }?>
            </table>
        </div>
    </body>
</html>