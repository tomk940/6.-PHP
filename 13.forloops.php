<!DOCTYPE html>
<html lang="en">
  <head>
      
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
      
    <title>For Loops</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
      
      <style>

      </style>

  </head>
    
  <body>
      
      <div class="container-fluid">
          
          
          <h1>For Loops</h1>
          
          <p>
            
              <?php
              
              
              for($i = 1; $i <= 10; $i++){
                  echo $i . "<br />";
              }
              
              
              echo "<br />";
              echo "<br />";
              
              
              $carMakes = array("Ford", "AUDI", "FORD");
              
              foreach($carMakes as $value){
                  echo $value . "<br />";
              }
              
              echo "<br />";
              echo "<br />";
              
              
              $shopppingBasket = array("a"=>"yogurt", "b"=>"apple", "c"=>"bread", "d"=>"chocolate");
              
              foreach($shopppingBasket as $key=>$value){
                  echo $key . " : " . $value . "<br />";
              }
              
              
              echo "<br />";

              ?>
          
          
          </p>
     
          
      </div>
    

      

      
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
      

      
  </body>
</html>