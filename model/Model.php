<?php

require "Conexao.php";

class Model
{
    protected $_tabela;
    /**
        mysql_query(); executa um comando SQL no banco de dados. 
        mysql_fetch_array(); retorna linha de consulta até que a condição seja falsa. 
        mysql_free_result(); libera memória utilizada. 
        mysql_close(); fecha conexão com o servidor.
    */
    
	public function cadastrar($tabela, array $dados)
	{
        $con = new Conexao;
        $conectou = $con->conectaBanco();
        
        $query = "INSERT INTO `{$tabela}` (`nome`, `sobrenome`, `logradouro`, `bairro`, `cidade`, `estado`, `data_insert`) VALUES (";
        $query .= "'{$dados['nome']}', '{$dados['sobrenome']}', '{$dados['logradouro']}', '{$dados['bairro']}', '{$dados['cidade']}', '{$dados['estado']}', NOW()";
        $query .= ");";
        $cadastrou = mysqli_query($conectou, $query);
        if($cadastrou)
        {
            #Retorna o `id`
            return mysqli_insert_id();
        }
        else
        {
            echo '\n#0 ';
            echo $query;
            echo '\n#1 ';
            echo mysqli_error();
            echo '\n#2 ';
            die('insert: falhou');
        }
        
        $con->fechaConexao();
	}
    
    public function selecionaTudo($tabela)
    {
        $con = new Conexao;
        $conectou = $con->conectaBanco();
        
        $query = "SELECT * FROM `{$tabela}`";
        $executou = mysqli_query($conectou, $query);
        $retornou = mysqli_num_rows($executou);
        if($executou && ($retornou > 0))
        {
            $resultado = mysqli_fetch_all($executou, MYSQLI_BOTH);
        }
        
        $con->fechaConexao();
        return $resultado;
    }
    
    /**
        @campos precisa seguir o seguinte padrão:
        array(
            'especicações do campo 1',
            'especicações do campo 2',
            'especicações do campo etc',
        )
    */
    public function criaTabela($nome, array $campos)
    {
        $con = new Conexao;
        $con->conectaBanco();
        
        $sql = "CREATE TABLE IF NOT EXISTS `{$nome}`";
        $sql .= "(";
            $sql .= implode(',', $campos);
        $sql .= ");";
        
        $executou = mysql_query($sql);
        if($executou)
        {
            return $this->selecionaTudo($nome);
        }
        else
        {
            return false;
        }
        
        $con->fechaConexao();
    }

}