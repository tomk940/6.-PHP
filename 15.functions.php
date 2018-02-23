<!DOCTYPE html>
<html lang="en">
  <head>
      
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
      
    <title>Functions</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
      
      <style>

      </style>

  </head>
    
  <body>
      
      <div class="container-fluid">
          
          
          <h1>Functions</h1>
          
          <p>
            
              <?php
              
              
              welcomeMe();
              
              welcomeUser("Ayshe", 500);
              
              $sum = sum(7,5);
              
              echo "<p> The sum of 7 and 5 is $sum</p>";
              
              
              function welcomeMe(){
                  echo "<p>Welcome to my website</p>";
              }
              
              
              function welcomeUser($name, $credit){
                  echo "<p>Hi $name. Welcome to my website! Your credit is: $credit dollars.</p>";
              }
              
              function Sum($x, $y){
                  return $x + $y;
              }
              
              
              
              
              
              
              
              
              
              
              
              
              
              echo "<br />";

              ?>
          
          
          </p>
     
          
      </div>
    

      

      
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
      

      
  </body>
</html>