function mostrar_factura(idcompra,idtienda)
{
	showModalDialog('index.php?modal=true&modulo=rCompras&idCompra='+idcompra+'&idTienda='+idtienda,'','dialogWidth:700px;')
}
function cerrarModal()
{
	window.close();
}
function obtenerTiendas(contenedor)
{
	new Request({
	method:'post',
	url:'Modulos/Comun/obtenerTiendas.php',
	onSuccess:function(html)
	{
		document.id(contenedor).set('html',html)
	}
	}).send()
}
function obtenerDatosTienda()
{
	//necesitamos obtener las familias y los cajeros
	if(document.id('familia'))
	{
	new Request({
	method:'post',
	url:'Modulos/Comun/obtenerFamilias.php',
	data:
	{
		'IdTienda':document.id('IdTienda').value
	},
	onSuccess:function(html)
	{
		document.id('familia').set('html',html)
		obtenerDatosSubFamilia()
	}
	}).send()	
	}
	if(document.id('cajero'))
	{
	new Request({
	method:'post',
	url:'Modulos/Comun/obtenerCajeros.php',
	data:
	{
		'IdTienda':document.id('IdTienda').value
	},
	onSuccess:function(html)
	{
		document.id('cajero').set('html',html)
	}
	}).send()			
	}
}
function obtenerDatosSubFamilia()
{
	if(document.id('subfamilia'))
	{
		new Request({
		method:'post',
		url:'Modulos/Comun/obtenerSubFamilias.php',
		data:
		{
			'IdTienda':document.id('IdTienda').value,
			'IdFamilia':document.id('IdFamilia').value
		},
		onSuccess:function(html)
		{
			document.id('subfamilia').set('html',html)
		}
		}).send()			
		
	}
	
}
function consultaVentasPorProducto()
{
	new Request(
	{
		method:'post',
		url:'Modulos/Comun/obtenerReporteVentasProducto.php',
		data:document.id('reporteventasproducto'),
		onRequest:function()
		{
			document.id('resultado').set('html','Consultando datos espere por favor...<img src="imagenes/ajax-loader.gif">')
		},
		onSuccess:function(html)
		{
			document.id('resultado').set('html',html)
		}
	}).send()
}
function agregarUsuario()
{
	$$('.listado').setStyle('display','none')
	$('registrausuario').setStyle('display','')
}
function regresarListadoUsuarios()
{
	$$('.listado').setStyle('display','')
	$('registrausuario').setStyle('display','none')	
}
function registrarUsuario()
{
	if($('usuario').value=="")
	 return alert("Introduzca un nombre de usuario");
	if($('pass').value=="")
	 return alert("Introduzca el password para el usuario")
	 var totalSeleccionados = 0;
	$$('.selecciontiendas').each(function(i)
	{
		if(i.checked==true)
		{
			totalSeleccionados++;
		}
	}
	)
	if(totalSeleccionados==0)
	return alert("Seleccione al menos una tienda");
	new Request(
	{
		method:'post',
		url:'Modulos/Usuarios/guardarUsuario.php',
		data:$('datosUsuario'),
		onSuccess:function(html)
		{
			if(html.contains('ok'))
				location.reload()
		}
	}).send()
}
function eliminarUsuario(id)
{
	new Request(
	{
		method:'post',
		url:'Modulos/Usuarios/eliminarUsuario.php',
		data:
		{
			'idUsuario':id
		},
		onSuccess:function(html)
		{
			if(html.contains('ok'))
				location.reload()
		}
	}).send()
}
function guardarCliente()
{
	return false;
}
function mostrarDetalleTicket(idTicket,idTienda)
{
	showModalDialog('index.php?modal=true&modulo=rVentas&accion=detalleTicket&idTicket='+idTicket+'&idTienda='+idTienda,'','dialogWidth:700px;')
}
function goPage(page)
{
	$('solicitar').value=page
	$('forma').submit();
}
/*metodos para el nuevo esquema*/
function consultarDatos(contenedor)
{
	var formulario = document.forms[0];
	var sUrl = formulario.action
	new Request(
	{
		method:'post',
		url:sUrl,
		data:formulario,
		onSuccess:function(html)
		{
			if(!$(contenedor))
				alert('el contenedor no se definio')
			else
			$(contenedor).set('html',html)
		}
	}).send()
}