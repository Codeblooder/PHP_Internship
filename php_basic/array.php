<DOCTYPE html>
  <html lang="en">
    <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width= device-width,initial- scale=1.0">
       <meta http-equiv="X-UA-Compatiable" content="ie=edge">
       <title>PHP primer-Arrays</title>
    </head>
    <body>
      <h2>Arrays</h2>
      </br>
      <?php
      // for loop
      // a variable
         $num = 3;

         $numbers = array(11,33,4,5,56,6,10);
         echo $numbers[5];
         $size =count($numbers);

         echo "<p>array Number is size: $size </p>";

         for($i = 0; $i < $size; $i++){
           echo "<p>$numbers[$i]</p>";
         }


    ?>

    </body>
  </html>
