<?php
class InterfazController extends ControllerBase
{
	function gerente()
	{		
		$this->view->show("Interfaces/gerente/gehhhh_gerente_main.php", $vars);
	}
	function cajero()
	{
		
	}
	function almacenista()
	{
		$this->view->show("Interfaces/almacenista/alhhhh_almacenista_main.php", $vars);		
	}
	function vendedor()
	{
		
	}
}
?>