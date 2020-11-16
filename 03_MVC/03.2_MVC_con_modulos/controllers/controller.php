<?php 

class MVCcontroller{

    #LLAMADA A LA PLANTILLA
    #-----------------------------------------------------    

    public function plantilla(){

        include "views/template.php";#include(): Se utiliza para invocar el archivo que contiene el código html (es decir, incluye el template que está en la carpeta views)
    }

    #INTERACIÓN DEL USUARIO 
    #-----------------------------------------------------    
    public function enlacesPaginasController(){
    
        $enlaces = isset($_GET['action']) ? $_GET['action'] : "";# si "$_GET['action']" trae algo (da true) recibo del Get lo que viene a través de la variable "action" y si es null  (da false) se carga "", de esta forma se evita el "Notice..." .
        echo $enlaces;  
    }

        /* Originalmente la función anterior era así:

        public function enlacesPaginasController(){
       
           $enlaces = $_GET["action"]; #recibo del Get lo que viene a través de la variable "action".
           echo $enlaces;  
        }
        
        Pero saltaba un "Notice undefined index..." en la vista esto era el "$_GET["action"]" y se iba después de tocar uno de los botones, esto pasaba porque la primera vez la variable "action" está vacia ya que aún no se hizo la petición (todavía no existe la variable get).
        Encotré 2 formas de resolverlo
        1- Poniendo "error_reporting(E_ALL ^ E_NOTICE);" en la linea anterior al "$_GET["action"]". El "error_reporting(E_ALL ^ E_NOTICE);" es para configurar de modo que muestre los reportes excepto los notice. (para mi es como tapar el inconveniente)

        2- Es Usar el get así: 
         >>> isset($_GET['action'])?$_GET['action']:""; <<<
         Explicación: Si "$_GET['action']" trae algo (da true) recibo del Get lo que viene a través de la variable "action" y si es null  (da false) se carga "", de esta forma se evita el "Notice undefined index...", es la solución que elegí.
        */ 

}
?>


