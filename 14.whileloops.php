<!DOCTYPE html>
<html lang="en">
  <head>
      
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
      
    <title>While Loops</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
      
      <style>

      </style>

  </head>
    
  <body>
      
      <div class="container-fluid">
          
          
          <h1>While Loops</h1>
          
          <p>
            
              <?php
              
              $i = 1;
              
              while( $i <= 10){
                  echo $i . "<br />";
                  $i++;
              };
              
              
              $carMakes = array("Ford", "BMW", "Audi");
              
              $j = 0;
              
              while($j < 3){
                  echo $carMakes[$j] . "<br />";
                  $j++;
              };
              
              
              
              
              
              
              echo "<br />";

              ?>
          
          
          </p>
     
          
      </div>
    

      

      
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
      

      
  </body>
</html>