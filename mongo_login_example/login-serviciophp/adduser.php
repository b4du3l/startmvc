<?php

$usuario = $_POST['usuario'];
$passw = $_POST['password'];

require_once 'funciones_bd.php';
$db = new funciones_BD();

	if($db->isuserexist($usuario,$passw)){

	echo(" Este usuario ya existe en la base de datos!");
	}else{

		if($db->adduser($usuario,$passw))
		{	echo(" Registro guardado correctamentet");			
			 }else{
			echo("Se tosto, a ocurrido un error, revise....:v.");
			}		

	}



?>



