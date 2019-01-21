<?php
$arr=array("Samreen"=>"31","Jahan"=>"41","Warsha"=>"39","Rania"=>"40");
asort($arr);
echo "Sorting in Assending order in terms of Value.<br>";
foreach ($arr as $x => $x_value) {
	echo "Key: ".$x.",Value:".$x_value;
	echo "</br>";
}

echo "</br>";
echo "</br>";
ksort($arr);
echo "Sorting in Assending order in terms of Key.<br>";
foreach ($arr as $x => $x_value) {
	echo "Key: ".$x.",Value:".$x_value;
	echo "</br>";
}
echo "</br>";
echo "</br>";
$array_decend=array("Samreen"=>"31","Jahan"=>"41","Warsha"=>"39","Rania"=>"40");
rsort($array_decend);
echo "Sorting in Decending order in terms of Value.<br>";
foreach ($arr as $y => $y_value) {
	echo "Key: ".$y.",Value:".$y_value;
	echo "</br>";
}
echo "</br>";
echo "</br>";
krsort($arr);
echo "Sorting in Decending order in terms of Key.<br>";
foreach ($arr as $y => $y_value) {
	echo "Key: ".$y.",Value:".$y_value;
	echo "</br>";
}



?>