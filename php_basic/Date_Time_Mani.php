<DOCTYPE html>
  <html lang="en">
    <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width= device-width,initial- scale=1.0">
       <meta http-equiv="X-UA-Compatiable" content="ie=edge">
       <title>PHP primer-Date and Time Manipulation</title>
    </head>
    <body>
      <h2>Date and Time Manipulation</h2>
      </br>
      <?php
          $datenow = getdate();
          echo "Today's Date :</br>";

           echo $datenow['mday'].'</br>'.'/';
           echo $datenow['mon'].'</br>'.'/';
           echo $datenow['year'].'</br>';

           echo '<hr style="border-top: 3px dotted #800130;">';

           echo "Today's date:".$datenow['mday'].'/'.$datenow['mon'].'/'.$datenow['year'].'</br>';
           echo time();
           echo '</br>';

           print date("m/d/y  G.i:s<br>", time()). '</br>';
           print "Today is:";
           print date("j of F Y.\a\\t g.i a", time());

      ?>

    </body>
  </html>
