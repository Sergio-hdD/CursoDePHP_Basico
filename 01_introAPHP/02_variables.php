<?php

#variable de tipo numérico
$numero = 5;
echo "Esto es una variable numérica: $numero <br>";
var_dump($numero);# me dice que tipo de variable es y el valor
echo "<br>";

#variable de tipo texto
$texto = "palabra";
echo "Esto es una variable de texto: $texto";
echo "<br>";
var_dump($texto);# me dice que tipo de variable es, la cantidad de  caracteres y el valor
echo "<br>";

#variable de tipo buleano
$buleana = true;
echo "Esto es una variable buleana: $buleana <br>";
var_dump($buleana);# me dice que tipo de variable es y el valor
echo "<br>";

#variable de tipo arreglo
$colores = array("rojo","amarillo" );
echo "Esto es una variable de tipo arreglo : $colores[1]";
echo "<br>";
var_dump($colores);# me dice que tipo de variable es, el tamaño, además en cada posición, el tipo, la cantidad de  caracteres y el valor 
echo "<br>";

#variable de tipo arreglo con propiedades
$verduras = array("verdura1" => "lechuga" , "verdura2" => "cebolla" );
echo "Esto es una variable de tipo arreglo con propiedades : $verduras[verdura1]";
echo "<br>";
var_dump($verduras);# me dice que tipo de variable es, el tamaño, además en cada posición, el nombre de la propiedad, el tipo, la cantidad de  caracteres y el valor
echo "<br>";

#variable de tipo Objeto
$frutas = (object)["fruta1" => "pera" , "fruta2" => "manzana"];
echo "Esto es una variable de tipo objeto : $frutas->fruta1";
echo "<br>";
var_dump($frutas);# me dice que tipo de variable es, que tiene un primer coonjunto de clase "(stdClass)#1" cuntos valores tiene cargados "(2)" y para cada uno de estos el nombre de la propiedad (fruta1 o fruta2), el tipo, la cantidad de  caracteres (4 para pera, 7 para manzana) y el valor (pera o manzana)
?>