<!DOCTYPE html>
<html lang="en">
  <head>
      
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
      
    <title>Data Types: Booleans</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
      
      <style>

      </style>

  </head>
    
  <body>
      
      <div class="container-fluid">
          
          
          <h1>Data Types: Booleans</h1>
          
          <p>
            
              <?php
              
            $booleanVariable1 = (5<6);
            $booleanVariable2 = (3>6);
            $booleanVariable3 = $booleanVariable1 && $booleanVariable2;
            $booleanVariable4 = $booleanVariable1 || $booleanVariable2;   
              
            var_dump($booleanVariable1);
            echo "<br />";
            var_dump($booleanVariable2);
            echo "<br />";
            var_dump($booleanVariable3);
            echo "<br />";
              var_dump($booleanVariable4);
            echo "<br />";
              var_dump(!$booleanVariable4);
            echo "<br />";
              //putting a ! at the start will make it the opposite
              
              
              ?>
          
          
          </p>
     
          
      </div>
    

      

      
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
      

      
  </body>
</html>