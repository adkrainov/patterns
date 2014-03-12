<?php
/**
 */

namespace Interpreter;

class BooleanOrExpression extends OperatorExpression
{
    protected function doInterpret(InterpreterContext $context,
        $resultLeft, $resultRight)
    {
        $context->replace($this, $resultLeft || $resultRight);
    }
}