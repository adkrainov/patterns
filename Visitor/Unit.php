<?php
/**
 */

namespace Visitor;

abstract class Unit
{
    public $id;
    protected  $depth;

    public function __construct($id)
    {
        $this->id = $id;
    }

    abstract public function add(Unit $element);
    abstract public function remove(Unit $element);
    abstract public function display();

    public function accept(ArmyVisitor $visitor)
    {
        $method = "visit".end(explode('\\', get_class($this)));
        $visitor->$method($this);
    }

    protected function setDepth($depth)
    {
        $this->depth = $depth;
    }

    public function getDepth()
    {
        return $this->depth;
    }
    abstract public function bombardStrength();
}