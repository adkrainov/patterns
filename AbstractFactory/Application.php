<?php
/**
 */

namespace AbstractFactory;

class Application
{
    public function __construct(AbstractCountryServiceManager $countryService)
    {
        $countryService->getHydrantService()->connect();
    }
}
