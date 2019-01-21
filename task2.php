<?php
//Creating an array of numbers
$numeric_array=array(1,2,3,4,5);
$len=count($numeric_array);
echo "Orignal Array:";
for($j=0; $j<$len; $j++){
	echo $numeric_array[$j];
}
echo "</br>";
//pushing special symbol
array_push($numeric_array,'@','*'); 
//Removing First Item
array_shift($numeric_array);
$length=count($numeric_array);
//iterating array after  pushing
echo "Array After Inserting and Removig First Item:";
for($i=0; $i<$length; $i++){
	echo $numeric_array[$i];
}




?>