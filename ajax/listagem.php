<?php
    
   	include_once __DIR__."/../controller/Cross_Controller.php";
    
   	$pessoas = Cross_Controller::tudo('pessoas');
    
    foreach($pessoas as $pessoa)
    {
        $lista['pessoas'][] = $pessoa;
    }
    print_r( json_encode($lista) );