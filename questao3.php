<?php
function PreencheArray(){
	$arr = [];
	$nums = '';
	// for($i = 0; $i < 20;$i++){
		// $arr[$i] = rand(1,10);
	// }
	$arr = array_map(function () {
       return rand(0, 10);
   }, array_fill(0, 20, null));
   
	for($i = 1; $i <= 10;$i++){
		if(!in_array($i,$arr)){
			$nums = $nums . $i . ',';
		}
	}
	$nums = substr_replace($nums ,"",-1);
	echo 'Os números que não se repetem são:' . $nums;
	
}

preencheArray();



?>