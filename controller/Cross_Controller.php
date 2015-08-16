<?php

	include_once __DIR__."/../model/Cross_Model.php";

	class Cross_Controller
	{
		public function cadastro($tabela, array $valores)
		{
			if(!empty($valores) && !empty($tabela))
			{
				$dados['tabela'] = $tabela;
				$dados['nome'] = $valores['nome'];
				$dados['sobrenome'] = $valores['sobrenome'];
				$dados['logradouro'] = $valores['logradouro'];
				$dados['bairro'] = $valores['bairro'];
				$dados['cidade'] = $valores['cidade'];
				$dados['estado'] = $valores['estado'];
				$dados['data_insert'] = date('Y-m-d H:i:s');
				
				$bd = new Cross_Model;
				return $bd->cadastra($dados);
			}
		}
	    
	    public function tudo($tabela)
	    {
	        return Cross_Model::tudo($tabela);
	    }

	    public function edita($tabela, $valores)
	    {
	    	if(!empty($tabela) && !empty($valores))
	    	{
	    		$dados['tabela'] = $tabela;
	    		$dados['id'] = $valores['id'];
	    		$dados['nome'] = $valores['nome'];
	    		$dados['sobrenome'] = $valores['sobrenome'];
				$dados['logradouro'] = $valores['logradouro'];
				$dados['bairro'] = $valores['bairro'];
				$dados['cidade'] = $valores['cidade'];
				$dados['estado'] = $valores['estado'];
				$dados['data_update'] = date('Y-m-d H:i:s');

				return Cross_Model::edita($dados);
	    	}
	    }

	    public function exclui($tabela, $id)
	    {
	    	if (!empty($tabela) && !empty($id)) 
	    	{
	    		$dados['tabela'] = $tabela;
	    		$dados['id'] = $id;

	    		return Cross_Model::exclui($dados);
	    	}
	    }
	}