<!DOCTYPE html>
<html lang="en">
  <head>
      
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
      
    <title>Array Functions</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
      
      <style>

      </style>

  </head>
    
  <body>
      
      <div class="container-fluid">
          <h1>Array Functions</h1>
          

            <div>
            <?php

             $shoppingBasket1 = array("bread", "milk", "eggs", "bread");
                
             $shoppingBasket2 = array("apple", "banana", "orange");
                
            $shoppingBasket3 = array_merge($shoppingBasket1, $shoppingBasket2);
                
            echo "<p>Shopping Basket: </p>";
                print_r($shoppingBasket3);
                
                
            //count items insisde of an array
            echo "<p>There are " . count($shoppingBasket3) . " items in the shopping basket.</p>";
            
            //count how many of each item in an array
            
            $count = array_count_values($shoppingBasket3);
                
            echo "<p>Basket count</p>";
            print_r($count);
            echo "<p>Number of bread item in Basket: " . $count["bread"] . "</p>";
                
             //see if there is a certain value in the array
            if(in_array("bread", $shoppingBasket3)){
                echo "<p>There is Bread in the basket.</p>";
            }else{
                echo "<p>There is no bread in the basket.</p>";
            }
                
                
            //add item to array
            array_push($shoppingBasket3, "yogurt");
            print_r($shoppingBasket3);
                
            
            if($_GET["submit"]){
                if($_GET["item"]){
                    array_push($shoppingBasket3, $_GET["item"]);
                }
                echo "<br />";
                print_r($shoppingBasket3);
            }
            
            
            
            //add an array inside of an array
                //first parameter is the name of the array we are adding to
                //second is the position in the array we are adding to
                //third is how many objects we are replacing (can be 0)
                //fourth is the objects we are adding e.g. another array
            echo "<p>Replacing the first two items in basket</p>";
            array_splice($shoppingBasket3, 0, 2, array("mango", "kiwi"));
            print_r($shoppingBasket3);    
                
                
                //sort an array a-z
                echo "<p>Sorted in ascending order</p>";
                sort($shoppingBasket3);
                print_r($shoppingBasket3);
                
                //descending order z-a
                
                echo "<p>Sorted in Descending order</p>";
                rsort($shoppingBasket3);
                print_r($shoppingBasket3);
                
                
                $carMakes = array("BMW"=>"X5", "Audi"=>"A6", "Mercedes"=>"CLS");
                
                echo "<p>Car Makes</p>";
                print_r($carMakes);

                //sort by value
                echo "<p>Sort by ascending order by Value</p>";
                asort($carMakes);
                print_r($carMakes);
                
                //sort by keys
                
                echo "<p>Sort by descending order by Value</p>";
                arsort($carMakes);
                print_r($carMakes);
                
                    //sort by value
                echo "<p>Sort by ascending order by Key</p>";
                ksort($carMakes);
                print_r($carMakes);
                
                //sort by keys
                
                echo "<p>Sort by descending order by Key</p>";
                krsort($carMakes);
                print_r($carMakes);
                

            ?>
          
            <br />
<!--            echo "<p></p>";    -->
                
            <form method="get">
                <label for="item">Add Item to Shopping Basket</label>
                <input type="text" name="item" id="item">
                <input type="submit" name="submit" value="submit">
            </form>
                
                
                
                
                
          
          
          </div>
              
              
          

          
      </div>
    

      

      
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
      

      
  </body>
</html>