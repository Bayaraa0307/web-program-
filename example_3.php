<!DOCTYPE html>
<!-- index.php -->
<html>
  <head>
   <meta charset="UTF-8">
  </head>
  <body>
  	<?php
     $oxo = array(array('x',' ','o'),
                  array('o','o','x'),
                  array('x','o',' '));
     for($i=0;$i<2;$i++){
      for($j=0;$j<2;$j++){

       echo $oxo[$i][$j];
      }
    }
   	?>
  </body>
 </html>