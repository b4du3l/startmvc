<?php
class TiendasModel extends ModelBase
{
	public function getTiendasByUsuario()
	{
		$idUsuarioWeb = $_SESSION['id_usuario_web'];
		$tipoUsuario = $_SESSION['tipo_usuario'];
		//realizamos la consulta de todos los items
		if($tipoUsuario!=-1)
		{
		$consulta = $this->db->prepare("SELECT distinct IdTienda,Texto FROM `permisotienda` join tiendas using(IdTienda) join configuraciones USING(IdTienda)
		where Descripcion ='NombreTienda' and IdUsuarioWeb = ? order by Texto");		
		$consulta->execute(array($idUsuarioWeb));
		}
		else 
		{
		$consulta = $this->db->prepare("SELECT distinct IdTienda,Texto FROM `permisotienda` join tiendas using(IdTienda) join configuraciones USING(IdTienda)
		where Descripcion ='NombreTienda' order by Texto");			
		$consulta->execute();
		}
		//devolvemos la coleccion para que la vista la presente.
		return $consulta->fetchAll();
	}
}
?>