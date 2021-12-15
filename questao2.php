<?php
function PrimoInferior($num){
  $n = 0;
  if ($num == 2 || $num == 3){
    return $num." ";
  } 
  elseif ($num % 6 == 1 || $num % 6 == 5) {
    for($i = 2; $i*$i <= $num; $i++) {
      if($num % $i == 0){
        $n++;
        break;
      }
    }
    
    if ($n == 0){
      return $num." ";
    } 
  }
}

$inicio = 10;
$fim = 27;
$contador = 0;
$primos = '';

for($i = $inicio; $i < $fim + 1; $i++) {
	
  if(PrimoInferior($i)!= NULL){
	  $contador++;
	  $primos = $primos . PrimoInferior($i) . ',';
  }
}
$primos = substr_replace($primos ,"",-1);
echo 'o numero de primos é ' . $contador . ' os numeros são:'. $primos; 


?>