<!DOCTYPE html>
<html lang="en">
  <head>
      
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
      
    <title>If, else and Switch</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
      
      <style>

      </style>

  </head>
    
  <body>
      
      <div class="container-fluid">
          
          
          <h1>If, else and Switch</h1>
          
          <p>
            
              <?php
              
              $believeInYourDream = true;
              if($believeInYourDream) {
                    echo "You do believe :) ";
              } else {
                  echo "What happened to you? :( ";
              }
              
              echo "<br />";
              
              $x = ($believeInYourDream)?"A":"B";
              //the ? is the same as saying  is this condition true?
              //if yes then A
              //if no then B
              echo $x;
              
              echo "<br />";
              echo "<br />";
              
              $temperature = 10;
              
              echo "The temperature is " . $temperature . " degrees";
              
              echo "<br />";
              
              if($temperature < 15){
                  echo "The Room is Cold";
              } elseif($temperature > 30){
                  echo "The room is too Hot";
              }else{
                  echo "The Room is just right :) ";
              }
              
               echo "<br />";
              echo "<br />";
              
              
              echo "What is Strength?";
              echo "<br />";
                  
              $strength = "belief";
              switch($strength){
                  case "belief":
                    echo "Belief is Strength";
                        break;
                  case "power":
                    echo "Power is Strength";
                        break; 
                case "knowledge":
                    echo "Knowledge is Strength";
                        break;
                  default:
                      echo "You are Weak";
                      break;
              }
              
              
              echo "<br />";

              ?>
          
          
          </p>
     
          
      </div>
    

      

      
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
      

      
  </body>
</html>