<?php 

class EnlacesPaginas{

	public function enlacesPaginasModel($enlacesModel){
        $modulo="";
        if($enlacesModel=="inicio"||$enlacesModel=="nosotros"||$enlacesModel=="servicios"||$enlacesModel=="contactenos"){#puede llegar "" (vacio)
            
            $modulo = "views/modules/".$enlacesModel.".php";
        
        }	

	  return $modulo;
    }   

}
?>