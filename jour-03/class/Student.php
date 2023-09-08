<?php

class Student{

    public ?int $id = null;
    public ?int $grade_id = null;
    public ?string $email = null;
    public ?string $fullname = null;
    public ?Datetime $birthdate = null;
    public ?string $gender = null;

    public function __construct($id=null, $grade_id=null, $email=null, $fullname=null, $birthdate=null, $gender=null)
    {
        $this->id = $id;
        $this->grade_id = $grade_id;
        $this->email = $email;
        $this->fullname = $fullname;
        $this->birthdate = $birthdate;
        $this->gender = $gender;
    }
}



?>