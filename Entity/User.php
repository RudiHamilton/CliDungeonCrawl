<?php
Class User extends Entity
{
    public $attackDamage;
    public $healAmount;

    public function __construct($id, $name, $healthPool, $currentHealth, $attackDamage, $healAmount)
    {
        $this->id = $id;
        $this->healthPool = $healthPool;
        $this->currentHealth = $currentHealth;
        $this->attackDamage = $attackDamage;
        $this->name = $name;
        $this->healAmount = $healAmount;
    }
    public function getAttackDamage():int
    {
        $randomDamage10Percent = $this->attackDamage/10;
        $start = $this->attackDamage - $randomDamage10Percent;
        $end = $this->attackDamage + $randomDamage10Percent;
        $randomDamage = rand($start, $end);
        return round($randomDamage);
    }
    public function getHealAmount():int
    {
        $randomHeal10Percent = round($this->healAmount/10);
        $start = $this->healAmount - $randomHeal10Percent;
        $end = $this->healAmount + $randomHeal10Percent;
        $randomHeal = rand($start, $end);
        return $randomHeal;
    }

}