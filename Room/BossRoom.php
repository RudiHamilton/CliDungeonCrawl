<?php
Class BossRoom implements RoomInterface
{
    public function enter()
    {
        echo PHP_EOL.'You is so fucked'.PHP_EOL;
    }
    public function roomQuirk($user)
    {
        $bossRandomiser = new BossRandomiser();
        $boss = $bossRandomiser->randomBoss();
        
        $battle = new Battle($user,$boss);
        $battle->start();
    }
    public function exit($user)
    {
        PHP_EOL.readline('Leaving room...').PHP_EOL;
        $mainControl = new MainControl();
        $mainControl->areaSelector($user);
    }
}