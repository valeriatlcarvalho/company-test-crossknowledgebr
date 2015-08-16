<?php
	
	include_once __DIR__."/../controller/Cross_Controller.php";

	$post = $_POST;
	unset($_POST);

	$exclui = Cross_Controller::exclui('pessoas', $post['id']);
	print_r( json_encode($exclui) );

