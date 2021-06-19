<DOCTYPE html>
  <html lang="en">
    <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width= device-width,initial- scale=1.0">
       <meta http-equiv="X-UA-Compatiable" content="ie=edge">
       <title>PHP-while - do while</title>
    </head>
    <body>
      <h2>while Loop Concept</h2>
      </br>
      <?php
      // while loop
      $count = 1;
         while( $count < 10){
           echo '<p style="color: green">Welcome to while loop</p> '.$count.'';
           $count++;
         }
         echo '</br>Exit while loop';
      ?>

<h2>do while Loop Concept</h2>
      </br>
      <?php
      // while loop
      $count = 0;
         do{

           echo '<p style="color: blue">Welcome to do while</p>'.$count.'';
           $count++;
         }while($count < 10);
         echo '</br>Exit do while loop';
      ?>



    </body>
  </html>
