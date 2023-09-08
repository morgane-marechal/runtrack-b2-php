<?php

class Grade{

    private ?int $id = null;
    private ?int $room_id = null;
    private ?string $name = null;
    private ?Datetime $year = null;

    public function __construct($id=null, $room_id=null, $name=null, $year=null)
    {
        $this->id = $id;
        $this->room_id = $room_id;
        $this->name = $name;
        $this->year = $year;
    }


    public function getId(){
        return $this->id;
    }

    public function setId($new_id){
        $this->id=$new_id;
    }

    public function getName(){
        return $this->name;
    }    
    
    public function setFullname($new_name){
        $this->name=$new_name;
    }
}


?>