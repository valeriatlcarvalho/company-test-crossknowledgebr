<?php
	
	include_once __DIR__."/../model/CrossConecta_Model.php";

	class Cross_Model
	{
		public function cadastra(array $dados)
		{
			$query = "INSERT INTO `{$dados['tabela']}` (`nome`, `sobrenome`, `logradouro`, `bairro`, `cidade`, `estado`, `data_insert`) ";
			$query .= "VALUES ('{$dados['nome']}', '{$dados['sobrenome']}', '{$dados['logradouro']}', '{$dados['bairro']}', '{$dados['cidade']}', '{$dados['estado']}', '{$dados['data_insert']}'); ";
			
			$con = CrossConecta_Model::conecta();
			
 			return mysqli_query($con, $query);
		}
		
		public function tudo($tabela)
		{
			$query = "SELECT * FROM `{$tabela}`; ";
			
			$con = CrossConecta_Model::conecta();
			
			return mysqli_query($con, $query);
		}

		public function edita(array $dados)
		{
			$query = "UPDATE `{$dados['tabela']}` ";
			$query .= "SET nome = '{$dados['nome']}', sobrenome = '{$dados['sobrenome']}', logradouro = '{$dados['logradouro']}', bairro = '{$dados['bairro']}', cidade = '{$dados['cidade']}', estado = '{$dados['estado']}', data_update = '{$dados['data_update']}' ";
			$query .= "WHERE id = '{$dados['id']}'; ";

			$con = CrossConecta_Model::conecta();
			
 			return mysqli_query($con, $query);
		}

		public function exclui(array $dados)
		{
			$query = "DELETE FROM `{$dados['tabela']}` ";
			$query .= "WHERE id = '{$dados['id']}'";
			
			$con = CrossConecta_Model::conecta();
			
 			return mysqli_query($con, $query);
		}
	}