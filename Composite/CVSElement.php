<?php
/**
 * Элемент системы контроля версий
 */

abstract class CVSElement
{
    public $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    abstract public function add(CVSElement $element);
    abstract public function remove(CVSElement $element);
    abstract public function display();
}