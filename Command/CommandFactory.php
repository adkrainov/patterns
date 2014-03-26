<?php
/**
 */

namespace Command;

class CommandFactory
{
    public static function getCommand ($action = 'default')
    {
        if (preg_match('/\W/', $action)) {
            throw new CommandNotFoundException('Not allowed symbols at command');
        }
        $class = ucfirst(strtolower($action)) . "Command";
//var_dump($class); die;
        return new LoginCommand();
        //return new $class();
    }
}