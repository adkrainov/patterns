<?php
/**
 *  Конфигурация системы
 */
namespace Singleton;

class Config
{
    private $props = array();
    private static $instance;

    private function __construct() {}

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new Config();
        }
        return self::$instance;
    }

    public function setProperty($key, $value)
    {
        $this->props[$key] = $value;
    }

    public function getProperty($key)
    {
        return $this->props[$key];
    }
}