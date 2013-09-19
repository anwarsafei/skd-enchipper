<?php
$kata=$_POST['kata'];

echo "Kata : </br>";
echo $kata;
echo "</br> </br>";

echo "Hasil convert : </br>";


$n=strlen($kata);

for ($i=0; $i < $n ; $i++) { 
	$up=strtoupper($kata[$i]);
	$conv=(ord($up)) - 30;
	$jwb=chr($conv);

	echo $jwb;
}
?>
