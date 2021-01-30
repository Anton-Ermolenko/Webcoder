<?php


Abstract Class Model_Base
{
	public function __construct($select = false) {

		global $dbObject;
		$this->db = $dbObject;


		$modelName = get_class($this);
		$tableName = strtolower(str_replace('Model_', '',$modelName));
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