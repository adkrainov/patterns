<?php
/**
 */

namespace Interpreter;

class BooleanAndExpression extends OperatorExpression
{
    protected function doInterpret(InterpreterContext $context,
        $resultLeft, $resultRight)
    {
        $context->replace($this, $resultLeft && $resultRight);
    }
}