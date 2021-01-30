<?php


class Model_New_User Extends Model_Base
{
	public function fieldsTable(){
		return array(

			'id' => 'Id',
			'email' => 'email',
			'name' => 'name',
			'address' => 'address',
			'phone' => 'phone',
			'comments' => 'comments',
			'department' => 'department',
		);
	}

	public function addUser($args) {
		$fields = [];
		if ($args) {
			foreach ($args as $key => $value) {
				$fields [$key] = "'" . $value . "'";
			}
		}
		$this->set($this->table, $fields);
	}
}