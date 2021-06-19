<DOCTYPE html>
  <html lang="en">
    <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width= device-width,initial- scale=1.0">
       <meta http-equiv="X-UA-Compatiable" content="ie=edge">
       <title>PHP primer-String Manipulation</title>
    </head>
    <body>
      <h2 style="color : 	#8000ff"><ul><li>String Manipulation</li></ul></h2>
      </br>
      <?php
           $phrase1 = "Student Who came late";
           $phrase2 = "she is always came late. ";
           $name = "nida mIrza";
           echo $phrase1 . ", named Rukhsar, ". $phrase2 .'</br>';
           echo '</br>';
           echo '<hr style="border-top: 3px dotted #8000ff;">';
           // string transformation
           echo '<b style="color : green">uppercase first letter:</b> '.ucfirst($name).'</br>';
           echo '<b style="color : blue">uppercase first letter of each word:</b> '.ucwords($name).'</br>';
           echo '<b style="color : green">upper case:</b> '.strtoupper($name).'</br>';
           echo '<b style="color : blue">lower case:</b> '.strtolower($name).'</br>';

           echo '<hr style="border-top: 3px dotted #8000ff;">';



           echo '<b style="color : green">Repeats String: </b>'. str_repeat('n',5).'</br>';
           echo '<b style="color : blue">Repeats String: </b>'. strtoupper(str_repeat($name,5)).'</br>';
           echo '<b style="color : green">Get a substring :</b> '.substr($name,2,10).'</br>';
           echo '<b style="color : #3a123d">Find the length of the string :</b> '.strlen($name).'</br>';


           echo '<hr style="border-top: 3px dotted #8000ff;">';

           echo '<b style="color : blue">Find Character n :</b> '.strchr($name,'n').'</br>';
           echo '<b style="color : green">Find Character m :</b> '.strchr($name,'m').'</br>';
           echo '<b style="color : blue">Find Character a:</b> '.strchr($name,'a').'</br>';
           echo '<b style="color : green">Find Character i:</b> '.strchr($name,'i').'</br>';

           echo '<hr style="border-top: 3px dotted #8000ff;">';

           echo '<b style="color : blue">Get position of string :</b> '.strpos($name,'I').'</br>';
           echo '<b style="color : green">Without Trime :</b> '."A". "B C D"."E".'</br>';
           echo '<b style="color : blue">Trime space both the side:</b> '."A".trim(" B C D")."E".'</br>';
           echo '<b style="color : green">Trime space both the side:</b> '."A".ltrim(" B C D")."E".'</br>';
           echo '<b style="color : blue">Trime space both the side:</b> '."A".rtrim(" B C D")."E".'</br>';


           echo '<hr style="border-top: 3px dotted #8000ff;">';
           echo '<b style="color : green">Replace String with another:</b> '.str_replace("stand","sit",$phrase2).'</br>';



      ?>

    </body>
  </html>
