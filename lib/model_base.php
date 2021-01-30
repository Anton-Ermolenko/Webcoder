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

	public function deleteBy($sql){
		try {
			$db = $this->db;
			$result = $db->exec($sql);
		}catch(PDOException $e){
			echo 'Error : '.$e->getMessage();
			echo '<br/>Error sql :  '. $sql ;
			exit();
		}
		return $result;
	}

	public function set($table, $arraySetFields) {
		$arrayAllFields = array_keys($this->fieldsTable());
		$arrayData = array();
		foreach($arrayAllFields as $field){
			if (isset($arraySetFields[$field])){
				$arrayData[] = $arraySetFields[$field];
			} else {
				$arrayData[] = 'NULL';
			}
		}
		$forQueryFields =  implode(', ', $arrayAllFields);
		$forQueryPlace = implode(', ', $arrayData);

		try {
			$db = $this->db;
			$stmt = $db->prepare("INSERT INTO $table ($forQueryFields) values ($forQueryPlace)");
			$result = $stmt->execute($arrayData);
		}catch(PDOException $e){
			echo 'Error : '.$e->getMessage();
			echo '<br/>Error sql : ' . "'INSERT INTO $table ($forQueryFields) values ($forQueryPlace)'";
			exit();
		}

		return $result;
	}


}