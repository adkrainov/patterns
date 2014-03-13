<?php
/**
 */

namespace Observer\CustomRealisation;

interface Observable
{
    public function attach(Observer $observer);
    public function detach(Observer $observer);
    public function notify();
}