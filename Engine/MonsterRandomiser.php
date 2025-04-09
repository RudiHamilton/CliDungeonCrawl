<?php
require_once __DIR__.'../../Entity/Monster.php';
Class MonsterRandomiser
{
    public function randomMonster():object
    {
        $monsters = require __DIR__.'../../Config/MonsterArray.php';
        $seed = rand(1,3);
        $randomMonster = $monsters[$seed];
        
        $monster = new Monster($randomMonster['id'],
        $randomMonster['name'],
        $randomMonster['healthPool'],
        $randomMonster['currentHealth'],
        $randomMonster['attackDamage'],
        
        );
        return $monster;
    }
}

