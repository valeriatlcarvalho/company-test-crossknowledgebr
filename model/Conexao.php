<?php

class Conexao
{
    protected $_host;
    protected $_usuario;
    protected $_senha;
    protected $_porta;
    protected $_banco;
    
    function __construct()
    {
        #Configura os dados de conexão com banco de dados aqui
        $this->_host    = 'localhost';
        $this->_banco   = 'cross';
        $this->_porta   = '3306';
        $this->_usuario = 'root';
        $this->_senha   = '';
    }
    
    public function conectaBanco()
    {
        $conectou = mysql_connect($this->_host, $this->_usuario, $this->_senha);
        if($conectou)
        {
            #Seleciona banco de dados
            $selecionouBd = mysql_select_db($this->_banco, $conectou);
            if($selecionouBd)
            {
                return true;
            }
            else
            {
                #Se o banco ainda não existir é criado
                $bd = mysql_query("CREATE DATABASE IF NOT EXISTS `{$this->banco}`;");
                if($bd)
                {
                    #Seleciona o banco de dados
                    return mysql_select_db($this->_banco, $conectou);
                }
                else
                {
                    return false;
                }
            }
        }
        else
        {
            return false;
        }
    }
    
}