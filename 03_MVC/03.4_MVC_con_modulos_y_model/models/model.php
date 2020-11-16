<?php 

class EnlacesPaginas{

	public function enlacesPaginasModel($enlacesModel){
       $modulo="";
       if($enlacesModel=="nosotros"||$enlacesModel=="servicios"||$enlacesModel=="contactenos"){
         $modulo = "views/modules/".$enlacesModel.".php";
       }else if ($enlacesModel=="index") {
         $modulo = "views/modules/inicio.php";
       }else{
         $modulo = "views/modules/inicio.php";#se puede dirigir, popr ejemplo, a una página de error
       }
       #Este último else es por si legue cualquier otra cosa que el usuario pueda poner directamente en la url, por ejemplo si en lugar de "...?action=servicios" reemplaza por "...?action=cualqierCosa", llegaría cualquierCosa y daría errores. 
       #Lo hecho con el if y else if es lo que se conoce como lista blanca, es deteriminar que rutas son válidas.
	  return $modulo;
    }   

}
?>