<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Introduction to PHP</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900&amp;subset=latin-ext" rel="stylesheet">
  </head>
  <body>
    
    <div class="container">
          <h1>Up & Running with PHP</h1>
          
          <div class="code-content">
              <?php 
               
                echo 2+2; 
                echo "<br>";
                echo 2*3;
              echo "<br>";
              
              $num1 = 20;
              $num2 = 5;
              
              echo $num1 / $num2;
                  echo "<br>";
              echo $num1 - $num2;
               echo "<br>";
              
              echo (10 * 2) + 5;
              
              
              $total = 20;
              $total +=20;
              $total +=10;
              echo "<br>";
              echo "The total is " . $total . " dollars";
               echo "<br>";
              
              /*
              for($i = 0; $i < 100; $i++) {
                  if($i % 2 == 0) {
                      echo "The number " . $i . " is even. <br>";
                  } else {
                      echo "The number " . $i . " is odd. <br>";
                  }
              }
              */
              
              //FizzBuzz
              
              for($i = 0; $i <= 100; $i++) {
                 if(($i % 3 == 0) && ($i % 5 !== 0)) {
                     echo $i . ": Fizz <br>";
                 } else if (($i % 5 == 0) && ($i % 3 !== 0)) {
                     echo $i . ": Buzz <br>";
                 } else if (($i % 3 == 0) && ($i % 5 == 0)) {
                     echo $i . ": FIZZBUZZ! <br>";
                 } else {
                     echo $i . "<br>";
                 }
                  
                  
              }
              
              ?>
              
         
          </div>
    </div>
    
  </body>
</html>