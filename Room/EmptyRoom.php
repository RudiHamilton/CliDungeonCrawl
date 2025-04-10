<?php 
Class EmptyRoom implements RoomInterface
{
    public function enter()
    {
        PHP_EOL.readline('The room before you looks empty...').PHP_EOL;
    }
    public function roomQuirk($user)
    {
        $rand = rand(1,10);
        if($rand == 5){
            $quotes = new RandomQuotes();
            $quotes->getQuote();
        }
    }
    public function exit($user)
    {
        PHP_EOL.readline('Leaving room...').PHP_EOL;
        $mainControl = new MainControl();
        $mainControl->areaSelector($user);
    }
}