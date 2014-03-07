<?php
/**
 *
 */

namespace FactoryMethod;

class MeanderSignalManager
{
    public function getSignalEncoder()
    {
        return new MeanderSignalEncoder();
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
