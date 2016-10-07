<?php

require_once "Repository.php";
require_once "UserRepository.php";
require_once "UserJsonRepository.php";

class JsonRepository extends Repository{
  private $UserRepository;

  public function getUserRepository(){
    if($this->UserRepository == null){
      $this->UserRepository = new UserJsonRepository();
    }
    return $this->UserRepository;
  }
}
