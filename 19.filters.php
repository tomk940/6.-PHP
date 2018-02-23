<!DOCTYPE html>
<html lang="en">
  <head>
      
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
      
    <title>Filters</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
      
      <style>

      </style>

  </head>
    
  <body>
      
      <div class="container-fluid">
          <h1>Filters</h1>
          

            <div>

                  <h3>Clean User Inputs</h3>
                
                
<?php
        //username example
$myUsername = '<script>window.alert("Hi")</script>';
              
                //removes html tags
$myUsername = filter_var($myUsername, FILTER_SANITIZE_STRING);
                
echo $myUsername;
                
                
        //e-mail example
$myEmail = 'tom@    hot\\\mail    .com';
              
                  //removes spaces and symbols
$myEmail = filter_var($myEmail, FILTER_SANITIZE_EMAIL);
echo "<br />";       
echo $myEmail;
                
        //URL example
$myURL = 'http://££www.  google.com';
              
                //removes spaces and symbols
$myURL = filter_var($myURL, FILTER_SANITIZE_URL);
echo "<br />";       
echo $myURL;
                
                
                
                
                
?>
          
                
                
                <h3>Validate User Inputs</h3>
                

                
<?php

            //email validation
            //email doesnt have a @ symbol
$myEmail = 'tom@    hot\\\mail    .com';

$myEmail = filter_var($myEmail, FILTER_SANITIZE_EMAIL);
echo "<br />";       
echo "<p>Cleaned email: $myEmail</p>";
    
echo "<p>Email validation: " . filter_var($myEmail, FILTER_VALIDATE_EMAIL) . "</p>";
        
if(filter_var($myEmail, FILTER_VALIDATE_EMAIL)){
    echo "<p>Valid Email</p>";
}else{
     echo "<p>inValid Email</p>";
}         
                
            //URL validation
$myURL = 'http://www.google.com';
              
                //removes spaces and symbols
$myURL = filter_var($myURL, FILTER_VALIDATE_URL);
echo "<br />";       
echo $myURL;
                
if(filter_var($myURL, FILTER_VALIDATE_URL)){
    echo "<p>Valid URL</p>";
}else{
     echo "<p>inValid URL</p>";
}                

?>

                
                
                
          
          
          </div>
              
              
          

          
      </div>
    

      

      
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
      

      
  </body>
</html>