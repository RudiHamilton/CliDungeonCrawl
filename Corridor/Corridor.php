<?php 
namespace Corridor;
use Engine\MainControl;
Class Corridor implements CorridorInterface
{
    public function enter()
    {
        PHP_EOL.readline('Finally a moment to rest.').PHP_EOL;
    }
    public function corridorQuirk($user)
    {

    }
    public function exit($user)
    {
        PHP_EOL.readline('Leaving corridor...').PHP_EOL;
        $mainControl = new MainControl();
        $mainControl->areaSelector($user);
    }
}