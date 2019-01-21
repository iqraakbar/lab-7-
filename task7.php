<?php
$random_one=rand(1,200);
$random_two=rand(1,200);
$random_three=rand(1,200);
$random_four=rand(1,200);
$random_array=array($random_one,$random_two,$random_three,$random_four);
$len=count($random_array);
for($i=0; $i<$len; $i++){
	if($random_array[$i]==166|| $random_array[$i]==50 || $random_array[$i]==62 || $random_array[$i]==152 || $random_array[$i]==02 ){
		echo "Yup!!!!!Found You";
		break;
	}
	else{
		echo "Not Found";
		break;
	}
}


?>