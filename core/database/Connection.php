<?php

/**
* Class for Connection
*/
class Connection
{
	
	public static function make($config)
	{
		try {
			// return new PDO('mysql:host=localhost;dbname=prap','root','');
			return new PDO(
				'mysql:host='.
				$config['host'].';dbname='.
				$config['name'],
				$config['username'],
				$config['password'],
				$config['options']


			); 
		
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
}

