<?php
/**
 */

namespace Strategy;

abstract class RequestProcessor
{
    abstract function send($request);
}