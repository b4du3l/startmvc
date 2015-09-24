<?php
class AjaxController extends ControllerBase
{
    //Accion index
    public function proveedores()
    {
    	require 'models/CatalogosModel.php';
    	$catalogos = new CatalogosModel();    	
        selector('proveedor',$catalogos->getProveedores((int)$_POST[IdTienda]));
    }
    public function cajeros()
    {
    	require 'models/CatalogosModel.php';
    	$catalogos = new CatalogosModel();    	
    	selector('cajero',$catalogos->getCajeros((int)$_POST[IdTienda]));
    }
    
    
}
?>