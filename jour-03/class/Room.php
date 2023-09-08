<?php

class Room{

    private ?int $id = null;
    private ?int $floor_id = null;
    private ?string $name = null;
    private ?int $capacity = null;

    public function __construct($id=null, $floor_id = null, $name=null, $capacity=null)
    {
        $this->id = $id;
        $this->floor_id = $floor_id;
        $this->name = $name;
        $this->capacity = $capacity;
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