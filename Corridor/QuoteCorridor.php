<?php 
namespace Corridor;
use Engine\RandomQuotes;
use Engine\MainControl;
Class QuoteCorridor implements CorridorInterface
{
    public function enter()
    {
        PHP_EOL.readline('A faint voice echos...').PHP_EOL;
    }
    public function corridorQuirk($user)
    {
        $quote = new RandomQuotes();
        $quote->getQuote();
        PHP_EOL.readline('It bounces off the walls and through you.').PHP_EOL;
    }
    public function exit($user)
    {
        PHP_EOL.readline('Leaving corridor...').PHP_EOL;
        $mainControl = new MainControl();
        $mainControl->areaSelector($user);
    }
}