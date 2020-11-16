<?php

#EL INDEX: En el mostraremos la salida de las vistas al usuario y también a traves de el enviaremos las distintas acciones que el usuario envie al controlador.

#require() establece que el código del archivo invocado es requerido, es decir, obligatorio para el funcionamiento del programa. Por ello, si el archivo especificado en la función require() no se encuentra saltará un error "PHP Fatal error" y programa PHP se detendrá.

#La versión require_once() funciona de la misma forma que el require(), solo que al usar require_once() se impide que se cargue más de una vez un mismo archivo.

#Si requerimos el mismo código más de una vez corremos el riesgo de redeclaraciones de variables, funciones o clases.

#El require_once() también se diferencia del include en que el "require_once" solo se hace una vez.

#Con "require_once "nombreCarpeta/nombreArchivo.php" pido que encuentre y traiga el archivo "nombreArchivo.php" que está en la carpeta "nombreCarpeta", esto permite que encutre y se pueda usar lo que haya en "nombreArchivo.php".

require_once "controllers/controller.php";
require_once "models/model.php";

$mvc = new MVCcontroller();#creo un objeto de controler
$mvc -> plantilla();#uso un método del objeto controler

?>