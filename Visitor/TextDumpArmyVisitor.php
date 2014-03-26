<?php
/**
 */

namespace Visitor;

class TextDumpArmyVisitor extends ArmyVisitor
{
    protected $text;

    public function visit(Unit $node)
    {
        $ret = "";
        $pad = 4*$node->getDepth();
        $ret .= sprintf("%{$pad}s", "");
        $ret .= get_class($node).": ";
        $ret .= "Огневая мощь: ".$node->bombardStrength()."<br>";
        $this->text .= $ret;
    }

    public function getText()
    {
        return $this->text;
    }
}