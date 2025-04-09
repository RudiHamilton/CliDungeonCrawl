<?php 
Class Boss extends Entity
{
    public $attackDamage;
    public function __construct($id, $name, $healthPool, $currentHealth, $attackDamage)
    {
        $this->id = $id;
        $this->name = $name;
        $this->healthPool = $healthPool;
        $this->currentHealth = $currentHealth;
        $this->attackDamage = $attackDamage;
    }
    public function getAttackDamage():int
    {
        $randomDamage10Percent = round($this->attackDamage/10);
        $start = $this->attackDamage - $randomDamage10Percent;
        $end = $this->attackDamage + $randomDamage10Percent;
        $randomDamage = rand($start, $end);
        return $randomDamage;
    }
}