<?php

namespace Items\Weapon;

use Items\Item;

Class Weapon extends Item
{
    public $type;
    public Attack $attack1;
    public Attack $attack2;
    public $price;

    public function __construct($id, $name, $type, $attack1, $attack2, $price,)
    {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->attack1 = $attack1;
        $this->attack2 = $attack2;
        $this->price = $price;
    }
    public function getAttack1()
    {
        return $this->attack1;
    }
    public function getAttack2()
    {
        return $this->attack2;
    }
}