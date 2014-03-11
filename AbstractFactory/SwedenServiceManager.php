<?php
/**
 */
namespace AbstractFactory;

class SwedenServiceManager extends AbstractCountryServiceManager
{
    public function getHydrantService()
    {
        return new \AbstractFactory\SwedenHydrantService();
    }
}