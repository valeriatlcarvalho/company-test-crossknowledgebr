<?php

class Conexao
{
    protected $_host;
    protected $_usuario;
    protected $_senha;
    protected $_banco;
    
    function Conexao()
    {
        #Configura os dados de conexão com banco de dados aqui
        $this->set('host', 'localhost');
        $this->set('banco', 'cross');
        $this->set('usuario', 'root');
        $this->set('senha', '');
    }
    
    public function conectaBanco()
    {
        $conectou = mysqli_connect($this->_host, $this->_usuario, $this->_senha);
        if($conectou)
        {
            #Seleciona banco de dados
            $selecionouBd = mysqli_select_db($this->get('banco'), $conectou);
            if($selecionouBd)
            {
                return true;
            }
            else
            {
                #Se o banco ainda não existir é criado
                $bd = mysqli_query($conectou, "CREATE DATABASE IF NOT EXISTS {$this->get('banco')}; USE {$this->get('banco')}");
                if($bd)
                {
                    #Seleciona o banco de dados
                    return mysqli_select_db($this->get('banco'), $conectou);
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
    
    public function fechaConexao($conexao = null)
    {
        if(!empty($conexao))
        {
            return mysqli_close($conexao);
        }
        else
        {
            return mysqli_close();
        }
    }
    
    public function get($var)
    {
        $var = '_'.$var;
        return $this->$var;
    }
    
    public function set($var, $val)
    {
        $var = '_'.$var;
        return $this->$var = $val;
    }
    
}