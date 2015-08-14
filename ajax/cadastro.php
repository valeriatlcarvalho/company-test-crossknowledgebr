<?php

    #require '../constantes.php';
    require "../controller/Controller.php";
    require "../model/Model.php";


    $post = $_POST;
    unset($_POST);

    #print_r( json_encode($post) ) ;

    $cadastro = new Controller;
    $id = $cadastro->cadastrar('pessoas', $post);
    if($id)
    {
        require "../view/listagem.php";
    }
    else
    {
        echo "fail";
    }