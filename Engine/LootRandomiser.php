<?php
Class LootRandomiser
{
    public function lootPool()
    {
        $item = require __DIR__.'../../Config/ItemArray.php';
        $lootseed = rand(1,5);
        $randomItem = $item[$lootseed];
        
        $attack1 = new Attack($randomItem['attack1Name'],
        $randomItem['attack1Damage']);
        $attack2 = new Attack($randomItem['attack2Name'],
        $randomItem['attack2Damage']);

        $weapon = new Weapon($randomItem['id'],
        $randomItem['name'],
        $randomItem['type'],
        $attack1,
        $attack2,
        $randomItem['price']        
        );
        return $weapon;
    }
}