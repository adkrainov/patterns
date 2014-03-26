<?php
/**
 */

namespace Visitor;

abstract class CompositeUnit extends Unit
{
    protected $units = array();

    public function add(Unit $element)
    {
        $element->setDepth($this->depth + 1);

        $this->units[$element->id] = $element;
    }

    public function remove(Unit $element)
    {
        unset($this->units[$element->id]);
    }

    public function display()
    {
        /** @var $unit Unit*/
        foreach ($this->units as $unit) {
            $unit->display();
        }
    }

    public function accept(ArmyVisitor $visitor)
    {
        parent::accept($visitor);

        /** @var $thisUnit Unit */
        foreach ($this->units as $thisUnit) {
            $thisUnit->accept($visitor);
        }
    }
}