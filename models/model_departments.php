<?php


class Model_Departments Extends Model_Base
{

	public function fieldsTable(){
		return array(

			'id' => 'Id',
			'department' => 'department',
		);
	}

	public function getDepartmentsList () {
		$sql = "SELECT `department` FROM $this->table";
		$this->_getResult($sql);
		return $this->dataResult;
	}

	public function deleteDepartment ($name) {
		$modelUser = new Model_All_Users('all_users');
		$param = $name['delete'];
		$modelUser->deleteUserByDepartment($param);

		$sql = "DELETE FROM $this->table WHERE department = '$param'";
		$this->deleteBy($sql);
		return $this->dataResult;
	}

	public function addDepartment($name) {
		$fields['department'] = "'" . $name . "'";
		$this->set($this->table, $fields);
	}
}