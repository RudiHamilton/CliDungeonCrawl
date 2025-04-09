<?php
Class MainControl
{
    public static $count;
    public function areaSelector($user)
    {
        self::$count++; 
        if(self::$count%2){
            $room = new RoomController($user);
            $room->roomController($user);
        }else{
            $corridor = new CorridorController($user);
            $corridor->corridorController($user);
        }
    }
}