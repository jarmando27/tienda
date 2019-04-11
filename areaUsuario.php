<?php

include("Conexion.php");
$miconexion = new Conexion();
$cn = $miconexion->conectar();

$consulta 	= "SELECT * FROM login";


$rs 		= mysqli_query($cn,$consulta) or die(mysqli_error());
$filas 		= mysqli_fetch_assoc($rs);
$totalFilas = mysqli_num_rows($rs);

?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->
<head>
	<title>Abarrotes "JUAN"</title>
	<!-- Meta -->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" />

	<!-- DataTables -->
	<link rel="stylesheet" media="screen" href="css/DT_bootstrap.css" />
    
    <!-- Glyphicons -->
	<link rel="stylesheet" href="css/glyphicons.css" />

	<!-- JQuery v1.8.2 -->
	<script src="js/jquery-1.8.2.min.js"></script>

	<!-- Theme -->
	<link rel="stylesheet" href="css/style.min.css?1363272440" />
	
</head>
<body>
<header id="header">
	<?php //include("../includes/headerCatalogos.php"); ?>
</header>    
	<!-- Start Content -->
	<div class="container-fluid fixed">
	  <div id="wrapper">
	    <div id="content">
		<ul class="breadcrumb">
	<li><a href="index.php" class="glyphicons home"><i></i> Inicio</a></li>
	<li><a href="#">Tienda 1.0</a></li>
    <li class="divider"></li>
<li><a href="admin.php">Menu Administrador</a></li>
<div class="separator"></div>
<div class="separator"></div>
<div class="separator"></div>
<div class="separator"></div>
<div class="separator"></div>

<h3 class="glyphicons show_thumbnails"><i></i>Administración de Usuarios</h3>
<p>&nbsp;</p>
<div class="innerLR">
	<div class="widget widget-gray widget-body-white">
		<div class="widget-body" style="padding: 10px 0;">
		<h2> Administración de usuarios registrados</h2>	
		<div class="well well-small">
		<hr class="soft"/>
         <li><a href="altaUsuario.php"> Agregar Usuarios </a></li>	
		<h4>Tabla de Usuarios</h4>
		<div class="row-fluid">
		



			<?php

				require("connect_db.php");
				$sql=("SELECT * FROM login");
	
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				$query=mysqli_query($mysqli,$sql);

				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td>Id</td>";
						echo "<td>Usaurio</td>";
						echo "<td>Password</td>";
						echo "<td>Correo</td>";
						echo "<td>Password del administrador</td>";
						echo "<td>Editar</td>";
						echo "<td>Borrar</td>";
					echo "</tr>";

			    
			?>
			  
			<?php 
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[1]</td>";
				    	echo "<td>$arreglo[2]</td>";
				    	echo "<td>$arreglo[3]</td>";
				    	echo "<td>$arreglo[4]</td>";

				    	echo "<td><a href='actualizar.php?id=$arreglo[0]'><img src='images/actualizar.gif' class='img-rounded'></td>";
						echo "<td><a href='admin.php?id=$arreglo[0]&idborrar=2'><img src='images/eliminar.png' class='img-rounded'/></a></td>";
						

						
					echo "</tr>";
				}

				echo "</table>";

					extract($_GET);
					if(@$idborrar==2){
		
						$sqlborrar="DELETE FROM login WHERE id=$id";
						$resborrar=mysqli_query($mysqli,$sqlborrar);
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						//header('Location: proyectos.php');
						echo "<script>location.href='admin.php'</script>";
					}

			?>
			
				  
			  			  
			  
		
		
		<div class="span8">
		
		</div>	
		</div>	
		<br/>
		


		<!--EMPIEZA DESLIZABLE-->
		
		 <!--TERMINA DESLIZABLE-->



		
		
		</div>

		


		

<!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
</div>

	</div>
</div>
<!-- Footer
      ================================================== -->
<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>
<p>&copy; Copyright Armando Montalvo <br/><br/></p>
</footer>
</div><!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</body>
</html>