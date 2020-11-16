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
        
        if(isset($_GET['action'])){#si $_GET['action'] tiene contenido
           $enlacesController = $_GET['action'];#cargo el contenido     
        }else{#si $_GET['action'] no tiene contenido 
           $enlacesController = "index"; #cargo "index"
        }

        $respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);
        include $respuesta;#incluyo el archivo al que se accede con la ruta que quedó formada en "$repuesta".
    }

}
?>


