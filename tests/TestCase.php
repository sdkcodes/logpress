<?php

namespace Sdkcodes\Logpress\Tests;

use Orchestra\Testbench\Concerns\CreatesApplication;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function setUp(): void{
        parent::setUp();
    }

    public function getEnvironmentSetUp($app){
        
    }

    public function getPackageProviders($app){

    }
}
