<?php

class Room{

    public ?int $id = null;
    public ?int $floor_id = null;
    public ?string $name = null;
    public ?int $capacity = null;

    public function __construct($id=null, $floor_id = null, $name=null, $capacity=null)
    {
        $this->id = $id;
        $this->floor_id = $floor_id;
        $this->name = $name;
        $this->capacity = $capacity;
    }
}

?>