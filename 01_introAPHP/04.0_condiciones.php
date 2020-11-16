<?php

#condicionales 
$a = 5;
$b = 10;

if($a > $b){
	echo "a es mayor que b";
}else if ($a == $b) {
	echo "a es igual que b";
}else{
	echo "a es menor que b";
}

echo "<br> <br>";

#Switchs
$dia = "Sabado";

switch ($dia) {
	case 'Sabado':
		echo "Voy a la fiesta";
		break;

	case 'Viernes':
		echo "Voy a estudiar php";
		break;
	
	case 'Domingo':
		echo "Voy a descansar";
		break;
	
	default:#cualqiera que no una de las anteriores
		echo "Voy a la Universidad";
		break;
}

?>