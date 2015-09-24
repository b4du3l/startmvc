<?php 
class ItemsClass
{
	private $items;
	function addItem($familia,$marca,$uso,$lote,$codigo,$descripcion,$size,$precio,$iva,$vencimiento)
	{
		$this->items[]=new ItemClass($familia,$marca,$uso,$lote,$codigo,$descripcion,$size,$precio,$iva,$vencimiento);
	}
	function getItems()
	{
		return $this->items;
	}
}
class ItemClass
{
	private $familia;
	private $marca;
	private $uso;
	private $lote;
	private $codigo;
	private $descripcion;
	private $size;
	private $precio;
	private $iva;
	private $vencimiento;
	function __construct($familia,$marca,$uso,$lote,$codigo,$descripcion,$size,$iva,$vencimiento)
	{
		$this->familia=$familia;
		$this->familia=$marca;
		$this->familia=$uso;
		$this->familia=$lote;
		$this->familia=$codigo;
		$this->familia=$descripcion;
		$this->familia=$size;
		$this->familia=$iva;
		$this->familia=$vencimiento;	
	}
	function getFamilia()
	{
		return $this->familia;
	}
	function getMarca()
	{
		return $this->familia;
	}
	function getUso()
	{
		return $this->uso;
	}
	function getLote()
	{
		return $this->lote;
	}
	function getCodigo()
	{
		return $this->codigo;
	}
	function getDescripcion()
	{
		return $this->descripcion;
	}
	function getSize()
	{
		return $this->size;
	}
	function getIva()
	{
		return $this->iva;
	}
	function getVencimiento()
	{
		return $this->vencimiento;
	}							
}
?>