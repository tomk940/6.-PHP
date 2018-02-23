<!DOCTYPE html>
<html lang="en">
  <head>
      
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
      
    <title>Get and Post</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
      
      <style>

      </style>

  </head>
    
  <body>
      
      <div class="container-fluid">
          <h1>Get and Post</h1>
          

            <div>
            <?php

              //how to store 'get' data with php
                echo "<p>Get:</p>";
                print_r($_GET);
                if($_GET["submit"]){
                    if($_GET["username"]){
                        echo "<p>Hi ". $_GET["username"] . ", Welcome to my page!</p>";
                    }
                }
//                
                echo "<p>Post:</p>";
                print_r($_POST);
                
                if($_POST["submit"]){
                    if($_POST["country"]){
                        echo "<p>Your country is " . $_POST["country"] . "</p>";
                    }
                }
//                
                


            ?>
          
            <br />
                
            <form method="get">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username">
                
                <input type="submit" name="submit" value="submit">
                
            </form>    
                
                <br />
                
            <form method="post">
                <label for="country">Country:</label>
                <input type="text" name="country" id="country">
                
                <input type="submit" name="submit" value="submit">
                
            </form>    
                
          
          
          </div>
              
              
          

          
      </div>
    

      

      
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
      

      
  </body>
</html>