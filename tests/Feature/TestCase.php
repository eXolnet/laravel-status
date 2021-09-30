<?php

namespace Exolnet\Status\Tests\Feature;

use Exolnet\Status\StatusServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    /**
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            StatusServiceProvider::class,
        ];
    }

    public function setUp(): void
    {
        parent::setUp();

        $this->app->setBasePath(dirname(dirname(__DIR__)));
    }
}
