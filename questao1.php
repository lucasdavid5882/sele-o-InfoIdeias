<?php
function SeculoAno($ano){
	return "século " . ceil($ano/100) . "</br>";
}

echo SeculoAno(1905);
echo SeculoAno(1700);

?>