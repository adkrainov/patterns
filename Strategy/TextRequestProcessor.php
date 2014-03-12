<?php
/**
 */

namespace Strategy;

class TextRequestProcessor extends RequestProcessor
{
    public function send($request)
    {
        return "bankRequest: ".$request;
    }
}