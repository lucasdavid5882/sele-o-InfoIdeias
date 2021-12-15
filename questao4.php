<?php
function SEQUENCIACRESCENTE($arr){
    $n = count($arr);
    $count = 0;
    $index = -1;
  
    for($i = 1; $i < $n; $i++){
          
        if ($arr[$i - 1] >= $arr[$i])
        {
              
            $count++;
            $index = $i;
        }
    }
  
    // If count is greater than one
    if ($count > 1){
        return 'false' . '</br>';
	}
  
    // If no element is removed
    if ($count == 0){
        return 'true' . '</br>';
	}
  
    // If only the last or the
    // first element is removed
    if ($index == $n - 1 || $index == 1){
        return 'true' . '</br>';
	}
  
    // If a[index] is removed
    if ($arr[$index - 1] < $arr[$index + 1]){
        return 'true' . '</br>';
	}
  
    // If a[index - 1] is removed
    if ($arr[$index - 2] < $arr[$index]){
        return 'true' . '</br>';
	}
  
    return 'false' . '</br>';
}
  
  
echo SEQUENCIACRESCENTE([1, 3, 2, 1]);
echo SEQUENCIACRESCENTE([1, 3, 2]);
echo SEQUENCIACRESCENTE([1, 2, 1, 2]);
echo SEQUENCIACRESCENTE([3, 6, 5, 8, 10, 20, 15]);
echo SEQUENCIACRESCENTE([1, 1, 2, 3, 4, 4]);
echo SEQUENCIACRESCENTE([1, 4, 10, 4, 2]);
echo SEQUENCIACRESCENTE([10, 1, 2, 3, 4, 5]);
echo SEQUENCIACRESCENTE([1, 1, 1, 2, 3]);
echo SEQUENCIACRESCENTE([0, -2, 5, 6]);
echo SEQUENCIACRESCENTE([1, 2, 3, 4, 5, 3, 5, 6]);
echo SEQUENCIACRESCENTE([40, 50, 60, 10, 20, 30]);
echo SEQUENCIACRESCENTE([1, 1]);
echo SEQUENCIACRESCENTE([1, 2, 5, 3, 5]);
echo SEQUENCIACRESCENTE([1, 2, 5, 5, 5]);
echo SEQUENCIACRESCENTE([10, 1, 2, 3, 4, 5, 6, 1]);
echo SEQUENCIACRESCENTE([1, 2, 3, 4, 3, 6]);
echo SEQUENCIACRESCENTE([1, 2, 3, 4, 99, 5, 6]);
echo SEQUENCIACRESCENTE([123, -17, -5, 1, 2, 3, 12, 43, 45]);
echo SEQUENCIACRESCENTE([3, 5, 67, 98, 3]);



?>