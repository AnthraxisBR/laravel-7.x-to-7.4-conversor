<?php

namespace AnthraxisBR\PHP7xTo74Conversor\Tests;

use Faker\Factory;
use Faker\Generator;
use Illuminate\Foundation\Bootstrap\LoadEnvironmentVariables;
use LaraBlue\Authentication\Models\ClientesModel;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{

    public function setUp()
    {
        parent::setUp();

        $this->app->setBasePath(__DIR__ . '/../');

    }

    protected function getEnvironmentSetUp($app)
    {
        $app->useEnvironmentPath(__DIR__.'/..');
        $app->bootstrapWith([LoadEnvironmentVariables::class]);
        parent::getEnvironmentSetUp($app);
    }
}
