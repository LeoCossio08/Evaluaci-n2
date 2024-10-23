<?php
/*
CBTIS 89
Programa que alamacena 5 articulos en un array en que se tiene que sacar el 10% y obtener el resultado final 
Leonardo Cossio Rodriguez
Programacion 3°A T.M
*/

$arrayPrecios=array(500,400,200,700,100);
$longitud=count($arrayPrecios);
echo "*ARREGLO PRECIOS*";
echo "<br>";

for ($i=0;$i<$longitud; $i++){
echo $arrayPrecios[$i],"<br>"; 
}

echo "*ARREGLO IVA*";
echo "<br>";
for ($i=0;$i<$longitud; $i++){
	$arrayIVA[$i]=$arrayPrecios[$i]*0.16;
	echo $arrayIVA[$i];
	echo "<br>";

}
echo "*ARREGLO SUBTOTAL*,<br>";
for ($i=0;$i<$longitud; $i++){
$arraySubtotal[$i]=$arrayPrecios[$i]+$arrayIVA[$i];
echo $arraySubtotal[$i];
echo "<br>";
}
echo "*ARREGLO DESCUENTOS*,<br>";
for ($i=0;$i<$longitud; $i++){
	$arrayDescuentos[$i]=$arraySubtotal[$i]*0.10;
	echo $arrayDescuentos[$i];
	Echo "<br>";
}
echo "*ARREGLO TOTAL*, <br>";
for ($i=0;$i<$longitud; $i++){
	$arrayTotal[$i]=$arraySubtotal[$i]-$arrayDescuentos[$i];
	echo $arrayTotal[$i];
	echo"<br>";
}

