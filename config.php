<?php

require_once './autoload.php';

$conexao = new Cross_Model('localhost', 'root', '', 'cross');

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

if($pessoas)
{
	echo "Tabela `pessoas` criada com sucesso!";
	$tabela = $conexao->query("SHOW COLUMNS IN `pessoas` IN `cross`; ");
	echo "<pre>";
	print_r($tabela);
	echo "</pre>";
}