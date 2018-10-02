<?php
	$lesson = array(array(
			'lessonid' => "ISCI1",
			'lessonname' => "WEB1",
			'lessoncredit' => 3),
	 	array(
			'lessonid' => "ISCI2",
			'lessonname' => "WEB2",
			'lessoncredit' => 3),
	 	array(
			'lessonid' => "ISCI3",
			'lessonname' => "WEB3",
			'lessoncredit' => 3),
	  	array(
			'lessonid' => "ISCI4",
			'lessonname' => "WEB4",
			'lessoncredit' => 3));
	$students = array(

	$student[] = array(
		'lastname' => "Suuri",
		'name' => "Byambajargal",
		'sisi' => "15b1seas0318",
		'Occu' => "IT"
	),
	$student[] = array(
		'lastname' => "Enkhbold",
		'name' => "Amarjargal",
		'sisi' => "14b1seas0881",
		'Occu' => "IT"
	),

	$student[] = array(
		'lastname' => "Bold",
		'name' => "Erdene",
		'sisi' => "15b1seas1189",
		'Occu' => "IT"
	),

	$student[] = array(
		'lastname' => "Lkhagva",
		'name' => "Dulguun",
		'sisi' => "14b1seas1181",
		'Occu' => "IT"
	),

	$student[] = array(
		'lastname' => "Enkhjargal",
		'name' => "Azjargal",
		'sisi' => "14b1seas0882",
		'Occu' => "IT"
	)
);
?>


<?php 

function print_all($husnegt){ 

	function my_sort($a, $b){
		return strcmp($a["name"], $b["name"]);
	}
	usort($husnegt, "my_sort");
	echo "<table border='1px'>";
	echo "<tr> ";
	echo 	"<th>Firstname </th>";
	echo 	"<th>Lastname</th>";
	echo 	"<Th>Occupation</TH>";
	echo 	"<th>sisi</th>";
	echo 	"<th>lesson</th>";
	echo "</tr>";
	for($i = 0; $i < count($husnegt); $i++){

		echo "<tr>";
		echo "<th>". $husnegt[$i]['name']."</th>";
		echo "<th>". $husnegt[$i]['lastname']."</th>";
		echo "<th>". $husnegt[$i]['Occu']."</th>";
		echo "<th>". $husnegt[$i]['sisi']."</th>";
		echo "</tr>";
		}

	echo "	</table>";
			
}
print_all($students);
?>

<?php
	
	function search($husnegt, $ner){
		echo "<table border='1px'> ";
		echo "<tr > ";
		for($i=0;$i<count($husnegt);$i++){
			if(strpos(strtolower($husnegt[$i]['name']),strtolower($ner))!==false){
				echo "<tr><th>". $husnegt[$i]['name']."</th>";
				echo "<th>". $husnegt[$i]['sisi']."</th></tr>";
			}
		}
		echo "</tr> ";
		echo "</table> ";
	}

?>
<?php
	echo "<form action='laboratory1.php' method='post'>";
	echo "Search Name: <input type='text' name='name'><br>";
	echo "<input type='submit'><br>";
	echo "</form>";
	if(isset($_POST['name'])){
		search($students, $_POST["name"]);
	}

	echo "<form action='laboratory1.php' method='post'>";
	echo "Update Sisi: <input type='text' name='sisi'><br>";
	echo "Lesson ID: ";
	echo'<select name="lessons">';
	foreach ($lesson as $key=>$value) 
		echo '<option value='.$value["lessonname"].'>'.$value['lessonname'].'</option>';
	echo '</select>';
	echo "<br><input type='submit'><br>";
	echo "</form>";
	if(isset($_POST['lessons'])){
		echo $_POST['lessons'].'<br>';
		echo $_POST['sisi'];
	}
	update (1,2,$students,$lessons);
	function update($sisi, $class, &$husnegt){
	$lessons =array(
		$lesson[] = array(
			'lessonid' => "MATH01",
			'lessonname' => "MATHEMATICS",
			'lessoncredit' => "3",
		),	
		$lesson[] = array(
			'lessonid' => "MATH02",
			'lessonname' => "MATHEMATICS2",
			'lessoncredit' => "3",
		),
		$lesson[] = array(
			'lessonid' => "ISCI",
			'lessonname' => "WEB",
			'lessoncredit' => "3",
		),	
	);
	for($i=0;$i<count($husnegt);$i++){
		if($sisi==$husnegt[$i]['sisi']){
			foreach ($husnegt[$i]['lesson'] as $key) {
			
				$key['lessonname']=$lesson[2]['lessonname'];
				$key['lessonid']=$lesson[2]['lessonid'];
				$key['lessoncredit']=$lesson[2]['lessoncredit'];
				}
		    }
		}
	}
	$sisi1='15b1seas0318';
	$class1='web';
	update($sisi1, $class1, $students );
?>
