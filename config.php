<?php

include_once __DIR__."/autoload.php";

$conexao = CrossConecta_Model::conecta();

$param = @$_GET['criarTbPes'];

if($conexao && $param)
{
	$tabela_pessoas = [
		'id int auto_increment not null primary key',
		'nome varchar(35) not null',
		'sobrenome varchar(70) not null',
		'logradouro varchar(180) null',
		'bairro varchar(150) null',
		'cidade varchar(150) null',
		'estado varchar(2) null',
		'data_insert datetime null',
		'data_update datetime null',
	];

	$pessoas = $conexao->query("CREATE TABLE IF NOT EXISTS `pessoas` (".implode(', ', $tabela_pessoas)."); ");
	if($pessoas) return "Tabela Pessoas criada.";
}