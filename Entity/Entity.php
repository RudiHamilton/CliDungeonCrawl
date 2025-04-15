<?php

namespace Entity;

abstract Class Entity
{
    public $id;
    public $name;
    public $healthPool;
    public $currentHealth;

    public function __construct($id, $name, $healthPool, $currentHealth)
    {
        $this->id = $id;
        $this->name = $name;
        $this->healthPool = $healthPool;
        $this->currentHealth = $currentHealth;
       
    }
    public function takeDamage(int $damage) {
        $this->currentHealth -= $damage;
        if ($this->currentHealth < 0) {
            $this->currentHealth = 0;
        }
    }

    public function heal(int $amount) {
        $this->currentHealth += $amount;
        if ($this->currentHealth > $this->healthPool) {
            $this->currentHealth = $this->healthPool;
        }
    }

    public function isAlive(): bool {
        return $this->currentHealth > 0;
    }

    public function getHp(): int {
        return $this->currentHealth;
    }

    public function getName(): string {
        return $this->name;
    }
    abstract public function getAttackDamage(): int;
}