<?php

namespace KodeIngatan\Mudahsenyo\Tests;

use KodeIngatan\Mudahsenyo\Provider\MudahsenyoServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        // additional setup
    }

    protected function getPackageProviders($app)
    {
        return [
            MudahsenyoServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // perform environment setup
    }
}
