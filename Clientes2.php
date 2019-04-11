<?php

include("Conexion.php");
$miconexion = new Conexion();
$cn = $miconexion->conectar();

$consulta 	= "SELECT * FROM Articulos";


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
	<li class="divider"></li>
	<li><a href="#">TIENDA 1.0</a></li>
    <li class="divider"></li>

    <li class="divider"></li>
	
</ul>
<div class="separator"></div>
<div class="separator"></div>
<div class="separator"></div>
<div class="separator"></div>
<div class="separator"></div>

<h3 class="glyphicons show_thumbnails"><i></i>Administración de Productos</h3>
<p>&nbsp;</p>
<div class="innerLR">
	<div class="widget widget-gray widget-body-white">
		<div class="widget-body" style="padding: 10px 0;">
			<table class="dynamicTable table table-striped table-bordered table-primary table-condensed">
				<thead>
                <tr>
                <th>CODIGO</th>
                <th>DESCRIPCION</th>
                <th>PRECIO</th>
                 <th>CATEGORIA</th>
                   <th>FECHA DE NACIMIENTO</th>
                    <th>RFC</th>
                     <th>CURP</th>
                      <th>OPCIONES</th>
                </tr>
                </thead>
                <body>
                <?php
				do
				{
					
				?>
                <tr class = "grade X">
                <td><?php echo $filas['codigo'];?></td>
                <td><?php echo $filas['Descripcion'];?></td>
                <td><?php echo $filas['precio'];?></td>
                <td><?php echo $filas['categoria'];?></td>
                <td><?php echo $filas['fechaNac'];?></td>
                <td><?php echo $filas['rfc'];?></td>
                <td><?php echo $filas['curp'];?></td>
                <td><a href="sqlClientes.php?opc=2&idCliente=<?php echo $filas ['codigo'];?>">Eliminar</a> <a href="altaCliente.php?opc=3&idCliente=<?php echo $filas ['codigo'];?>">Actualizar</a></td>
                </tr>
                <?php
				} while($filas=mysqli_fetch_array($rs));
				?>
</body>
                
                
			</table>
            
            
		</div> <!-- widget-body -->
		<br/>		
				
		</div> <!-- widget-gray -->
        </div> <!-- innerLR -->
        </div><!-- End Content -->
		
		</div><!-- End Wrapper -->
		</div><!-- container-fluid -->
   
		<?php //include("../includes/pieDePagCatalogos.php"); ?>
	<!-- DataTables -->
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/DT_bootstrap.js"></script>

	<!-- Bootstrap Script -->
	<script src="js/bootstrap.min.js"></script>
	
	<!-- Custom Onload Script -->
	<script src="js/load.js"></script>
	
	<!-- Layout Options -->
	<script src="js/layout.js"></script>
	 <?php
     mysqli_close($cn); 
 ?> 
</body>
</html>