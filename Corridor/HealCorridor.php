<?php 
namespace Corridor;
use Engine\MainControl;
Class HealCorridor implements CorridorInterface
{
    public function enter()
    {
        PHP_EOL.readline('You feel soothed by this corridor').PHP_EOL;
    }
    public function corridorQuirk($user)
    {
        echo 'You have been healed 20 HP'.PHP_EOL;
        echo 'Health before: '.$user->getHp().' HP'.PHP_EOL;
        $user->heal(20);
        echo 'Health now: '.$user->getHp().' HP'.PHP_EOL;
    }
    public function exit($user)
    {
        PHP_EOL.readline('Leaving corridor...').PHP_EOL;
        $mainControl = new MainControl();
        $mainControl->areaSelector($user);
    }
}