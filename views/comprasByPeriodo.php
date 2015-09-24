<?php
initCalendar();
?>
</head>
<body>
<div class="main">
	<div class="header">		
		<?=$menu?>		
	</div>
	<div id="selectores"></div>
	<div id="content">
	<form id="formulario" action="?controlador=compras&accion=consultar&metodo=ajax" method="POST">
	<table>
		<tbody>
			<tr>
				<td><label>Tienda</label><?=selectorTienda()?></td>
				<td><label>Fecha Inicial</label><?=selectorFecha('fechainicial')?></td>
				<td><label>Fecha Final</label><?=selectorFecha('fechafinal')?></td>
			</tr>
			<tr>
			<td colspan="3">
				<label>Proveedor</label>
				<span id="proveedores"></span>
				
			</td>
			</tr>
			<tr>
			<td>
				<label>Cajeros</label><span id="cajeros"></span>
				
			</td>
			<td>
			<button type="button" onclick="consultarDatos(data)">Consultar</button>
			</td>
			</tr>
		</tbody>
	</table>
	</form>
	</div>
	<div id="data">
	</div>
	<div id="footer"></div>
</div>
</body>
</html>
<script>
	document.getElementById("IdTienda").addEvent('change',function()
	{		
		new Request(
		{
			method:'post',
			url:'index.php?controlador=Ajax&accion=proveedores',
			data:
			{
				IdTienda:document.getElementById("IdTienda").value			
			},
			onRequest:function()
			{				
				document.getElementById("proveedores").innerHTML='<b>Consultando datos</b> <img src="imagenes/ajax-loader.gif">'
			},
			onSuccess:function(html)
			{
				document.getElementById('proveedores').innerHTML=html				
			}
		}).send()
		new Request(
		{
			method:'post',
			url:'index.php?controlador=Ajax&accion=cajeros',
			data:
			{
				IdTienda:document.getElementById("IdTienda").value			
			},
						onRequest:function()
			{				
				document.getElementById("cajeros").innerHTML='<b>Consultando datos</b> <img src="imagenes/ajax-loader.gif">'
			},
			onSuccess:function(html)
			{
				document.getElementById('cajeros').innerHTML=html				
			}			
		}).send()
	})
	function Consultar()
	{
		new Request(
		{
			method:'post',
			url:'index.php?controlador=Ajax&accion=consultacompras',
			data:
			{
				IdTienda:document.getElementById("IdTienda").value,
				IdProveedor:document.getElementById("IdProveedor").value,
				IdCajero:document.getElementById("IdCajero").value,
				fechainicial:document.getElementById("fechainicial").value,
				fechafinal:document.getElementById("fechafinal").value
				
			},
			onRequest:function()
			{				
				document.getElementById("Resultados").innerHTML='<b>Consultando datos</b> <img src="imagenes/ajax-loader.gif">'
			},
			onSuccess:function(html)
			{
				document.getElementById("Resultados").innerHTML=html
			}
		}).send()
	}
</script>
<?php
//print_r($_SESSION);
?>