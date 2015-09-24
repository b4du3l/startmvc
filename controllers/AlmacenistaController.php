<?php
class AlmacenistaController extends ControllerBase
{
	function ingresarmercancia()
	{		
		if(array_key_exists("datosMercancia",$_SESSION))
		{
			$datosMercancia=$_SESSION[datosMercancia];
		}
		else $datosMercancia=array();
		
		require_once "models/CatalogosModel.php";
		$catalogo = new CatalogosModel();
		$step = (int)$_GET[step];
		switch ($step) {
			case 0:
				//se puso la empresa numero 1 como ejemplo
				$vars[familias]=$catalogo->getFamilias(1);
				
				$this->view->show("Interfaces/almacenista/alhmhh_ingresar_mercancia.php", $vars);		
				break;
			case 2:
				$vars[marcas]=$catalogo->getMarcas(1);
				$datosMercancia[familia]=(int)$_POST[familia];
				$this->view->show("Interfaces/almacenista/alhmhh_ingresar_mercancia_2.php", $vars);
				break;		
			case 3:
				$datosMercancia[marca]=(int)$_POST[marca];
				$this->view->show("Interfaces/almacenista/alhmhh_ingresar_mercancia_3.php", $vars);
				break;		
			case 4:
				$datosMercancia[lote]=(int)$_POST[lote];
				$this->view->show("Interfaces/almacenista/alhmhh_ingresar_mercancia_4.php", $vars);
				break;		
			case 5:
				$datosMercancia[uso]=(int)$_POST[uso];
				$vars[items]=$catalogo->getProductos(1);
				$this->view->show("Interfaces/almacenista/alhmhh_ingresar_mercancia_5.php", $vars);
				break;		
			case 6:
				$datosMercancia[nombreitem]=(int)$_POST[nombreitem];
				$vars[sizes]=$catalogo->getTallas(1);
				$this->view->show("Interfaces/almacenista/alhmhh_ingresar_mercancia_6.php", $vars);
				break;		
			case 7:
				$datosMercancia[size]=$_POST[size];
				
				$this->view->show("Interfaces/almacenista/alhmhh_ingresar_mercancia_7.php", $vars);
				break;		
			case 8:
				$datosMercancia[precio]=(float)$_POST[precio];
				
				$this->view->show("Interfaces/almacenista/alhmhh_ingresar_mercancia_8.php", $vars);
				break;		
			case 9:
				$datosMercancia[iva]=(int)$_POST[iva];				
				$this->view->show("Interfaces/almacenista/alhmhh_ingresar_mercancia_9.php", $vars);
				break;		
			default:				
				break;
		}
		$_SESSION[datosMercancia]=$datosMercancia;
		
	}
	function ingresar_item()
		{			
			$datosMercancia = $_SESSION[datosMercancia];
			$datosMercancia[vencimiento]=$_POST[vencimiento];			
			$this->view->show("Interfaces/almacenista/alkhhh_ingresar_mercancia_cod_item.php", $vars);			
		}	
	function newitem()
	{
			$datosMercancia = $_SESSION[datosMercancia];
			$datosMercancia[vencimiento]="2014-01-01";
print_r($datosMercancia);			
			
			
			require_once "models/AlmacenistaModel.php";
			$almacenista =new AlmacenistaModel();
			$almacenista->addItem($datosMercancia[familia],
			$datosMercancia[marca],
			$datosMercancia[lote],
			$datosMercancia[uso],1121,$datosMercancia[nombreitem],$datosMercancia[size],$datosMercancia[precio],$datosMercancia[iva],$datosMercancia[vencimiento],1);
			
			
			$vars[listaItems] =$almacenista->getListaItemsTemp(1);			
			$this->view->show("Interfaces/almacenista/alkhhh_ingresar_mercancia_cod_item.php", $vars);			
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

 