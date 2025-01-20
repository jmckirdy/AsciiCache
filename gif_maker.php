<?php
//create an array with the links to the files
$gifs = array(
	'./scpgif/01_chicken.gif',
	'./scpgif/02_peon.gif',
	'./scpgif/03_sparta.gif'
);

//create a randIndex, using array_rand() with the arrayname as the argument
$i = 0;
$randomIndex = 
	
//while ($i < 3){
	//$i = $i + 1;
//	$ri = array_rand($gifs)
//	echo $ri;	
//	$i++;
//}

//echo the html
echo "<img src='$randomIndex' alt='$randomIndex'>";

?>


