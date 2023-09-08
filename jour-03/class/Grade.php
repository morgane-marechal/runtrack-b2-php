<?php

class Grade{

    public ?int $id = null;
    public ?int $room_id = null;
    public ?string $name = null;
    public ?Datetime $year = null;

    public function __construct($id=null, $room_id=null, $name=null, $year=null)
    {
        $this->id = $id;
        $this->room_id = $room_id;
        $this->name = $name;
        $this->year = $year;
    }
}


?>