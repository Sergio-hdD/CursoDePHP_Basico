<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Template</title>
	<style>
		
		header{
			position: relative;
			margin: auto;
			text-align: center;
			padding: 5px;
		}

		nav{
			 position: relative;
			 margin: auto;
			 width: 100%;
			 height: auto;
			 background: black;
		}

		nav ul{
			position: relative;
			margin: auto;
			width: 50%;
			text-align: center;
		}

		nav ul li{
			display: inline-block;
			width: 24%;
			line-height: 50px;
			list-style: none;
		}

		nav ul li a{
			color: white;
			text-decoration: none;
		}

		section{
			position: relative;
			padding: 20px;
		}

	</style>

</head>
<body>
  <header>
	<h1>LOGOTIPO</h1>
  </header>

  <?php 
      include "modules/navegacion.php";
  ?>

  <section>
     <?php
         $mvc = new MVCcontroller();#creo un objeto
         $mvc -> enlacesPaginasController();#uso el método que me va a mostrar lo que elije el user
         echo '<br> <br><p>Esta versión en la resolución de errores, se ajusta a lo que enseñan en el tutorial<p> <p>Cambia, con respecto a la "03.3" en el model.php, en el controller.php y en el navegacion.php<p>';
     ?>
  </section>
</body>
</html>