<?php
namespace App;
class Singleton
{
    public array $setting = [];
    private static $_instance;

    public function __construct()
    {
        $this->setting = require_once 'config.php';
    }

    public static function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new Singleton();
        }
        return self::$_instance;
    }
}