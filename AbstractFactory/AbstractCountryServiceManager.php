<?php
/**
 */

namespace AbstractFactory;

abstract class AbstractCountryServiceManager
{
    /**
     * @return AbstractHydrantService
     */
    abstract public function getHydrantService();
}