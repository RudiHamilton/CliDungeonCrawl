<?php
namespace Engine;
use Corridor\QuoteCorridor;
use Corridor\AmbushCorridor;
use Corridor\Corridor;
use Corridor\EerieCorridor;
use Corridor\HealCorridor;
Class CorridorController
{
    public $corridor;
    public function corridorChoice($corridor,$user)
    {
        $corridor->enter();
        $corridor->corridorQuirk($user);
        $corridor->exit($user);
    }
    //figures out the corridor thats needed then injects it.
    public function corridorController($user)
    {
        $seed = rand(1,100);
       
        if ($seed <= 25)
        {
            $this->corridorChoice(new QuoteCorridor,$user); //for quote corridor
        } 
        elseif ($seed <= 40)
        {
            $this->corridorChoice(new AmbushCorridor,$user); //for ambush corridor
        } 
        elseif ($seed <= 60)
        {
            $this->corridorChoice(new HealCorridor,$user); //for heal corridor
        } 
        elseif ($seed <= 94)
        {
            $this->corridorChoice(new Corridor,$user); // for empty corridor
        } 
        elseif ($seed <= 100) 
        {
            $this->corridorChoice(new EerieCorridor,$user); // for eerier corridor
        } 
        else 
        {
            echo 'broken';
        }
    }
}
