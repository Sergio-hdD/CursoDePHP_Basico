<?php  
 
class MvcController{

    #LLAMADA A LA PLANTILLA
    #-----------------------------------------------------    

    public function pagina(){

        include "views/template.php";#include(): Se utiliza para invocar el archivo que contiene el código html (es decir, incluye el template que está en la carpeta views)
    }

    #ENLACES (INTERACIÓN DEL USUARIO) 
    #-----------------------------------------------------    
    public function enlacesPaginasController(){
        
        if(isset($_GET['action'])){#si $_GET['action'] tiene contenido
          
           $enlaces = $_GET['action'];#cargo el contenido     
        
        }
        else{#si $_GET['action'] no tiene contenido 
        
           $enlaces = "index"; #cargo "index"
        
        }

        $respuesta = Paginas::enlacesPaginasModel($enlaces);
        
        include $respuesta;#incluyo el archivo al que se accede con la ruta que quedó formada en "$repuesta".
    }

}
?>


