<?php
/**
 */

namespace Visitor;

class Army extends CompositeUnit
{
    public function bombardStrength()
    {
        $ret = 0;
        foreach ($this->units as $unit) {
            $ret += $unit->bombardStrength();
        }

        return $ret;
    }
}