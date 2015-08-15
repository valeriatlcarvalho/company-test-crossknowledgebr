<?php
	class Cross_Model extends mysqli
	{
		public function cadastra($tabela, $dados)
		{
			$query = "INSERT INTO `{$tabela}` ";
			$query .= "(`nome`, `sobrenome`, `logradouro`, `bairro`, `cidade`, `estado`, `data_insert`) ";
			$query .= "VALUES ('{$dados['nome']}', '{$dados['sobrenome']}', '{$dados['logradouro']}', '{$dados['bairro']}', '{$dados['cidade']}', '{$dados['estado']}', now()); ";
			
			return $this->query($query);
		}
		
		public function tudo($tabela)
		{
			$query = "SELECT * FROM `{$tabela}`; ";
			
			return $this->query($query);
		}
	}