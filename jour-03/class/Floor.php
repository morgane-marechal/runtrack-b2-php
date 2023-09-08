<?php

class Floor{

    public ?int $id = null;
    public ?string $name = null;
    public ?int $level = null;

    public function __construct($id=null, $name=null, $level=null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->level = $level;
    }
}


?>