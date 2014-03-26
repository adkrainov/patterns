<?php
/**
 */

namespace Visitor;

abstract class ArmyVisitor
{
    abstract public function visit(Unit $node);

    public function visitArcherUnit(ArcherUnit $node)
    {
        $this->visit($node);
    }

    public function visitLaserCannonUnit(LaserCannonUnit $node)
    {
        $this->visit($node);
    }

    public function visitArmy(Army $node)
    {
        $this->visit($node);
    }
}