<?php
#Función sin parametros
function saludo(){
	echo "hola <br>";
}

saludo();


#Función con parametro
function despedida($adios){
	echo $adios; #sin salto
	echo "<br>";
	echo "$adios <br>";# con salto
	echo $adios."<br>";# con salto
}

despedida("bye bey");


#Función con parametro y return
function retorno($retornar){
	return "$retornar <br>";# con salto
}

echo retorno("aRetornar");

?>