<?php

class Employee{
    private $id;
    private $name;
    private $email;
    private $address;
    private $phone;
    private $position;
    private $avatar;
    private $departmentId;

    public function __construct($id,$name,$email,$address,$phone,$position,$avatar,$departmentId){
        $this->id=$id;
        $this->name=$name;
        $this->email=$email;
        $this->address=$address;
        $this->phone=$phone;
        $this->position=$position;
        $this->avatar=$avatar;
        $this->departmentId=$departmentId;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function setId($id){
        $this->id=$id;
    }
    
    public function getName(){
        return $this->name;
    }
    
    public function setName($name){
        $this->name=$name;
    }
    
    public function getEmail(){
        return $this->email;
    }
    
    public function setEmail($email){
        $this->email=$email;
    }
    
    public function getAddress(){
        return $this->address;
    }
    
    public function setAddress($address){
        $this->address=$address;
    }
    
    public function getPhone(){
        return $this->phone;
    }
    
    public function setPhone($phone){
        $this->phone=$phone;
    }
    
    public function getPosition(){
        return $this->position;
    }
    
    public function setPosition($position){
        $this->position=$position;
    }
    
    public function getAvatar(){
        return $this->avatar;
    }
    
    public function setAvatar($avatar){
        $this->avatar=$avatar;
    }
    
    public function getDepartmentId(){
        return $this->departmentId;
    }
    
    public function setDepartmentId($departmentId){
        $this->departmentId=$departmentId;
    }
}