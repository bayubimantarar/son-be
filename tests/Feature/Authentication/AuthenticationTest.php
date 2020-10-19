<?php

namespace Tests\Feature\Authentication;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    /**
     * [testLoginForm description]
     * @return [type] [description]
     * @group authenticationTest
     */
    public function testSuccessToGetLoginForm()
    {
        $this
            ->get('/authentication/login-form')
            ->assertStatus(200);
    }

    /**
     * [testFailedToGetLoginForm description]
     * @return [type] [description]
     */
    public function testFailedToGetLoginForm()
    {
        $this
            ->get('/authentication/login-forms')
            ->assertStatus(404);
    }

    /**
     * [testSuccesToLogin description]
     * @return [type] [description]
     */
    public function testSuccesToLogin()
    {
        $this
            ->post('/authentication/login', [
                'email' => 'bimantara@mail.com',
                'password' => '123'
            ])
            ->assertStatus(200)
            ->assertJson([
                'email' => 'bimantara@mail.com',
                'password' => '123'
            ]);
    }
}
