<?php
/**
 */

namespace Strategy;

abstract class Bank
{
    /**
     * @var RequestProcessor
     */
    protected $requestProcessor;

    public function __construct(RequestProcessor $requestProcessor)
    {
        $this->requestProcessor = $requestProcessor;
    }
    public function sendRequest($request)
    {
        return $this->requestProcessor->send($request);
    }

}