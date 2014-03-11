<?php
/**
 */
namespace AbstractFactory;

class DenmarkServiceManager extends AbstractCountryServiceManager
{
    public function getHydrantService()
    {
        return new \AbstractFactory\DenmarkHydrantService();
    }
}