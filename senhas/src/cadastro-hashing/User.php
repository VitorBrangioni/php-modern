<?php

class User {
	
	private $name;
	private $email;
	private $passwordHash;
	

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
        return $this;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
        return $this;
    }

    public function getPassword(){
        return $this->passwordHash;
    }

    public function setPassword($passwordHash){
        $this->passwordHash = $passwordHash;
        return $this;
    }
    
    public function save() {
    	
    }
    
    public static function findByEmail($email) {
    	
    }

}