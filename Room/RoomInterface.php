<?php 
namespace Room;


interface RoomInterface
{
    public function enter();
    public function roomQuirk($user);
    public function exit($user);
}