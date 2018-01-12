<!DOCTYPE html>
<html>
  <head>
       <link rel="stylesheet" type="text/css" href="../style.css">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="
                sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="
                anonymous">                    
    </script>
  </head>
  <body>
      <h2>Zobacz wprowadzone kursy walut</h2>
      <div>
          <button id="EUR">EUR</button>
          <button id="USD">USD</button>
          <button id="CHF">CHF</button>
          <button id="GBP">GBP</button>
      </div>
      <div id="show-table">
          <script>
             $(document).ready(function(){
                 $('#EUR').on('click', function(){
                     $('#show-table').load('eurTable.php');
                 });
                 
                 $('#USD').on('click', function(){
                     $('#show-table').load('usdTable.php');
                 });
                 
                 $('#CHF').on('click', function(){
                     $('#show-table').load('chfTable.php');
                 });
                 
                 $('#GBP').on('click', function(){
                     $('#show-table').load('gbpTable.php');
                 });
             });
          </script>
      </div>
      <div>
        <p>
          <a href="../index.php">Strona główna</a>
        </p>
      </div>
          



    
      


   


