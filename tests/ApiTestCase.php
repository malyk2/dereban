<?php

namespace Tests;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Event;


class ApiTestCase extends TestCase
{
    protected function passportInstall()
    {
        Artisan::call('passport:install');
    }

    protected function fakeEvents()
    {
        Event::fake();
    }
}