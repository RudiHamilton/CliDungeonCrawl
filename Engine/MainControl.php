<?php

namespace Engine;

Use Engine\RoomController;
Use Engine\CorridorController;
use Room\KingsRoom;
Class MainControl
{
    public static $count;
    public function areaSelector($user)
    {
        self::$count++; 
        if(self::$count == 50){
            $room = new RoomController($user);
            $room->roomChoice(new KingsRoom,$user);
        }
        
        if(self::$count%2){
            $room = new RoomController($user);
            $room->roomController($user);
        }else{
            $corridor = new CorridorController($user);
            $corridor->corridorController($user);
        }
    }
}