<?php
namespace Corridor;
use Engine\MonsterRandomiser;
use Engine\Battle;
use Engine\MainControl;

Class AmbushCorridor implements CorridorInterface
{
    public function enter()
    {
        PHP_EOL.readline('Something doesnt feel right...').PHP_EOL;
        echo PHP_EOL.'It was an ambush!'.PHP_EOL;
    }
    public function corridorQuirk($user)
    {
        $monsterRandomiser = new MonsterRandomiser();
        $monster = $monsterRandomiser->randomMonster();
        $battle = new Battle($user,$monster);
        $battle->start();
    }
    public function exit($user)
    {
        PHP_EOL.readline('Leaving corridor...').PHP_EOL;
        $mainControl = new MainControl();
        $mainControl->areaSelector($user);
    }
}