<?php


class Autoloader
{
    private static function autoload($class)
    {
        require_once './Classes/'.$class.'.php';
    }

    public static function register()
    {
        spl_autoload_register([__CLASS__, 'autoload']);
    }
}