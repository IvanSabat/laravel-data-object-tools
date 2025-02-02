<?php

declare(strict_types=1);

namespace IvanSabat\DataObjects\Tests;

use IvanSabat\DataObjects\Providers\PackageServiceProvider;
use Orchestra\Testbench\TestCase;

class PackageTestCase extends TestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            PackageServiceProvider::class,
        ];
    }
}
