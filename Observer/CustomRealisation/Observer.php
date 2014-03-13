<?php
/**
 */

namespace Observer\CustomRealisation;

interface Observer
{
    public function update(Observable $observer);
}