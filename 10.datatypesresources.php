<!DOCTYPE html>
<html lang="en">
  <head>
      
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
      
    <title>Data Types: Resources</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
      
      <style>

      </style>

  </head>
    
  <body>
      
      <div class="container-fluid">
          
          
          <h1>Data Types: Resources</h1>
          
          <p>
            
              <?php
              
              //a reference to an external resource
              
              $myFile = fopen("sometext.txt", "r");
              //r stands for 'reading' 
              
              var_dump($myFile);
              
              echo "<br />";
              
              echo fread($myFile, 20);
              //the number int he parameter is the number of bytes to readfile
              
              echo "<br />";
              echo "<br />";
              
              echo fread($myFile, filesize("sometext.txt"));
              //this will ead all of the file
              
              
              
              
              
              
              ?>
          
          
          </p>
     
          
      </div>
    

      

      
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
      

      
  </body>
</html>