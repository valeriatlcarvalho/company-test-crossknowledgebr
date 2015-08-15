<?php

function __autoload($classe)
{
	if( strpos($classe, '_Model') )
	{
		$pasta = 'model/';
	}
	elseif( strpos($classe, '_Controller') )
	{
		$pasta = 'controller/';
	}
	
	if(file_exists($pasta.$classe.'.php'))
	{
		require './'.$pasta.$classe.'.php';
		return true;
	}
	return false;
	
}