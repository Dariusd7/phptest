<?php

class Customer {

	private $firstName;
	private $lastName;
	private $phoneNum;
	private $email;

	function __construct($fname, $lname, $phone, $email)
	{
		$this->firstName = $fname;
		$this->lastName = $lname;
		$this->phoneNum = $phone;
		$this->email = $email;
	}

	public function setFirstName($iName)
	{
		$this->firstName = $iName;
	}

	public function getFirstName()
	{
		return $this->firstName;
	}

	public function setLastName($iName)
	{
		$this->lastName = $iName;
	}

	public function getLastName()
	{
		return $this->lastName;
	}

	public function setPhoneNum($iNum)
	{
		$this->phoneNum = $iNum;
	}

	public function getPhoneNum()
	{
		return $this->phoneNum;
	}

	public function setEmail($iEmail)
	{
		$this->email = $iEmail;
	}

	public function getEmail()
	{
		return $this->email;
	}


}
?>