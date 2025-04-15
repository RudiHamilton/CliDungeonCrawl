<?php

Namespace Items\Weapon;

Class Attack
{
    public $attackName;
    public $attackDamage;

    public function __construct($attackName,$attackDamage)
    {
        $this->attackName = $attackName;
        $this->attackDamage = $attackDamage;
    }

    public function getAttackName()
    {
        return $this->attackName;
    }
    public function getAttackDamage():int
    {
        $randomDamage10Percent = round($this->attackDamage/10);
        $start = $this->attackDamage - $randomDamage10Percent;
        $end = $this->attackDamage + $randomDamage10Percent;
        $attackDamage = rand($start, $end);
        return round($attackDamage);
    }
}