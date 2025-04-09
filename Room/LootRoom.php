<?php 
Class LootRoom implements RoomInterface
{
    public function enter()
    {
        PHP_EOL.readline('You found a loot room!').PHP_EOL;
    }
    public function roomQuirk($user)
    {
        
    }
    public function exit($user)
    {
        PHP_EOL.readline('Leaving room...').PHP_EOL;
        $mainControl = new MainControl();
        $mainControl->areaSelector($user);
    }
}