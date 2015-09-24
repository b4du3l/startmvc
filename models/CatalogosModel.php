<?php
class CatalogosModel extends ModelBase
{
	function getProveedores($idTienda)
	{
		$consulta=$this->db->prepare("SELECT IdProveedor as Id,NombreProveedor as Valor FROM `proveedores` where IdTienda=? order by NombreProveedor");
		$consulta->execute(array($idTienda));
		return $consulta->fetchAll();
	}
	function getCajeros($idTienda)
	{
		$consulta=$this->db->prepare("SELECT IdUsuario as Id, NombreUsuario as Valor FROM `usuarios` where IdTienda=? order by NombreUsuario");
		$consulta->execute(array($idTienda));
		return $consulta->fetchAll();		
	}
	function getFamilias($idEmpresa)
	{
		$consulta=$this->db->prepare("SELECT * FROM `familia` where Cod_Empresa=? order by NombreFamilia");
		$consulta->execute(array($idEmpresa));
		return $consulta->fetchAll();
	}
	function getMarcas($idEmpresa)
	{
		$consulta=$this->db->prepare("SELECT * FROM `marca` where Cod_Empresa=? order by NombreMarca");
		$consulta->execute(array($idEmpresa));
		return $consulta->fetchAll();
	}
	function getProductos($idEmpresa)
	{
		$consulta=$this->db->prepare("select * from productoempresa where Cod_Empresa=?");
		$consulta->execute(array($idEmpresa));
		return $consulta->fetchAll();
	}	
	function getTallas($idEmpresa)
	{
		$consulta=$this->db->prepare("select * from tallas where Cod_Empresa=? ORDER BY NombreTalla");
		$consulta->execute(array($idEmpresa));
		return $consulta->fetchAll();
	}	
}
?>