<?php 
Class EerieCorridor implements CorridorInterface
{
    public function enter()
    {
        PHP_EOL.readline('Something doesnt feel right...').PHP_EOL;
        PHP_EOL.readline('The walls are beady').PHP_EOL;
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