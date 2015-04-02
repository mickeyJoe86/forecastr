<?php 



class Person {

	protected $name;

	public function __construct($name)
	{

		$this->name = $name;

	}

}

class Business {

	protected $staff;

	public function __construct(Staff $staff)
	{
		
		$this->staff = $staff;
	
	}

	public function hire (Person $person)
	{

		//add person to staff collection
		$this->staff->add($person);

	}

	public function getStaffMembers()
	{
		return $this->staff->members();
	}


}

class Staff {

	protected $members = [];

	public function __construct($members = [])
	{
		$this->members[] = $members;
	}

	public function add(Person $person)
	{

		$this->members[] = $person;

	}

	public function members()
	{

		return $this->members;

	}


}


$mike = new Person('Mike');
$kassie = new Person('Kassie');

$staff = new Staff(['Mike']);

$lfpl = new Business($staff);

$lfpl->hire($kassie);

var_dump($lfpl->getStaffMembers());




//(new Person)->message();





