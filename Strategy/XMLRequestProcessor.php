<?php
/**
 */

namespace Strategy;

class XMLRequestProcessor extends RequestProcessor
{
    public function send($request)
    {
        return "<bankRequest>".$request."</bankRequest>";
    }
}