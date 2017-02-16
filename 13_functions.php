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
                
                function say_hello($name) {
                    echo "Say hello to {$name}! <br>";
                }
              
              say_hello("Andrew");
               say_hello("Jim");
               say_hello("Mel");
               say_hello("Jess");
              
                function sum($num1, $num2) {
                    echo $num1 + $num2 . "<br>";
                }
                
                sum(2,5);
                sum(86,70);
                sum(100,1);
                sum(50,150);
                sum(3259612890,231596);
              
            
              ?>
              
         
          </div>
    </div>
    
  </body>
</html>