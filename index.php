<!DOCTYPE html>
<!-- index.php -->
<html>
  <head>
   <meta charset="UTF-8">
  </head>
  <body> <!-- Эх бие -->
    <!-- Статик болон динамик агуулгын ялгаа -->
    <?php echo "PHP скриптээр, програмын кодоор үүсгэсэн динамик агуулга."; ?>
    <p>Вэб серверийн цаг: 
    <span><?php echo "<ul>"; 
				for($i=1; $i<=9; $i++){ //давталт
		  			 echo '<table border="4px solid gray">'.'<tr>'.'<td>'.'<li>'.($i).'<td>'.'</li>'."PHP скриптээр, програмын кодоор үүсгэсэн динамик агуулга.".'</td>'.'</tr>'.'</table>'; //dawtaltaar dinamik aguulgiig husnegtend bagtaan delgetsen hewleh uildel.
				}
				echo "</ul>";
              // Системийн цагийг HTTP гаралтад бичих
              echo "Өнөөдөр бол " . date("Y/m/d");
    ?></span>
    </p>
  </body>
</html>