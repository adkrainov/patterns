<?php

error_reporting(E_ALL);

function __autoload($class)
{
    require __DIR__.'/'.str_replace('\\', '/',$class).'.php';
}