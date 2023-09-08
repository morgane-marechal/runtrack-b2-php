<?php

class Student{

    private ?int $id = null;
    private ?int $grade_id = null;
    private ?string $email = null;
    private ?string $fullname = null;
    private ?Datetime $birthdate = null;
    private ?string $gender = null;

    public function __construct($id=null, $grade_id=null, $email=null, $fullname=null, $birthdate=null, $gender=null)
    {
        $this->id = $id;
        $this->grade_id = $grade_id;
        $this->email = $email;
        $this->fullname = $fullname;
        $this->birthdate = $birthdate;
        $this->gender = $gender;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($new_id){
        $this->id=$new_id;
    }

    public function getGradeId(){
        return $this->grade_id;
    }

    public function setGradeId($new_grade_id){
        $this->grade_id=$new_grade_id;
    }

    public function getEmail(){
        return $this->email;
    }    
    
    public function setEmail($new_email){
        $this->email=$new_email;
    }

    public function getFullname(){
        return $this->fullname;
    }    
    
    public function setFullname($new_fullname){
        $this->fullname=$new_fullname;
    }

    public function getBirthdate(){
        return $this->birthdate;
    }

    public function setBirthdate($new_birthdate){
        $this->birthdate=$new_birthdate;
    }

    public function getGender(){
        return $this->gender;
    }

    public function setGender($new_gender){
        $this->gender=$new_gender;
    }
}



?>