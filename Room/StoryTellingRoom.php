<?php 
Class StoryTellingRoom implements RoomInterface
{
    public function enter()
    {
        PHP_EOL.readline('The room before you seems fine.').PHP_EOL;
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