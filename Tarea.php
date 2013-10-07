<?php
$promedio=0;
$ventas=array(100.50,70.55,88.50,28.54,99.67,68.67,99.60,77.80,75.78,90.85,
90.40,73.55,75.30,98.54,79.67,98.57,59.90,99.80,100.00,94.85);
for($i=0;$i<count($ventas);$i++){
	$promedio=$promedio+$ventas[$i];
}
$promedio=$promedio/count($ventas);
echo "El promedio de " .count($ventas). " elementos es " .$promedio;
?>
