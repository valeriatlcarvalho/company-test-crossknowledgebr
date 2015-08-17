<?php

	include_once __DIR__."/../controller/Cross_Controller.php";

    $post = $_POST;
    unset($_POST);
	if(!empty($post['nome']) || !empty($post['sobrenome']) || !empty($post['logradouro']) || !empty($post['bairro']) || !empty($post['cidade']) || !empty($post['estado']))
	{
		$exec = Cross_Controller::cadastro('pessoas', $post);
	    print_r( json_encode($exec) );
	}