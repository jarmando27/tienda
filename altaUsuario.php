

          
<?php

include("Conexion.php");
$miconexion = new Conexion();
$cn = $miconexion->conectar();

$opc = 0;
/*
$consulta 	= "SELECT * FROM login";
$rs 		= mysqli_query($cn,$consulta) or die(mysqli_error());
$filas 		= mysqli_fetch_assoc($rs);
$totalFilas = mysqli_num_rows($rs);


*/


if( isset( $_REQUEST['opc'] ) )
{
$opc = $_REQUEST['opc'];
if($opc==3)
{
$id = $_REQUEST['id'];

echo $id;

$consulta 	= "select * from login where id=$id";
echo $consulta;


$rs	= mysqli_query($cn,$consulta) or die(mysqli_error());
$filas		= mysqli_fetch_assoc($rs);
$totalFilas = mysqli_num_rows($rs);


}
}






?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->
<head>
	<title>Abarrotes "JUAN"</title>
	
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
 <link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
<script type="text/javascript" src="scripts/jquery.min.js"></script>
<script type="text/javascript" src="scripts/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>   
</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<link rel="stylesheet" type="text/css" href="css/styles.css" />
<script language="javascript" type="text/javascript" src="scripts/mootools-1.2.1-core.js"></script>
<script language="javascript" type="text/javascript" src="scripts/mootools-1.2-more.js"></script>
<script language="javascript" type="text/javascript" src="scripts/slideitmoo-1.1.js"></script>
<script language="javascript" type="text/javascript">
	window.addEvents({
		'domready': function(){
			/* thumbnails example , div containers */
			new SlideItMoo({
						overallContainer: 'SlideItMoo_outer',
						elementScrolled: 'SlideItMoo_inner',
						thumbsContainer: 'SlideItMoo_items',		
						itemsVisible: 3,
						elemsSlide: 2,
						duration: 200,
						itemsSelector: '.SlideItMoo_element',
						itemWidth: 280,
						showControls:1});
		},
		
	});
</script>
	<!-- JQuery v1.8.2 -->
	<script src="js/jquery-1.8.2.min.js"></script>
    

	<!-- Theme -->
	<link rel="stylesheet" href="css/style.min.css?1363272440" />
</head>
<body>
       
<header id="header">
	<?php //include("../includes/headerCatalogos.php"); ?>
<nav>
  

    
</header>    
	<!-- Start Content -->
	<div class="container-fluid fixed">
	  <div id="wrapper">
	    <div id="content">
		<ul class="breadcrumb">
	<li><a href="../index.php" class="glyphicons home"><i></i> Inicio</a></li>
	<li class="divider"></li>
	<li><a href="#">Tienda 1.0</a></li>
    <li class="divider"></li>
    <li><a href="admin.php">Menu Administrador</a></li>
</ul>
<div class="separator"></div>
<div class="separator"></div>
<div class="separator"></div>
<div class="separator"></div>
<div class="separator"></div>

<h3 class="glyphicons database_plus"><i></i>Registro de Usuarios </h3>
<div class="innerLR">
<form role="form" name="frm" id="frm" method="post" action="sqlUsuario.php?opc=1">
                    <center>
                        <div style="width:400px" align="left">
                        
                     
                                  
                        	<div class="form-group">
                                <label>ID*</label>
                   <input type="number" name="txtdni" class="form-control" value="<?php if($opc!=0){echo $filas["id"];}?>" required>
                        	</div>
                            
                            <div class="form-group">
                                <label>USUARIO *</label>
                                 <input type="text" name="txtnombres" class="form-control"  value="<?php if($opc!=0){echo $filas["user"];}?>" required>
                        	</div>
                            
                              <div class="form-group">
                                <label>PASSWORD *</label>
                                 <input type="password" name="txtpaterno" class="form-control"  value="<?php if($opc!=0){echo $filas["password"];}?>" required>
                        	</div>
                            
                              <div class="form-group">
                                <label>EMAIL *</label>
<input type="email" name="txtmaterno" class="form-control"  value="<?php if($opc!=0){ echo $filas["email"];}?>" required>
                        	</div>
                            <div class="form-group">
                                <label>PASSWORD DE ADMINISTRADOR </label>
<input type="password" name="txtmaterno1" class="form-control"  value="<?php if($opc!=0){ echo $filas["pasadmin"];}?>" >
                        	</div>
                            <div class="form-group">
                                <label>ROL *</label>
<input type="text" name="txtmaterno2" class="form-control"  value="<?php if($opc!=0){ echo $filas["rol"];}?>" required>
                        	</div>
                            
                            
                        	<div class="form-group">
                            <?php if($opc==0){
								?>
                              <button type="submit" name="btn" class="btn btn-primary btn-lg" required="required">Registrar</button>
                              <?php
							}
							else 
							{?>
                        <input type="hidden" name="opc" value="3">
                              <input type="hidden" name="dni" value="<?php echo $filas["id"];?>">
                              <button type="submit" name="btnActualizar" class="btn btn-primary btn-lg" required="required">Actualizar</button>
                                         
                      <?php
							}
							?>
                               	</div>
                        </div>
                    </center>
                </form> 
        </div> <!-- innerLR -->
        </div><!-- End Content -->
		
		</div><!-- End Wrapper -->
		</div>
	<?php //include("../includes/pieDePagCatalogos.php"); ?>
	 <?php
     mysqli_close($cn); 
 ?> 
</body>
</html>