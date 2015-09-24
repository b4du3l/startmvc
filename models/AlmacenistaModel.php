<?php 
class AlmacenistaModel extends ModelBase
{
	function addItem($familia,$marca,$uso,$lote,$codigo,$descripcion,$size,$precio,$iva,$vencimiento,$empresa)
	{
		echo "$familia,$marca,$uso,$lote,$codigo,$descripcion,$size,$precio,$iva,$vencimiento,$empresa";
		$consulta = $this->db->prepare("insert into ItemTemp set Cod_Familia=?,Cod_Marca=?,Cod_Uso=?,Lote=?,Codigo=?,Descripcion=?,Cod_Talla=?,Precio=?,Cod_Iva=?,FechaVencimiento=?,Cod_Empresa=?");
		$consulta->execute(array($familia,$marca,$uso,$lote,$codigo,$descripcion,$size,$precio,$iva,$vencimiento,$empresa));
		print_r($consulta->errorInfo());
	}
	function getListaItemsTemp($empresa)
	{
		$consulta = $this->db->prepare("SELECT * FROM `ItemTemp` join familia USING(Cod_Familia,Cod_Empresa) join marca USING(Cod_Marca,Cod_Empresa)
		join tallas USING(Cod_Talla,Cod_Empresa) join iva USING(Cod_Iva,Cod_Empresa) where Cod_Empresa=?");
		$consulta->execute(array($empresa));
		return $consulta->fetchAll();
	}
	function guardarFamilia($nombreFamilia,$idEmpresa)	
	{			
		$consulta=$this->db->prepare("insert into familia set NombreFamilia=?,Cod_Empresa=?");
		$consulta->execute(array($nombreFamilia,$idEmpresa));
		if ($consulta->rowCount()>0)
		{
			return true;
		}
		else 
		return false;
	}
	
}
?>