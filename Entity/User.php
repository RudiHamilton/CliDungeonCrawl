<?php
Class User extends Entity
{
    public $attackDamage;
    public $healAmount;
    public ?Weapon $equippedWeapon = null;

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
        return 0;
    }
    public function getHealAmount():int
    {
        $randomHeal10Percent = round($this->healAmount/10);
        $start = $this->healAmount - $randomHeal10Percent;
        $end = $this->healAmount + $randomHeal10Percent;
        $randomHeal = rand($start, $end);
        return $randomHeal;
    }
    public function equipWeapon(Weapon $weapon)
    {
        $this->equippedWeapon = $weapon;
    }
    public function getEquippedWeapon()
    {
        return $this->equippedWeapon;
    }
}