<?php
spl_autoload_register(function ($class){
    $filename="Corridor/$class.php";
        if(!file_exists($filename))
        {
            return "file : $filename is not Exist on the Given Path";
        }
    require_once "Corridor/$class.php";
});
spl_autoload_register(function ($class){
    $filename="Engine/$class.php";
        if(!file_exists($filename))
        {
            return "file : $filename is not Exist on the Given Path";
        }
    require_once "Engine/$class.php";
});
spl_autoload_register(function ($class){
    $filename="Entity/$class.php";
        if(!file_exists($filename))
        {
            return "file : $filename is not Exist on the Given Path";
        }
    require_once "Entity/$class.php";
});
spl_autoload_register(function ($class){
    $filename="Items/$class.php";
        if(!file_exists($filename))
        {
            return "file : $filename is not Exist on the Given Path";
        }
    require_once "Items/$class.php";
});
spl_autoload_register(function ($class){
    $filename="Items/Weapon/$class.php";
        if(!file_exists($filename))
        {
            return "file : $filename is not Exist on the Given Path";
        }
    require_once "Items/Weapon/$class.php";
});
spl_autoload_register(function ($class){
    $filename="Room/$class.php";
        if(!file_exists($filename))
        {
            return "file : $filename is not Exist on the Given Path";
        }
    require_once "Room/$class.php";
});
spl_autoload_register(function ($class){
    $filename="config/$class.php";
        if(!file_exists($filename))
        {
            return "file : $filename is not Exist on the Given Path";
        }
    require_once "config/$class.php";
});