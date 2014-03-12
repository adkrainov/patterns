<?php
/**
 */

namespace Interpreter;

class PlusExpression extends OperatorExpression
{
    protected function doInterpret(InterpreterContext $context,
        $resultLeft, $resultRight)
    {
        $context->replace($this, $resultLeft + $resultRight);
    }
}