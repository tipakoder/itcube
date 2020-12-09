<?php

class Connection
{
	protected $pdo;
	public function __construct($config)
	{
		try{
			$this->pdo = new PDO($config['driver'].':host='.$config['host'].';dbname='.$config['dbname'].';charset='.$config['charset'], $config['user'], $config['password']);
		}catch (\PDOException $e){
			echo 'DB['.$config['dbname'].']:'.$e->getMessage().'<br><br>';
		}
	}
	public function query($sql, $params = [])
	{
		$sth = $this->pdo->prepare($sql);
		$sth->execute($params);
		return $sth->fetchAll();
	}
	public function execute($sql, $params = [])
	{
		$sth = $this->pdo->prepare($sql);
		if($sth->execute($params))
		{
			return true;
		}
		return false;
	}
	public function lastInsertId()
	{
		return $this->pdo->lastInsertId();
	}
}