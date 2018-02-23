<?php
    ob_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
      
    <title>Date and Time</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
      
      <style>
          h1{
              color: purple;
          }
          
          h3{
            color: #2ac0b3;
          }
      </style>

  </head>
    
  <body>
      
  <div class="container-fluid">      
      <div class="row">
          <div class="col-sm-offset-1 col-sm-10 contactForm">
              <h1>Date and Time</h1>
              
              <div>
                  
                  <h3>Date using the date() function:</h3>
                  
          <?php
                  //day of month:
//                        d = (01/31)
//                        j = (1/31)
                  //Day of the Week
//                        D = (Mon/Sun)
//                        l = (monday)
//                        L = (MONDAY)
                  //Month
//                        m = (01/12)
//                        M = (Jan/Dec)
//                        F = (January)
                  //Year
//                        y = (09/15)
//                        Y = (2009-2015)
                  
                  $today = date("d M, Y");
                  $today2 = date("j/m/y");
                  echo $today;
                  echo " | ";
                  echo $today2;
          ?>
                  
                  <h3>Time using the date() function:</h3>
                  
          <?php
                  //hour
//                      h = (01-12) 12hour
//                      H = (00-24) 24hour
                  //minutes
//                        i = (01-59)
                  //seconds
//                        i (01-59)
                  //ante meridiem and post meridiem
//                    a - lowercase
//                    A - uppercase
                  
                  $timeToday = date("h:i:i A");
                  echo $timeToday;

          ?>

                  <h3>Current timestamp using the time() function:</h3>
                  
          <?php
                  $timestamp = time();
                  echo $timestamp;
          ?>

                  
                  <h3>Convert timestamp to time:</h3>
                  
                  
              <?php
                  $time = date("F d, Y h:i:s A", $timestamp);
                  echo $time;
          ?>
                  
                  
                  
                  <h3>Convert time to timestamp  using mktime() function:</h3>
                  
          <?php
                  //mktime(hour, minute, second, month, day, year)
                  $timestamp2 = mktime(15, 20, 12, 5, 10, 2017);
                  echo $timestamp2;
                  echo " | ";
                  $time2 = date("F d, Y h:i:s A", $timestamp2);
                  echo $time2;
          ?>
                  
                  
                  <h3>Find out what day of the week you were born:</h3>

          <?php
                  $timestamp3 = mktime(0,0,0, 15, 4, 1977);
                  $time3 = date("l", $timestamp3);
                  
                  echo "<p>You Were Born on a $time3 </p>";
          ?>
                  
                  <h3>FDate in 1000 days from now:</h3>
                  
          <?php
                  $timestamp4 = mktime(0,0,0, date("m"), date("d")+1000, date("Y"));
                  
                  $time4 = date("D d M, Y", $timestamp4);
                  echo "<p>date in 1000 days is: $time4 </p>";
          ?>

                  
              </div>
              
              
          </div>
      </div>
      
      

      
      

      
  </div>
    

      

      
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
      

      
  </body>
</html>