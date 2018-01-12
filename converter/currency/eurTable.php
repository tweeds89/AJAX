<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html>
  <head>
       <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
      <h2>Kurs Euro</h2>
      <div>
          <table id="display-table">
              <tr>
                  <th>Kurs</th>
                  <th>Dzień</th>
              </tr>
              <?php
              $sql = "SELECT * FROM EUR ORDER BY date DESC";
              $result = mysqli_query($conn, $sql);
              if(mysqli_num_rows ($result) > 0){
                  while($row = mysqli_fetch_array($result)){
                    echo '
                      <tr>
                        <td>'.$row['exchange'].'</td>
                        <td>'.$row['date'].'</td>
                      </tr>';
                  }
              } ?>
          </table>
      </div>
  </body>
     
         
          



    
      


   


