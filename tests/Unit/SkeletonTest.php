<?php

namespace VendorName\Skeleton\Tests\Unit;

use VendorName\Skeleton\Skeleton;
use VendorName\Skeleton\Tests\TestCase;

class SkeletonTest extends TestCase
{
    /** @test */
    public function can_test_hello_world()
    {
        $skeleton = new Skeleton();
        $this->assertEquals('hello world', $skeleton->helloworld());
    }
}
