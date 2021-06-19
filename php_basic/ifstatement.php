<DOCTYPE html>
  <html lang="en">
    <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width= device-width,initial- scale=1.0">
       <meta http-equiv="X-UA-Compatiable" content="ie=edge">
       <title>IF - Statement</title>
    </head>
    <body>
      <?php
        echo '<h2>If statement</h2>';
        $grad = 90;

        if($grad >= 50){
          echo '<h3 style="color: green">You Have Passed!</h3';
        }
        else{
          echo '<h3 style="color: Red">Failed, Sorry better luck next time.</h3>';
        }
        $grad = 'B';

        if($grad == 'A'){
          echo '</br><h2 style="color : yellow">You are a superstar:)</h2>';
        }
        elseif($grad == 'B'){
          echo '<h2> YOU DID WELL!</h2>';
        }
        else{
          echo '<h2>You have failed..:(</h2>';
        }

      ?>

    </body>
  </html>
