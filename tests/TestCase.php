<?php

namespace VendorName\Skeleton\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use VendorName\Skeleton\SkeletonServiceProvider;

class TestCase extends Orchestra
{
    /**
     * Inject serive provider
     */
    protected function getPackageProviders($app)
    {
        return [
            SkeletonServiceProvider::class
        ];
    }
}
