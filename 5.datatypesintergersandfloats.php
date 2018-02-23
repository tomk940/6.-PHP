<!DOCTYPE html>
<html lang="en">
  <head>
      
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
      
    <title>Data Types: Intergers and Floats</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
      
      <style>

      </style>

  </head>
    
  <body>
      
      <div class="container-fluid">
          
          
          <h1>Data Types: Intergers and Floats</h1>
          
          <p>
            
              <?php
              
                $x = 7;
              //interger is whole number_format
              
                var_dump($x);
              echo "<br />";
              $y = 3;
              $z = $x+$y;
              echo $z;
              
              $z = 0x1A;
              echo "<br />";
              var_dump($z);
              
              $w = 0123;
              echo "<br />";
              var_dump($w);
              
              //floats
              
              $floatingNumber = 3.7;
              echo "<br />";
              var_dump($floatingNumber);
              
              
              ?>
          
          
          </p>
     
          
      </div>
    

      

      
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
      

      
  </body>
</html>