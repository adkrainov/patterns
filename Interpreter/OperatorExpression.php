<?php
/**
 */

namespace Interpreter;

abstract class OperatorExpression extends Expression
{
    /**
     * @var Expression
     */
    protected $leftOperator;
    /**
     * @var Expression
     */
    protected $rightOperator;

    public function __construct(Expression $leftOperator, Expression $rightOperator)
    {
        $this->leftOperator  = $leftOperator;
        $this->rightOperator = $rightOperator;
    }

    function interpret(InterpreterContext $context)
    {
        $this->leftOperator->interpret($context);
        $this->rightOperator->interpret($context);
        $resultLeft = $context->lookup($this->leftOperator);
        $resultRight = $context->lookup($this->rightOperator);

        $this->doInterpret($context, $resultLeft, $resultRight);
    }

    abstract protected function doInterpret(InterpreterContext $context,
        $resultLeft, $resultRight
    );
}