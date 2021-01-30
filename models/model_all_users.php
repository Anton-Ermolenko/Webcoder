<?php


class Model_All_Users Extends Model_Base
{
	public function getUserList () {
		$sql = "SELECT `id`, `name`, `department` FROM $this->table";
		$this->_getResult($sql);
		return $this->dataResult;
	}

	public function deleteUserByDepartment ($department) {

		$sql = "DELETE FROM $this->table WHERE department = '$department'";
		$this->deleteBy($sql);
		return $this->dataResult;
	}

}