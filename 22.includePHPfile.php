<?php
    ob_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
      
    <title>Include file</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
      
      <style>
          .containingDiv{
              border: 1px solid #7c73f6;
              margin-top: 100px;
              border-radius: 15px;
          }
      </style>

  </head>
    
  <body>
      
      
<?php
      
    include "header.php";  

?>
      
      
  <div class="container-fluid">      
      <div class="row">
          <div class="col-sm-offset-1 col-sm-10 containingDiv">
              <h1>Include file</h1>
              
              <div>
                  
                  
                  
                  
                  
                  
              </div>
              
              
          </div>
      </div>
      
      

      
      

      
  </div>
    

      
<?php
      
    include "footer.php";  

?>
      
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
      

      
  </body>
</html>