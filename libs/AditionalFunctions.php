<?php
function getMenu()
{
	return "<div id='cssmenu'>
<ul>
   <li class='active '><a href='index.php'><span>Inicio</span></a></li>
   <li class='has-sub '><a href='#'><span>Reporte  de Compras</span></a>
      <ul>
         <li><a href='?controlador=Compras&accion=byPeriodo'><span>Por Periodo</span></a></li>
      </ul>
   </li>
   <li class='has-sub '><a href='#'><span>Reporte de Ventas</span></a>
      <ul>
         <li><a href='?modulo=rVentas&reporte=cortes'><span>Por Cortes</span></a></li>
         <li><a href='?modulo=rVentas&reporte=productos'><span>Por Producto</span></a></li>
         <li><a href='?modulo=rVentas&reporte=horas'><span>Por Hora</span></a></li>
         <li><a href='?modulo=rVentas&reporte=cajeros'><span>Por Estatus Ticket</span></a></li>
      </ul>
   </li>
   		
   <li><a href='?modulo=usuarios&accion=lista'><span>Usuarios</span></a></li>
   <li><a href='?modulo=generador'><span>Generador de Claves</span></a></li>
   <li class='has-sub '><a href='#'><span>Clientes</span></a>
      <ul>
         <li><a href='?modulo=clientes'><span>Lista de Clientes</span></a></li>
         <li><a href='?modulo=agregaclientes'><span>Agregar Cliente</span></a></li>
      </ul>
   </li>
      <li><a href='?controlador=Login&accion=logIn'><span>Salir</span></a></li>
</ul>
</div>";
 
}
function selectorTienda()
{
	$tiendas = $_SESSION['tiendas'];	
	if($tiendas)
	{
		$options[]="<option>TODAS</option>";
	foreach ($tiendas as $tienda) 
	{
		$options[] = "<option value={$tienda['idTienda']}>{$tienda['nombre']}</option>";	
	}
		$tiendas = implode('',$options);
	}
	return "<select name='IdTienda' id='IdTienda'>{$tiendas}</select>";
}
function selectorFecha($nombre)
{
	$date = date('d-m-Y');
	?>
	<input id="<?=$nombre?>" type="text" value="<?=$date?>" readonly="" size="10" name="<?=$nombre?>">
	<img class="calendario" onclick="calendario('<?=$nombre?>','dd-mm-y')" src="imagenes/calendar.png">
	<?php
}
function initCalendar()
{
	?>
	<link rel='stylesheet' type='text/css' media='all' href='js/calendar-blue.css' title='win2k-1'/>
	<script type='text/javascript' src='js/calendar.js'></script>
	<script type='text/javascript' src='js/calendar-es.js'></script>
	<script type='text/javascript' src='js/funcionescalendario.js'></script>	
	<?php
}
function selector($nombre,$datos)
{
	?>
	<select name="<?=$nombre?>" id="<?=$nombre?>">
	<option></option>
	<?php
	foreach ($datos as $dato) {
		?>
		<option value="<?=$dato[Id]?>"><?=$dato[Valor]?></option>
		<?php
	}
	?>
	</select>
	<?php
}
function addHiddenVarsFromGET()
{
	?>
    <input type="hidden" name="controlador" value="<?=$_GET[controlador]?>">
   <input type="hidden" name="accion" value="<?=$_GET[accion]?>">	
<?php	
}



function head()
{
	?>
<!DOCTYPE html>
<html lang="es">

<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="shortcut icon" href="img/logo10.png" type="image/png" />
     
    <title> STAR E.R.P</title> 
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="styles/styles.css" />

</head>

<body class="fondo-azul">
<?php	
}
function headFocus()
{
	?>
	<!DOCTYPE html>
<html lang="en">

<head>
     <meta http-equiv="Content-Type" content="text/html; charset=gb18030">  <!--alerta de un posible conflicto entre los meta charsets -->
     <meta charset="UTF-8">
     <title> sign in | STAR E.R.P</title> 
     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     <link rel="stylesheet" href="css/bootstrap.min.css" />
     <link rel="stylesheet" href="styles/styles.css" />
</head>

<body onload="bill.codPr.focus()" class="fondo-azul">
<?php	
}
function footer()
{
	?>
	<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>
<?php	
}
?>