<?php

namespace Tests;

use Tests\Traits\WithApi;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, WithApi;
}
