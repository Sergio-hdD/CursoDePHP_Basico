<?php

#Código Imperativo o Espagueti

$automovil1 = (object)["marca"=>"Toyota","modelo"=>"Corola"];
$automovil2 = (object)["marca"=>"Chevrolet","modelo"=>"Corsa"];

function mostrar($automovil){
	echo "<p>Hola! soy un $automovil->marca, modelo $automovil->modelo<p>";
}

mostrar($automovil1);
mostrar($automovil2);


?>