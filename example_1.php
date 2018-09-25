<!DOCTYPE html>
<!-- index.php -->
<html>
  <head>
   <meta charset="UTF-8">
  </head>
  <body>
  	<?php
  		$mycounter = 1;
  		$mystring ="hello";
  		$myArray = array("one","two","three");
  		echo $mystring.'<br>';
  		echo $mycounter.'<br>';
  		for($i=0;$i<3;$i++){
  			
  			echo $myArray[$i]."<br>";
  		}
   	?>
  </body>
 </html>