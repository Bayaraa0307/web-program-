<!DOCTYPE html>
<!-- index.php -->
<html>
  <head>
   <meta charset="UTF-8">
  </head>
  <body>
  	<?php
        echo test();
       function test()
       {
          static $count = 0;
          echo "value: ".$count;
          $count++;
       }
        static $int = 0; // Allowe
        echo $int;
        echo "<br>a: [".(20>9)."]<br>";
        echo "b: [".(5==6)."]<br>";
        echo "c: [".true."]<br>";
        echo "d: [".false."]<br>";
         $myname = "Brian";
         $myage = 37;
         echo "a: " . (1==1)*true . "<br>"; // Numeric literal
         echo "b: " . "Hello" . "<br>"; // String literal
         echo "c: " . FALSE . "<br>"; // Constant literal
         echo "d: " . $myname . "<br>"; // String variable
         echo "e: " . $myage . "<br>"; // Numeric variable
         $day_number=200;
          $days_to_new_year = 366 - $day_number; // Expression
          if ($days_to_new_year < 30)
          {
           echo "Not long now till new year"; // Statement
          }
          else 
          {
            echo "long now till new year days.<br>";
          }
          $a = "1000";
         $b = "+1000";
         if ($a != $b) echo "1";
         if ($a !== $b) echo "2<br>";
          $a = 2; $b = 3;
         if ($a > $b) echo "$a is greater than $b<br>";
         if ($a < $b) echo "$a is less than $b<br>";
         if ($a >= $b) echo "$a is greater than or equal to $b<br>";
         if ($a <= $b) echo "$a is less than or equal to $b<br>";
         $bank_balance=300;
         $savings=0;
          if ($bank_balance < 100)
          {
          $money = 1000;
          $bank_balance += $money;
          echo $bank_balance;
          }
          else if($bank_balance>200){
            $savings+=100;
            $bank_balance-=100;
            echo $savings."<br>".$bank_balance;          }
          else
          {
            $savings +=50;
            $bank_balance-=50; 
            echo $savings."<br>".$bank_balance;
          }
          $page="skjfk";
          if ($page=="home") echo "<br>you select home";
          else if ($page=="about") echo "<br>you select about";
          else if ($page == "news") echo "<br>you select news";
          else if ($page == "login") echo "<br>you select login";
          else if ($page == "link") echo "<br>you select link";
          else echo "<br>nice";
          switch($page)
          {
               case "home":
                    echo ",.1";
                    break;
                case "news":
                    echo "2";
                    break;
                case "login":
                    echo "3";
                    break;
                case "login":
                    echo "4";
                    break;

                case "link":
                    echo "5";
                    break;
                case "spam":
                    echo "6";
                    break;
                default:
                    echo "<br>goy odor <br>";
                    break;

          }
            
           for ($count = 1 ; $count <= 12 ; ++$count)
           {            
           echo "$count times 12 is " . $count * 12;
           echo "<br>";
           }
           $fp = fopen("text.txt", 'wb');
           for ($j = 0 ; $j < 100 ; ++$j)
           {
           $written = fwrite($fp, "goy");
           if ($written == FALSE) break;
           }
           fclose($fp);
           $j = 10;
           while ($j > -10)
           {
           $j--;
           if ($j == 0) continue;
           echo (10 / $j) . "<br>";
           }

      ?>
  </body>
 </html>