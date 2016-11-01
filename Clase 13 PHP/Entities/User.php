<?php

class User
{
	private $id;
	private $firstName;
	private $lastName;
	private $email;
	private $username;
	private $password;
	private $birthDate;
	private $bio;

	/** @var Section[] */
	private $sections;

	public function __construct($firstName, $lastName, $email, $username, $password)
	{
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->email = $email;
		$this->username = $username;
		$this->password = $password;

		$this->sections = [];
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function setBirthDate($birthDate)
	{
		$this->birthDate = $birthDate;
	}

	public function setBio($bio)
	{
		$this->bio = $bio;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getFirstName()
	{
		return $this->firstName;
	}

	public function getLastName()
	{
		return $this->lastName;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function getUsername()
	{
		return $this->username;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function getBirthDate()
	{
		return $this->birthDate;
	}

	public function getBio()
	{
		return $this->bio;
	}

	public function addSection(Section $section)
	{
		$this->sections[] = $section;
	}

	/**
	 * @return Section[]
	 */
	public function getSections()
	{
		return $this->sections;
	}
}