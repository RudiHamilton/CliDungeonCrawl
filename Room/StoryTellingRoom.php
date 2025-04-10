<?php 
Class StoryTellingRoom implements RoomInterface
{
    public function enter()
    {
        PHP_EOL.readline('There is a table in the middle of this room.').PHP_EOL;
        PHP_EOL.readline('The table has a piece of parchment on top of it.').PHP_EOL;
        PHP_EOL.readline('You read the parchment and it says: ').PHP_EOL;
    }
    public function roomQuirk($user)
    {
        $quote = new RandomQuotes();
        $quote->getQuote();
    }
    public function exit($user)
    {
        PHP_EOL.readline('Leaving room...').PHP_EOL;
        $mainControl = new MainControl();
        $mainControl->areaSelector($user);
    }
}