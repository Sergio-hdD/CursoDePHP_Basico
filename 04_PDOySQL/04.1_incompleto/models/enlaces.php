<?php 

class Paginas{

	public function enlacesPaginasModel($enlaces){
       $modulo="";

       if($enlaces == "ingresar" || $enlaces == "usuarios" || $enlaces == "editar" || $enlaces=="salir"){

         $modulo = "views/modules/".$enlaces.".php";

       }
       else if ($enlaces=="index") {
       
         $modulo = "views/modules/registro.php";
       
       }
       else{
        
         $modulo = "views/modules/registro.php";#se puede dirigir, popr ejemplo, a una página de error
       
       }
       #Este último else es por si legue cualquier otra cosa que el usuario pueda poner directamente en la url, por ejemplo si en lugar de "...?action=servicios" reemplaza por "...?action=cualqierCosa", llegaría cualquierCosa y daría errores. 
       #Lo hecho con el if y else if es lo que se conoce como lista blanca, es deteriminar que rutas son válidas.
	  return $modulo;
    }   

}
?>