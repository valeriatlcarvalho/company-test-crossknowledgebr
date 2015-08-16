<?php
	
	include_once __DIR__."/../controller/Cross_Controller.php";

	$post = $_POST;
	unset($_POST);

	$edita = Cross_Controller::edita('pessoas', $post);
	print_r( json_encode($edita) );