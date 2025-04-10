<?php 
Class RandomQuotes
{
    public function getQuote()
    {
        $quote = require __DIR__.'../../Config/RandomQuotesArray.php';
        echo PHP_EOL.$quote.PHP_EOL.PHP_EOL;
    }
}
