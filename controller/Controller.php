<?php
require DIR."/model/Conexao.php";
require DIR."/model/Model.php";

class Controller
{
	function __construction()
	{
		$con = new Conexao;
		$model = new Model;
		$con->conectaBanco();
	}

	public function cadastrarNovo()
	{
		
	}

	public function listarTudo($tb)
	{
		$registros = $model->selecionaTudo($tb);
		var_dump($registros);
	}

}