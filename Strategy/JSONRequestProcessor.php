<?php
/**
 */

namespace Strategy;

class JSONRequestProcessor extends RequestProcessor
{
    public function send($request)
    {
        return "{bankRequest: ".$request."}";
    }
}