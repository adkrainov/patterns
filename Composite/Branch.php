<?php
/**
 */

class Branch extends CVSElement
{
    private $children = array();

    public function add(CVSElement $element)
    {
        $this->children[$element->id] = $element;
    }

    public function remove(CVSElement $element)
    {
        unset($this->children[$element->id]);
    }

    public function display()
    {
        /** @var $child CVSElement*/
        foreach ($this->children as $child) {
            $child->display();
        }
    }
}