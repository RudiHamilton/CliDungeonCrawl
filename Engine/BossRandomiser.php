<?php
namespace Engine;
use Entity\Boss;
require_once __DIR__.'../../Entity/Boss.php';
Class BossRandomiser
{
    public function randomBoss():object
    {
        $bosses = require __DIR__.'../../Config/BossArray.php';
        $seed = rand(1,3);
        $randomBoss = $bosses[$seed];
        
        $boss = new Boss($randomBoss['id'],
        $randomBoss['name'],
        $randomBoss['healthPool'],
        $randomBoss['currentHealth'],
        $randomBoss['attackDamage'],
        );
        return $boss;
    }
}