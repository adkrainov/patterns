<?php
/**
 */

class Revision extends CVSElement
{
    public function add(CVSElement $element)
    {
        print ("Cannot add to a leaf");
    }

    public function remove(CVSElement $element)
    {
        print("Cannot remove from a leaf");
    }

    public function display()
    {
        print_r($this->id."<br>");
    }
}