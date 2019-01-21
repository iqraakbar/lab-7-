<?php
echo "First Array:";
$numeric_array=array("a"=>"iqra","b"=>"rubab","c"=>"aqsa","d"=>"rubab",3,4,3,5,5,6,7,4);
print_r(array_unique($numeric_array));
echo "<br>";
echo "Second Array:";
$numeric_array=array(10,22,20,10,5,5,6,7,4,"a"=>"rubab","b"=>"rubab","c"=>"aqsa","d"=>"aqsa");
print_r(array_unique($numeric_array));



?>