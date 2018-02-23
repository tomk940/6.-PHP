<!DOCTYPE html>
<html lang="en">
  <head>
      
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
      
    <title>Data Types: Objects</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
      
      <style>

      </style>

  </head>
    
  <body>
      
      <div class="container-fluid">
          
          
          <h1>Data Types: Objects</h1>
          
          <p>
            
              <?php
              
            
              class car{
//                  //properties
                  public $make = "Ford"; //public means it can be accebile form outside the object
                   private $status = "off";
//                  
//                  
//                  //methods
                  function turn_on(){
                      $this->status = "on"; //we can use 'this' because we are in the objct  otherwise you would have to first find the make  $make->$status
                  }
                  
                  function getStatus(){
                      return $this->status;
                  }
                  
              }
              
              $myCar = new car;
              var_dump($myCar);
              
              echo "<br />";
            echo $myCar->make;
              echo "<br />";
              
              $myCar->turn_on();
              var_dump($myCar);
              
              echo "<br />";
              echo $myCar->getStatus();
              
              
            
              
              
              ?>
          
          
          </p>
     
          
      </div>
    

      

      
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
      

      
  </body>
</html>