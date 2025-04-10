<?php
Class Battle
{
    private User $player;
    private Entity $enemy;
    public function __construct(User $player, Entity $enemy) {
        $this->player = $player;
        $this->enemy = $enemy;
    }

    public function start()
    {
        $display = new DisplayAscii;
        $display->display($this->enemy->getName());

        $weapon = $this->player->getEquippedWeapon();

        echo PHP_EOL.'Battle has started between '.$this->player->getName().' and '.$this->enemy->getName().PHP_EOL.PHP_EOL;

        while($this->player->isAlive()&& $this->enemy->isAlive())
        {
            echo PHP_EOL.$this->player->getName().' has '.$this->player->getHp().' HP'.PHP_EOL;
            echo PHP_EOL.$this->enemy->getName().' has '.$this->enemy->getHp().' HP'.PHP_EOL.PHP_EOL;
            $choice = readline('[A]ttack or [H]eal, (A/H)');
            if(strtolower($choice == 'a'))
            {
                $attackChoice = readline('Which attack are you going to use :'.PHP_EOL
                .'1. '.$weapon->getAttack1()->getAttackName().PHP_EOL
                .'2. '.$weapon->getAttack2()->getAttackName().PHP_EOL);

                if($attackChoice == 1){
                    $damage = $weapon->getAttack1()->getAttackDamage();
                    $this->enemy->takeDamage($damage);
                }elseif($attackChoice == 2){
                    $damage = $weapon->getAttack2()->getAttackDamage();
                    $this->enemy->takeDamage($damage);
                }else{
                    $damage = 0;
                    echo $this->player->getName().' flinched! (next time try selecting an attack...)';
                }
               
                echo PHP_EOL.$this->player->getName().' attacked and dealt '.$damage.' points of damage to the '.$this->enemy->getName().PHP_EOL;

            }elseif(strtolower($choice == 'h'))
            {
                $heal = $this->player->getHealAmount();
                $this->player->heal($heal);
                echo PHP_EOL.$this->player->name.' healed '.$heal.' points of health'.PHP_EOL;

            }else 
            {
                echo "Invalid action. You hesitate...\n";
            }

            if($this->enemy->isAlive())
            {
                $damage = $this->enemy->getAttackDamage();
                $this->player->takeDamage($damage);
                echo PHP_EOL.$this->enemy->getName().' attacked and dealt '.$damage.' points of damage to '.$this->player->getName().PHP_EOL;
            }else{
                echo PHP_EOL.strtoupper($this->enemy->getName()).' WAS VANQUISHED.'.PHP_EOL;
            }

            if(!$this->player->isAlive())
            {
                ECHO 'YOU WERE SLAIN BY '.strtoupper($this->enemy->getName()).PHP_EOL;
                exit;
            }

           

        }
        
        
    }
}