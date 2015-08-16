<?php

	class CrossConecta_Model
	{
		public function conecta()
		{
			return mysqli_connect('localhost', 'root', '', 'cross');
		}
	}