<!DOCTYPE html>
<html lang="en">
  <head>
      
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
      
    <title>String Functions</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
      
      <style>

      </style>

  </head>
    
  <body>
      
      <div class="container-fluid">
          
          
          <h1>String Functions</h1>
          
          <p>
            
              <?php
              
              $message = "Welcome to my Website! Have A Good Time Exploring The Website";
              
              echo $message;
              
              echo "<br />";
              echo "<br />";
              
              echo "The length of my message is: " . strlen($message) . " characters";
              
              echo "<br />";
              echo "<br />";
              
              
              echo "The number of Words in this message are: " . str_word_count($message);
              
              echo "<br />";
              echo "<br />";
              echo "<br />";
              
              echo str_replace("Website", "World", $message, $number_of_words_replaced);
              //replaces the word website with the word world in the message variable.
              //(Case Sensitive)
              //then count the number of words that have beenr eplaced.
              
              echo "<br />";
              
              echo "There are " . $number_of_words_replaced . " words that have been replaced";
              
              echo "<br />";
              echo "<br />";
              
              
              echo "Can you read from the right?";
              echo "<br />";
              echo strrev($message);
              
              
              
              echo "<br />";

              ?>
          
          
          </p>
     
          
      </div>
    

      

      
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
      

      
  </body>
</html>