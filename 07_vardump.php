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
                    $student = array(
                    'first_name' => 'Andrew',
                    'last_name' => 'Bloyce',
                    'country_name' => 'Australia',
                    'age' => 26,
                    'logged_in' => true
                    
                    );
              
                    echo "<pre>";
                    var_dump($student);
                    echo "</pre>";
              
                    echo "<pre>";
                    print_r($student);
                    echo "</pre>";
              ?>
              
          </div>
    </div>
    
  </body>
</html>