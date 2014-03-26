<?php
/**
*/

namespace Command;

abstract class Command
{
    abstract function execute(\Command\CommandContext $context);
}

?>