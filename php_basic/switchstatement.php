<DOCTYPE html>
  <html lang="en">
    <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width= device-width,initial- scale=1.0">
       <meta http-equiv="X-UA-Compatiable" content="ie=edge">
       <title>PHP-Switch Statement</title>
    </head>
    <body>
      <h2>Switch Statement</h2>
      <?php
      $grade = 'A';
      // $grade = 'B';
      // $grade = 'C';
      switch($grade){
        case 'A':
          echo '<h3 style="color: green">You are Winner;)</h3>';
          break;
        case 'B':
          echo '<h3 style="color: blue">You Have Passed!</h3>';
          break;
        default:
        echo '<h3 style="color: Red">Failed, Sorry better luck next time.</h3>';
      }
      ?>
    </body>
  </html>
