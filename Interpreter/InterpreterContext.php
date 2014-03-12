<?php
/**
 */

namespace Interpreter;

class InterpreterContext
{
    private $expressionstore = array();

    public function replace(Expression $exp, $value)
    {
        $this->expressionstore[$exp->getKey()] = $value;
    }

    public function lookup(Expression $exp)
    {
        return $this->expressionstore[$exp->getKey()];
    }
}