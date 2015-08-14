<?php
#require "../model/Conexao.php";
#require "../model/Model.php";

class Controller
{
	function __construction()
	{
		$con = new Conexao;
		$con->conectaBanco();
	}
    
    public function cadastrar($tabela, array $dados)
    {
        $model = new Model;
        return $model->cadastrar($tabela, $dados);
    }
    
	public function listarTudo($tb)
	{
		$model = new Model;
		return $model->selecionaTudo($tb);
	}

}