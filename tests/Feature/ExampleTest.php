<?php

namespace KodeIngatan\Mudahsenyo\Tests\Feature;

use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
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

        BadasoUser::create([
            'name' => 'hello',
            'email' => 'hello@world.com',
            'password' => Hash::make("password"),
        ]);

        dd(BadasoUser::all());

        $response = $this->get('/');
        $response->assertSuccessful();
    }
}
