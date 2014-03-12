<?php
/**
 */

namespace Interpreter;

class EqualsExpression extends OperatorExpression
{
    protected function doInterpret(InterpreterContext $context,
        $resultLeft, $resultRight)
    {
        $context->replace($this, $resultLeft == $resultRight);
    }
}