<?php 

class MVCcontroller{

    #LLAMADA A LA PLANTILLA
    #-----------------------------------------------------    

	public function plantilla(){

		include "views/template.php";#include(): Se utiliza para invocar el archivo que contiene el código html (es decir, incluye el template que está en la carpeta views)
	}

}
?>