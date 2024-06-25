<?php

namespace core\classes;

use PDO;

class Db
{
	private $connection;
	private $stmt;

	public function __construct($db_config)
	{
		try {
			$this->connection = new PDO(
				"mysql:host={$db_config['host']};dbname={$db_config['dbname']}",
				$db_config['user'],
				$db_config['pass'],
				[
					PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
				]
			);
		} catch (\PDOException $e) {
			echo $e->getMessage();
		}
	}

	public function query($sql, $params = null): static
	{
		$this->stmt = $this->connection->prepare($sql);
		$this->stmt->execute($params);
		return $this;
	}
	public function findAll() {
		return $this->stmt->fetchAll();
	}
	public function find() {
		return $this->stmt->fetch();
	}
	public function findColumn() {
		return $this->stmt->fetchColumn();
	}
}