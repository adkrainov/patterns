<?php
/**
*/

namespace Command;

abstract class Command
{
    abstract function execute(ComandContext $context);
}

?>