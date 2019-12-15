<?php

namespace AnthraxisBR\PHP7xTo74Conversor\Tests;

use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Console\Kernel;

trait CreatesApplication
{

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {

        $pwd = getenv("PWD");
        $exp = explode('/', $pwd);
        if($exp[count(explode('/', $pwd)) - 1] == 'laravel-7.x-to-7.4-conversor'){
            $count = count(explode('/', $pwd)) - 1;
            unset($exp[$count]);
            unset($exp[$count - 1]);
            unset($exp[$count - 2]);
            $pwd = implode('/', $exp);
        }


        $app = require $pwd . '/bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        Hash::setRounds(4);

        return $app;
    }
}
