<!DOCTYPE html>
<html lang="en">
  <head>
      
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
      
    <title>Send an e-mail in HTML Format</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
      
      <style>

      </style>

  </head>
    
  <body>
      
      <div class="container-fluid">
          <h1>Send an e-mail in HTML Format</h1>
          

            <div>

                
<?php

$to =  "tomk940@hotmail.com";
$subject = "Test";
$message = "<html>
    <body>
        <h1 style='color: blue'>We are learning PHP</h1>
        <h3 style='color:red'>What are you waiting for</h3>
        <p style='text-align: center'>join us</p>
    </body>
</html>";
$headers = "Content-type: text/html;";

echo mail($to, $subject, $message, $headers);



?>
          
           
                
                
                
                
          
          
          </div>
              
              
          

          
      </div>
    

      

      
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
      

      
  </body>
</html>