<?php
class Jeremy {
    private $name;
    private $age;
    private $email;
    private $about;
    private $linkedIn;
    private $github;
    
    public function __construct($name, $age, $email) {
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getAbout() {
        return $this->about;
    }

    public function getLinkedIn() { 
        return $this->linkedIn;
    }
    
    public function getGithub() {
        return $this->github;
    }
    
}