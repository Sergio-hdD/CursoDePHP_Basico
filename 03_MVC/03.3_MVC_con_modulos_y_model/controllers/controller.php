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

        $enlacesController = isset($_GET['action']) ? $_GET['action'] : ""; #Explicado en el 03.2_MVC_con_modulos.     

        $respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);#accedo a la clase "EnlacesPaginas" y heredo el método "enlacesPaginasModel", le paso "$enlacesController" y capturo el retorno" 
        #Si quiero que esto pueda ser leído por el controlador, debe ser invocado desde el mismo controlador o desde el index (es como lo voy a hacer, para pueda ser usado por otros controladores [si hubiese más])
        if(!empty($respuesta)){
           include $respuesta;#incluyo el archivo al que se accede con la ruta que quedó formada en "$repuesta".
        }
    }

}
?>


