<?php


class Model_User_Detail Extends Model_Base
{
	public function getUser ($userID) {
		$userID = (int)$userID;
		$sql = "SELECT `email`, `name`, `address`, `phone`, `comments`, `department` FROM $this->table WHERE id = $userID";
		$this->_getResult($sql);
		return $this->dataResult;
	}
}