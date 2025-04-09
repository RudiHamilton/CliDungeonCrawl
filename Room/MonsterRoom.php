<?php
Class MonsterRoom implements RoomInterface
{
    public function enter()
    {
        echo 'You feel another presence in this room...'.PHP_EOL;
    }
    public function roomQuirk($user)
    {
        $monsterRandomiser = new MonsterRandomiser();
        $monster = $monsterRandomiser->randomMonster();
        
        $battle = new Battle($user,$monster);
        $battle->start();
        
    }
    public function exit($user)
    {
        PHP_EOL.readline('Leaving room...').PHP_EOL;
        $mainControl = new MainControl();
        $mainControl->areaSelector($user);
    }
}