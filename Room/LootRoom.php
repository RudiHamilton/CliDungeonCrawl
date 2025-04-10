<?php 
Class LootRoom implements RoomInterface
{
    public function enter()
    {
        PHP_EOL.readline('You found a loot room!').PHP_EOL;
    }
    public function roomQuirk($user)
    {
        $seed = rand(1,100);
        if($seed <=20){
            $mimic = new Monster('1001','Mimic',100,100,30);
            $battle = new Battle($user,$mimic);
            $battle->start();
            $lootRandomiser = new LootRandomiser();
            $weapon = $lootRandomiser->lootPool();
            echo 'Found the '.$weapon->name.PHP_EOL;
        }else{
            $lootRandomiser = new LootRandomiser();
            $weapon = $lootRandomiser->lootPool();
            echo 'Found the '.$weapon->name.PHP_EOL;
            $choice = readline('Would you like to equip this weapon? (y/n)');
            if (strtolower($choice) == 'y'){
                $user->equipWeapon($weapon);
                echo 'You equipped the'.$user->getEquippedWeaponName();
            }else{
                echo 'Weapon not equipped';
            }
            
           
            //echo 'Found Marlboro Reds and a Fake cart.'.PHP_EOL;
        }
    }
    public function exit($user)
    {
        PHP_EOL.readline('Leaving room...').PHP_EOL;
        $mainControl = new MainControl();
        $mainControl->areaSelector($user);
    }
}