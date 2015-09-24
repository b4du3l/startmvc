<?php
class ProveedoresModel extends ModelBase
{
	function getProveedores($idTienda)
	{
		$consulta=$this->db->prepare("SELECT IdProveedor as Id,NombreProveedor as Valor FROM `proveedores` where IdTienda=? order by NombreProveedor");
		$consulta->execute(array($idTienda));
		return $consulta->fetchAll();
	}
}