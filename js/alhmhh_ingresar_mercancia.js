$('#save-button').on('click', function () {
  doSave()
})
function doSave()
{
if($("#nombreFamilia").val()=="")
{
	return alert("Ingrese el nombre de la familia");
}
else
{
$.ajax({
  method:"post",
  url: "http://localhost/startmvc/?controlador=Almacenista&accion=guardarFamilia",
  data:{
  	nombreFamilia:$("#nombreFamilia").val()
  },
  beforeSend: function( xhr ) {
    //xhr.overrideMimeType( "text/plain; charset=x-user-defined" );
  }
})
  .done(function( data ) {
  	var jsonData  =jQuery.parseJSON(data)
  	
  	if(jsonData.data)
  	if(jsonData)
  	{
  		if(jsonData.error==0)
  		{
  			
  		
  			var datosFamilia = 		jsonData.data;
  			$("#familia").html("<option value='0'>-- Seleccionar --</option>");
  			
  			for(i=0;i<datosFamilia.length;i++)
  			{
  				$("#familia").append("<option value="+datosFamilia[i].Cod_Familia+">"+datosFamilia[i].NombreFamilia+"</option>");
  			}
  			  	
  	
  		
  		alert(jsonData.msg)
  		$('#myModal').modal('hide')		  			
  		}
  		else
  		alert(jsonData.msg)
  	}  	
  	
  });
  }
  }