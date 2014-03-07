<?php
/**
 *  Конфигурация системы
 */
namespace Singleton;

class Example
{
    public $config;

    public function __construct()
    {
        $this->config = Config::getInstance();
    }

    public function getConfig()
    {
        return $this->config;
    }
}