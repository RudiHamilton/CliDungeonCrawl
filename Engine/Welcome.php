<?php

namespace Engine;

use Entity\User;
use Items\Weapon\Attack;
use Items\Weapon\Weapon;
use Engine\MainControl;


Class Welcome
{
    public function titleScreen()
    {
        echo PHP_EOL." ▄▀▀█▄▄   ▄▀▀▄ ▄▀▀▄  ▄▀▀▄ ▀▄  ▄▀▀▀▀▄   ▄▀▀█▄▄▄▄  ▄▀▀▀▀▄   ▄▀▀▄ ▀▄          ▄▀▄▄▄▄   ▄▀▀▄▀▀▀▄  ▄▀▀█▄   ▄▀▀▄    ▄▀▀▄  ▄▀▀▀▀▄     ".PHP_EOL;
        echo "█ ▄▀   █ █   █    █ █  █ █ █ █        ▐  ▄▀   ▐ █      █ █  █ █ █         █ █    ▌ █   █   █ ▐ ▄▀ ▀▄ █   █    ▐  █ █    █      ".PHP_EOL;
        echo "▐ █    █ ▐  █    █  ▐  █  ▀█ █    ▀▄▄   █▄▄▄▄▄  █      █ ▐  █  ▀█         ▐ █      ▐  █▀▀█▀    █▄▄▄█ ▐  █        █ ▐    █      ".PHP_EOL;
        echo "  █    █   █    █     █   █  █     █ █  █    ▌  ▀▄    ▄▀   █   █            █       ▄▀    █   ▄▀   █   █   ▄    █      █       ".PHP_EOL;
        echo " ▄▀▄▄▄▄▀    ▀▄▄▄▄▀  ▄▀   █   ▐▀▄▄▄▄▀ ▐ ▄▀▄▄▄▄     ▀▀▀▀   ▄▀   █            ▄▀▄▄▄▄▀ █     █   █   ▄▀     ▀▄▀ ▀▄ ▄▀    ▄▀▄▄▄▄▄▄▀ ".PHP_EOL;
        echo "█     ▐             █    ▐   ▐         █    ▐            █    ▐           █     ▐  ▐     ▐   ▐   ▐            ▀      █         ".PHP_EOL;
        echo "▐                   ▐                  ▐                 ▐                ▐                                          ▐         ".PHP_EOL.PHP_EOL;
        return;
    }
    public function body()
    {
        echo 'Welcome to Dungeon Crawl a cli dungeon crawler. Can you escape. Can you leave?'.PHP_EOL.PHP_EOL;
        $username = readline('Enter Username: ');
        
        $user = new User(1,$username,100,100, attackDamage: 20,healAmount: 30);
        $starterAttack1 = new Attack('Slash',25);
        $starterAttack2 = new Attack('Stab',20);
        $starterWeapon = new Weapon('w001','Rusty Sword','Sword',$starterAttack1,$starterAttack2,0);

        $user->equipWeapon($starterWeapon);
        echo PHP_EOL.'press enter to click through the CLI :)'.PHP_EOL;
        readline(PHP_EOL.'Welcome '.$user->name.' as you start to wake up the strange feelings all come back...'.PHP_EOL); 
        readline(PHP_EOL.'...'.PHP_EOL.PHP_EOL); 
        readline('Almost like youve done this before.'.PHP_EOL.PHP_EOL); 
        readline('The walls are black like soot and the room smells of death and damp.'.PHP_EOL.PHP_EOL);
        $control = new MainControl();
        $control->areaSelector($user);
    }
}