<?php
/**
 *
 */

namespace FactoryMethod;

abstract class EncoderManager
{
    abstract public function getSignalEncoder();

    abstract public function getSignalView();

    abstract public function getSignalForm();
}