<!DOCTYPE html>
<html lang="en">
  <head>
      
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
      
    <title>Variables</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
      
      <style>
          h1{
              color:purple;
          }
      </style>

  </head>
    
  <body>
      
      <div class="container-fluid">
          
          
          <h1>Variables:</h1>
          
          <p>
            <?php
                
                $name = "John";
                $age = 33;
              
                echo "His name is " . $name . " and he is " . $age . " years old.";
              
              ?>
          </p>
          <p>
            <?php
                define("COUNTRY", "ENGLAND");
              //this is a 'constance'
              //it is a variable that cannot be changed via script
              //it has to be in uppercase
              
              
              echo "Flight destination: " . COUNTRY;
              
              ?>
          </p>
          
      </div>
    

      

      
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
      

      
  </body>
</html>