<?php
Class Weapon extends Item
{
    public $type;
    

    public function __construct($id, $name, $price, $type)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
        
    }
}