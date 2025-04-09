<?php
interface CorridorInterface
{
    public function enter();
    public function corridorQuirk($user);
    public function exit($user);
}