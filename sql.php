<?php
	# Ao executar irá criar o banco e a tabela pessoas (se não existirem)
		$con = new Conexao;
		$model = new Model;
		$con->conectaBanco();
		$pessoas = [
			'id int auto_increment not null primary key',
			'nome varchar(35) not null',
			'sobrenome varchar(70) not null',
			'logradouro varchar(180) null',
			'bairro varchar(150) null',
			'cidade varchar(150) null',
			'estado varchar(2) null'
		];
		$model->criaTabela('pessoas', $pessoas);