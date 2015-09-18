<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
	if ( ! function_exists('encrypt'))
	{			
		$chave = "A-z5%";

		function encrypt($valor)
		{
			global $chave;
			$valor = md5($chave.$valor);
			return $valor;
		}
	}