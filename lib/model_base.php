<?php


Abstract Class Model_Base
{
	public function __construct($tableName) {

		global $dbObject;
		$this->db = $dbObject;


		$this->table = $tableName;


	}

	protected function _getResult($sql){
		try{
			$db = $this->db;
			$stmt = $db->query($sql);
			$rows = $stmt->fetchAll();
			$this->dataResult = $rows;
		}catch(PDOException $e) {
			echo $e->getMessage();
			exit;
		}

		return $rows;
	}

}