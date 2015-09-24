<?php
class ComprasController extends ControllerBase
{
    //Accion index
    public function index()
    {
        $this->view->show("index.php", $vars);
    }
    public  function byPeriodo()
    {
    	$this->view->show("comprasByPeriodo.php", $vars);
    }
    public function consultar()
    {
    	print_r($_POST);
    }
    public function testView()
    {
        $vars['nombre'] = "Federico";
        $vars['lugar'] = $this->getLugar();
        $this->view->show("test.php", $vars);
    }
    
    private function getLugar()
    {
        return "Buenos Aires, Argentina";
    }
}
?>