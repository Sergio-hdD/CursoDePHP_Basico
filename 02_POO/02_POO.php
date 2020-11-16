<?php

#CLASE
#Una clase es un modelo que se utiliza para crear objetos que comparten un mismo comportamiento, estado e identidad.

class Automovil{
	#PROPIEDADES: Son las características que puede tener un objeto.
    #private $marca;#así solo puede ser accedida desde dentro de eta clase.
	public $marca; #como publica puede ser accedida desde cualquier parte de la app.
    public $modelo;

    #MÉTODO: Es el algoritmo asosiado a un objeto que indica la capacidad de lo que este puede hacer. La única diferencia entre método y función, es que llamamos método a las funciones de una clase (en la POO), mientras que llamamos funciones a los algoritmos de la programación estructurada.
    public function mostrar(){

    	echo "<p>Hola! soy un $this->marca, modelo $this->modelo<p>";
    }
}#fin class

#OBJETO: Una Entidad provista de métodos o mensajes a los cuales responde propiedades con valores concretos
$a = new Automovil();
$a -> marca = "Toyota";
$a -> modelo = "Corola";
$a -> mostrar();


$b = new Automovil();
$b -> marca = "Chevrolet";
$b -> modelo = "Corsa";
$b -> mostrar();

#NOTA: Un sitio hecho con POO es más seguro, ya que la clase puede estar en un archivo y ser usada (crear y usar un objeto) desde otro. POO es lo ideal para trabajar con el patron de diseño MVC (modelo vista controlador).

#Principio de la POO que se cumplen en este ejemplo:

#ABSTRACCIÓN: Nuevos tipos de datos (el que se quiera, se crea), por ejemplo creamos el Toyota Corola y el Chevrolet Corsa.
#ENCAPSULAMIENTO: Organizar el código en grupos lógicos.
#OCULTAMIENTO: Ocultar detalles de implementación y exponer solo los detalles que sean necesarios para el resto del sistema.

?>