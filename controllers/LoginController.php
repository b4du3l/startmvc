<?php
class LoginController extends ControllerBase
{
    //Accion index
    public function index()
    {
        echo "Controlador Index";
    }
    public function signin22()    
    {
		$this->view->show("redirect.php", $vars);    	
    	//$this->view->show("management/aazzhh_4_interfaces_temp.php", $vars);    	
    }
    
    public function testView()
    {
        $vars['nombre'] = "Federico";
        $vars['lugar'] = $this->getLugar();
        $this->view->show("test.php", $vars);
    }
    
    public function signin()
    {
    	$usuario = $_POST['usuario'];
    	$password = $_POST['contrasena'];
    	if(strlen($usuario)>0 && strlen($password))
    	{
    		require 'models/UsuariosModel.php';
    		$modeloUsuario = new UsuariosModel();
    		$datos = $modeloUsuario->getDatosUsuario($usuario,$password);
    		if(count($datos)==1)
    		{    			
    			/*meter en sesion al usuario*/
    			$_SESSION['sesion_usuario']=md5($usuario.'loged');
    			$_SESSION['usuario']=$usuario;
    			    			
    			$this->view->show("redirect.php", $vars);
    			return;    			
    		}
    		else 
    		{
    			$vars['mensaje']='Datos de Acceso Incorrectos';
    		}
    	}
    	else 
    	{
    		if(count($_POST)>0)
    		$vars['mensaje']='Introduzca datos de acceso';
    	}
    	
    	$this->view->show("Login/index.php", $vars,false);
    	
    }
    public function logOut()
    {
    	session_destroy();
    	$this->view->show("redirect.php", $vars,false);
    }
}
?>
