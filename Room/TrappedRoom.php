<?php
Class TrappedRoom implements RoomInterface
{
    public function enter()
    {
        PHP_EOL.readline('You walk into the room and all seems normal.').PHP_EOL;
        PHP_EOL.readline('It wasnt normal...').PHP_EOL;
        PHP_EOL.readline('Spikes protude from the ground beneath you!').PHP_EOL;
    }
    public function roomQuirk($user)
    {
        $health = $user->getHp();
        $health = round($health/20);
        $user->takeDamage($health);
        echo 'You take '.$health.' points of damage.';
    }
    public function exit($user)
    {
        PHP_EOL.readline('Leaving room...').PHP_EOL;
        $mainControl = new MainControl();
        $mainControl->areaSelector($user);
    }
}