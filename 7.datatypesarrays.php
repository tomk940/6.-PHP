<!DOCTYPE html>
<html lang="en">
  <head>
      
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
      
    <title>Data Types: Arrays</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
      
      <style>

      </style>

  </head>
    
  <body>
      
      <div class="container-fluid">
          
          
          <h1>Data Types: Arrays</h1>
          
          <p>
            
              <?php
              
            $carMakes = array("Audi", "Ford", "BMW");
              
            echo "<p>Car Makes: </p>";
            print_r($carMakes);
              echo "<br />";
              echo "<br />";
              
              
              echo "<p>Car Makes Number 1: </p>";
            echo $carMakes[0];
              
              echo "<br />";
              echo "<br />";
              echo "<br />";
              
              
              $shoppingBasket1 = array("a"=>"bread", "b"=>"milk","c"=>"eggs");
              
              $shoppingBasket2 = array("b"=>"milk", "a"=>"bread", "c"=>"eggs");
              
               $shoppingBasket3 = array("d"=>"yogurt", "e"=>"orange", "f"=>"apple");
              
              $shoppingBasket = $shoppingBasket1 + $shoppingBasket3;
              
              
              echo "Shopping List:";
              print_r($shoppingBasket);
              echo "<br />";
              var_dump($shoppingBasket1);
              echo "<br />";
              var_dump($shoppingBasket2);
              echo "<br />";
              echo "<p>shoppingBasket1 == shoppingBasket2</p>";
              var_dump($shoppingBasket1 == $shoppingBasket2);
              echo "<p>shoppingBasket1 === shoppingBasket2</p>";
              var_dump($shoppingBasket1 === $shoppingBasket2);
              echo "<br />";
              echo "<br />";
              
               print_r($shoppingBasket3);
              echo "<br />";
              echo "<p>shoppingBasket1 <> shoppingBasket3</p>";
              var_dump($shoppingBasket1 <> $shoppingBasket3);
              echo "<br />";
              echo "<> this means is not equal to";
              
              echo "<br />";
              echo "<br />";
              echo "<p>Shopping Basket 1 and 3: </p>";
              print_r($shoppingBasket1 + $shoppingBasket3);
              
              
              
              ?>
          
          
          </p>
     
          
      </div>
    

      

      
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
      

      
  </body>
</html>