<?php

namespace Abstracts;

use Slim\Factory\AppFactory;

abstract class RouterImplementation
{
    protected AppFactory $app;

    protected function __construct(AppFactory $app)
    {
        $this->app = $app;
    }

    protected function baseContextApi(string $baseContextApi = '/api/v1')
    {
    }
}
