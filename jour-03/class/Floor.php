<?php

class Floor{

    private ?int $id = null;
    private ?string $name = null;
    private ?int $level = null;

    public function __construct($id=null, $name=null, $level=null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->level = $level;
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