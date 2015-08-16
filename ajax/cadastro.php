<?php

	include_once __DIR__."/../controller/Cross_Controller.php";

    $post = $_POST;
    unset($_POST);
	
	$exec = Cross_Controller::cadastro('pessoas', $post);
    print_r( json_encode($exec) );