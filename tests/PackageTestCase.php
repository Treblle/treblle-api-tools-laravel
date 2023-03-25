<?php

namespace Treblle\Tools\Tests;

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\ServiceProvider;
use Orchestra\Testbench\TestCase;
use Treblle\Tools\Facades\Http\Headers;
use Treblle\Tools\Providers\PackageServiceProvider;

class PackageTestCase extends TestCase
{
    /**
     * @param Application $app
     * @return array<int,class-string<ServiceProvider>>
     */
    protected function getPackageProviders($app): array
    {
        return [
            PackageServiceProvider::class,
        ];
    }

    /**
     * @param Application $app
     * @return array<string,class-string<Facade>>
     */
    protected function getPackageAliases($app): array
    {
        return [
            'Headers' => Headers::class,
        ];
    }
}
