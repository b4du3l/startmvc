<?php
class UsuariosModel extends ModelBase
{
	public function getDatosUsuario($usuario,$password)
	{
		//realizamos la consulta de todos los items
		$consulta = $this->db->prepare('SELECT * FROM `usuarios` where nomb_usuario=? and contrasena=?');
		$consulta->execute(array($usuario,$password));		
		return $consulta->fetchAll();
	}	
}
?>