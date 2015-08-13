<?php

class Model
{
    protected $_tabela;
    /**
        mysql_query(); executa um comando SQL no banco de dados. 
        mysql_fetch_array(); retorna linha de consulta até que a condição seja falsa. 
        mysql_free_result(); libera memória utilizada. 
        mysql_close(); fecha conexão com o servidor.
    */
    public function selecionaTudo($tabela)
    {
        $query = "SELECT * FROM `{$tabela}`";
        $executou = mysql_query($query);
        $retornou = mysql_num_rows($executou);
        if($executou && ($retornou > 0))
        {
            return $executou;
        }
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
    }
}