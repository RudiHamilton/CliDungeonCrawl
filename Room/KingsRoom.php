<?php
namespace Room;
use Entity\Boss;
use Engine\Battle;
use Engine\MainControl;
Class KingsRoom implements RoomInterface
{
    public function enter()
    {
        PHP_EOL.readline('You are really fucked!').PHP_EOL;
    }
    public function roomQuirk($user)
    {
        $king = new Boss(201,"King Straticut", 300, 300, 30);
        $battle = new Battle($user,$king);
        $battle->start();
    }
    public function exit($user)
    {
        PHP_EOL.readline('Leaving room...').PHP_EOL;
        $mainControl = new MainControl();
        $mainControl->areaSelector($user);
    }
}