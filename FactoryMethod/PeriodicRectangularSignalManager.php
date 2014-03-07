<?php
/**
 *
 */

namespace FactoryMethod;

class PeriodicRectangularSignalManager
{
    public function getSignalEncoder()
    {
        return new PeriodicRectangularSignalEncoder();
    }

    public function getSignalView()
    {
        return __METHOD__;
    }

    public function getSignalForm()
    {
        return __METHOD__;
    }
}
