<?php
/**
 */

namespace Command;

class Controller
{
    private $context;

    public function __construct()
    {
        $this->context = new CommandContext();
    }

    public function getContext()
    {
        return $this->context;
    }

    public function process()
    {
        $cmd = CommandFactory::getCommand($this->context->getParam('action'));
        if (!$cmd->execute($this->context)) {
            print_r('ERROR');
        } else {
            print_r('OK');
        }
    }
}