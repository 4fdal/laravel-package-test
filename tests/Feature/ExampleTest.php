<?php

namespace KodeIngatan\Mudahsenyo\Tests\Feature;

use Illuminate\Foundation\Auth\User;
use KodeIngatan\Mudahsenyo\Models\BadasoUser;
use KodeIngatan\Mudahsenyo\Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {

        dd(BadasoUser::all());

        $response = $this->get('/');
        $response->assertSuccessful();
    }
}
