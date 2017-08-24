<?php

/**
*  Class for QueryBuilder
*/
class QueryBuilder  
{
	protected $pdo;

	public function __construct(PDO $pdo)
	{
		$this->pdo = $pdo;
	}

	public function selectAll($table)
	{
		$select = $this->pdo->prepare("SELECT * FROM {$table}");
		$select->execute();

		return $select->fetchAll(PDO::FETCH_CLASS);
	}
}