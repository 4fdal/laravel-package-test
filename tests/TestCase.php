<?php

namespace KodeIngatan\Mudahsenyo\Tests;

use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Artisan;
use KodeIngatan\Mudahsenyo\Provider\MudahsenyoServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        // additional setup

        $this->artisan("db:wipe")->run();
        $this->artisan("migrate")->run();
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
