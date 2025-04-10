<?php 
Class RoomController
{
    public function roomChoice($room,$user)
    {
        $room->enter();
        $room->roomQuirk($user);
        $room->exit($user);
    }
    //figures out the room needed and injects it.
    public function roomController($user)
    {
        $seed = rand(1,100);
        if ($seed <= 10)
        {
            $this->roomChoice(new LootRoom,$user); // for loot room
        }
        elseif ($seed <= 50)
        {
            $this->roomChoice(new MonsterRoom,$user); // for monster room
        } 
        elseif ($seed <= 60)
        {
            $this->roomChoice(new BossRoom,$user); // for boss room
        } 
        elseif ($seed <= 70)
        {
            $this->roomChoice(new TrappedRoom,$user); // for trapped room
        } 
        elseif ($seed <= 80)
        {
            $this->roomChoice(new EmptyRoom,$user); // for empty room
        } 
        elseif ($seed <= 99)
        {
            $this->roomChoice(new StoryTellingRoom,$user); // for story telling room
        } 
        elseif ($seed <= 100)
        {
            $this->roomChoice(new KingsRoom,$user); // for kings room 1%
        } 
        else {
            echo 'broken';
        }
    }
}